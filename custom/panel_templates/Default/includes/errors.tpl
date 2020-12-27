{if isset($ERRORS)}
    {if count($ERRORS)}
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h5><i class="icon fas fa-exclamation-triangle"></i> {$ERRORS_TITLE}</h5>
        <ul>
            {foreach from=$ERRORS item=error}
                <li>{$error}</li>
            {/foreach}
        </ul>
    </div>
    {/if}
{/if}