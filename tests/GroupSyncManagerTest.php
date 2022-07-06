<?php

use PHPUnit\Framework\TestCase;

class GroupSyncManagerTest extends TestCase {

    private const SITE_ADMIN = 1;
    private const SITE_MOD = 2;
    private const SITE_MEMBER = 3;
    private const SITE_UNCONFIRMED = 4;

    private const MINECRAFT_ADMIN = 'admin';
    private const MINECRAFT_MOD = 'mod';
    private const MINECRAFT_MEMBER = 'member';
    private const MINECRAFT_UNCONFIRMED = 'guest';

    private const DISCORD_ADMIN = 11111;
    private const DISCORD_MOD = 22222;
    private const DISCORD_MEMBER = 33333;
    private const DISCORD_UNCONFIRMED = 44444;

    public function test_namelessmc_to_minecraft_simple(): void {
        $stub = $this->createPartialMock(GroupSyncManager::class, ['getEnabledInjectors', 'getRules']);

        $mc_injector = $this->createStub(MinecraftGroupSyncInjector::class);

        $stub
            ->method('getEnabledInjectors')
            ->willReturn([
                'website_group_id' => new NamelessMCGroupSyncInjector,
                'ingame_rank_name' => $mc_injector,
            ]);

        $stub
            ->method('getRules')
            ->willReturn([
                [
                    'website_group_id' => self::SITE_MOD,
                    'ingame_rank_name' => self::MINECRAFT_MOD,
                ]
            ]);

        $mc_injector
            ->expects($this->once())
            ->method('addGroup')
            ->willReturn(true);

        $mc_injector
            ->expects($this->never())
            ->method('removeGroup');

        $user = $this->createStub(User::class);

        $user
            ->method('getAllGroupIds')
            ->willReturn([
                // different/fewer group IDs here than the broadcast,
                // because we broadcast *before* we give the user the new group
                self::SITE_MEMBER,
            ]);

        $logs = $stub->broadcastChange($user, NamelessMCGroupSyncInjector::class, [self::SITE_MEMBER, self::SITE_MOD]);

        $this->assertThat($logs['added'],
            $this->containsEqual("ingame_rank_name -> " . self::MINECRAFT_MOD),
        );
        // member not removed because there is no rule setup for it
        $this->assertArrayNotHasKey('removed', $logs);
    }

    public function test_minecraft_to_namelessmc_simple(): void {
        $manager_stub = $this->createPartialMock(GroupSyncManager::class, ['getEnabledInjectors', 'getRules']);
        $nameless_stub = $this->createStub(NamelessMCGroupSyncInjector::class);

        $manager_stub
            ->method('getEnabledInjectors')
            ->willReturn([
                'website_group_id' => $nameless_stub,
                'ingame_rank_name' => new MinecraftGroupSyncInjector,
            ]);

        $nameless_stub
            ->method('getColumnName')
            ->willReturn('website_group_id');
        $nameless_stub
            ->expects($this->once())
            ->method('addGroup')
            // we should be able to not have to add a "willReturn", just to check the times the method is called
            // but this doesn't seem to work. This callback imitates the behaviour of the real injector, and lets us
            // make sure the User is being updated correctly.
            ->willReturnCallback(function (User $user, $group_id) {
                return $user->addGroup($group_id);
            });
        $nameless_stub
            ->expects($this->once())
            ->method('removeGroup')
            ->willReturnCallback(function (User $user, $group_id) {
                return $user->removeGroup($group_id);
            });

        $user = $this->createStub(User::class);
        $user
            ->expects($this->once())
            ->method('addGroup')
            ->willReturn(true);
        $user
            ->expects($this->once())
            ->method('removeGroup')
            ->willReturn(true);

        $manager_stub
            ->method('getRules')
            ->willReturn([
                [
                    'website_group_id' => self::SITE_ADMIN,
                    'ingame_rank_name' => self::MINECRAFT_ADMIN,
                ],
                [
                    'website_group_id' => self::SITE_MEMBER,
                    'ingame_rank_name' => self::MINECRAFT_MEMBER,
                ],
                [
                    'website_group_id' => self::SITE_UNCONFIRMED,
                    'ingame_rank_name' => self::MINECRAFT_UNCONFIRMED,
                ],
            ]);

        $user
            ->expects($this->exactly(2))
            ->method('getAllGroupIds')
            ->willReturn([
                self::SITE_MEMBER,
                self::SITE_UNCONFIRMED,
            ]);

        $logs = $manager_stub->broadcastChange($user, MinecraftGroupSyncInjector::class, [self::MINECRAFT_ADMIN, self::MINECRAFT_MEMBER]);

        $this->assertThat($logs['added'],
            $this->containsEqual("website_group_id -> " . self::SITE_ADMIN),
        );
        $this->assertThat($logs['removed'],
            $this->containsEqual("website_group_id -> " . self::SITE_UNCONFIRMED),
        );
    }

    public function test_namelessmc_to_discord_and_minecraft(): void {
        $stub = $this->createPartialMock(GroupSyncManager::class, ['getEnabledInjectors', 'getRules']);
        $discord_stub = $this->createStub(DiscordGroupSyncInjector::class);
        $discord_stub
            ->method('addGroup')
            ->willReturnCallback(function (User $user, $group_id) {
                return Discord::updateDiscordRoles($user, [$group_id], []) === true;
            });
        $discord_stub
            ->method('removeGroup')
            ->willReturnCallback(function (User $user, $group_id) {
                return Discord::updateDiscordRoles($user, [], [$group_id]) === true;
            });

        // assert that Discord::updateDiscordRoles($user, [$group_id], []) is called with right groups and subsequent methods

        $stub
            ->method('getEnabledInjectors')
            ->willReturn([
                'website_group_id' => new NamelessMCGroupSyncInjector,
                'ingame_rank_name' => new MinecraftGroupSyncInjector,
                'discord_role_id' => $discord_stub,
            ]);

        $user = $this->createStub(User::class);
        $user
            ->expects($this->exactly(2))
            ->method('addGroup')
            ->willReturn(true);
        $user
            ->expects($this->once())
            ->method('removeGroup')
            ->willReturn(true);

        $language_stub = $this->createStub(Language::class);
        $db_stub = $this->createStub(DB::class);
        $db_stub
            ->method('query')
            ->willReturnSelf();
        $db_stub
            ->method('count')
            ->willReturn(0);

        $userIntegrationData = new stdClass();
        $userIntegrationData->identifier = 1111111111111111111;
        $userIntegrationData->username = 'fake_username#0001';
        $userIntegrationData->verified = true;
        $user
            ->expects($this->exactly(3))
            ->method('getIntegration')
            ->willReturn(new IntegrationUser(new DiscordIntegration($language_stub, $db_stub), 1, 'id', $userIntegrationData));

        $stub
            ->method('getRules')
            ->willReturn([
                [
                    'website_group_id' => self::SITE_ADMIN,
                    'ingame_rank_name' => self::MINECRAFT_ADMIN,
                    'discord_role_id' => self::DISCORD_ADMIN,
                ],
                [
                    'website_group_id' => self::SITE_MOD,
                    'ingame_rank_name' => self::MINECRAFT_MOD,
                    'discord_role_id' => self::DISCORD_MOD,
                ],
                [
                    'website_group_id' => self::SITE_MEMBER,
                    'ingame_rank_name' => self::MINECRAFT_MEMBER,
                    'discord_role_id' => self::DISCORD_MEMBER,
                ],
                [
                    'website_group_id' => self::SITE_UNCONFIRMED,
                    'ingame_rank_name' => self::MINECRAFT_UNCONFIRMED,
                    'discord_role_id' => self::DISCORD_UNCONFIRMED,
                ],
            ]);

        $user
            ->expects($this->exactly(9))
            ->method('getAllGroupIds')
            ->willReturn([
                self::SITE_UNCONFIRMED,
            ]);

        $logs = $stub->broadcastChange($user, NamelessMCGroupSyncInjector::class, [self::SITE_MOD, self::SITE_MEMBER]);

        $this->assertThat($logs['added'],
            $this->logicalAnd(
                $this->containsEqual("ingame_rank_name -> " . self::MINECRAFT_MOD),
                $this->containsEqual("ingame_rank_name -> " . self::MINECRAFT_MEMBER),
                $this->containsEqual("discord_role_id -> " . self::DISCORD_MOD),
                $this->containsEqual("discord_role_id -> " . self::DISCORD_MEMBER),
            )
        );
        $this->assertThat($logs['removed'],
            $this->logicalAnd(
                $this->containsEqual("discord_role_id -> " . self::DISCORD_UNCONFIRMED),
            )
        );
    }
}
