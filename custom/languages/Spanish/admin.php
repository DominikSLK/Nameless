<?php
/*
 *	Made by TheSuperSkills (Edited by Ariuw and iMaykolRD_)
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr3/pr4
 *
 *  License: MIT
 *
 *  Spanish Language - Admin
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Inicie sesión para ingresar',

	// Sidebar
	'dashboard' => 'Panel de Control',
	'configuration' => 'Configuración',
	'layout' => 'Layout',
	'user_management' => 'Control de Usuarios',
	'admin_cp' => 'Panel Administrativo',
	'administration' => 'Administración',
	'overview' => 'Principal',
	'core' => 'Configuraciones',
	'integrations' => 'Integraciones',
	'minecraft' => 'Minecraft',
	'modules' => 'Módulos',
	'security' => 'Seguridad',
	'sitemap' => 'Mapa del Sitio',
	'styles' => 'Estilos',
	'users_and_groups' => 'Usuarios y Grupos',

	// Overview
	'running_nameless_version' => 'Ejecutando NamelessMC. Versión <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'Ejecutando la versión de PHP <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'Estadísticas',
	'registrations' => 'Registraciones',
	'topics' => 'Temas',
	'posts' => 'Publicaciones',
    'notices' => 'Noticias',
    'no_notices' => 'No hay noticias.',
    'email_errors_logged' => 'Se han registrado los errores de correo electrónico',
	// Core
	'settings' => 'Ajustes',
	'general_settings' => 'Ajustes generales',
	'sitename' => 'Nombre del sitio',
	'default_language' => 'Lenguaje por defecto',
	'default_language_help' => 'Los usuarios podrán elegir entre los idiomas instalados.',
	'install_language' => 'Instalar Idioma',
	'update_user_languages' => 'Actualizar idioma del los Usuarios.',
	'update_user_languages_warning' => 'Esto actualizará el idioma para todos los usuarios de su sitio, incluso si ya han seleccionado uno.',
	'updated_user_languages' => 'Idiomas del los usuarios actualizados.',
	'installed_languages' => 'Todos los nuevos idiomas se han instalado correctamente.',
	'default_timezone' => 'Zona horaria por defecto',
	'registration' => 'Registro',
	'enable_registration' => '¿Activar registro?',
	'verify_with_mcassoc' => '¿Verificar cuentas de Usuarios con MCAssoc?',
	'email_verification' => '¿Habilitar la verificación de correo electrónico?',
	'registration_settings_updated' => 'Ajustes de registro actualizada correctamente.',
	'homepage_type' => 'Tipo de pagina de inicio',
	'post_formatting_type' => 'Tipo de formato posterior',
	'portal' => 'Portal',
	'private_profiles' => 'Perfiles Privados',
	'missing_sitename' => 'Introduzca un nombre del sitio entre 2 y 64 caracteres.',
	'missing_contact_address' => 'Por favor, introduzca una dirección de correo electrónico de contacto de entre 3 y 255 caracteres.',
	'use_friendly_urls' => 'Usar URLs Amigables',
	'use_friendly_urls_help' => 'IMPORTANTE: Tu servidor debe estar configurado para permitir el uso de los archivos mod_rewrite y .htaccess para que esto funcione.',
	'config_not_writable' => 'Tu <strong>core/config.php</strong> archivo no es escribible. Compruebe los permisos de archivo.',
	'settings_updated_successfully' => 'Ajustes Generales actualizados correctamente.',
	'social_media' => 'Redes Sociales',
	'youtube_url' => 'Enlace de Youtube',
	'twitter_url' => 'Enlace de Twitter',
	'twitter_dark_theme' => '¿Usar tema oscuro de Twitter?',
	'discord_id' => 'ID del Servidor de Discord',
	'discord_widget_theme' => 'Tema del Discord Widget',
	'dark' => 'Oscuro',
	'light' => 'Luminoso',
	'google_plus_url' => 'Enlace de Google Plus',
	'facebook_url' => 'Enlace de Facebook',
	'social_media_settings_updated' => 'Ajustes de redes sociales actualizados correctamente.',
	'successfully_updated' => 'Actualizado exitosamente',
    'debugging_and_maintenance' => 'Depuración y mantenimiento',
    'maintenance' => 'Mantenimiento',
    'debugging_settings_updated_successfully' => 'Debugging settings updated successfully.',
    'enable_debug_mode' => '¿Habilitar modo de depuracion?',
    'force_https' => '¿Forzar HTTPs?',
    'force_https_help' => 'Si habilita esto, todas las solicitudes a su sitio web seran redirigidas a https. Debe tener un certificado SSL valido activo para que funcione correctamente.',
    'force_www' => '¿Forzar www?',
    'contact_email_address' => 'Correo electrónico de contacto',
    'emails' => 'Correos electrónicos',
    'email_errors' => 'Errores de correo electrónico',
    'registration_email' => 'Correo electrónico de registro',
    'contact_email' => 'Correo de contacto',
    'forgot_password_email' => '¿Olvidaste tu contraseña?',
    'unknown' => 'Desconocido',
    'delete_email_error' => 'Eliminar error',
    'confirm_email_error_deletion' => '¿Seguro que quieres eliminar este error?',
    'viewing_email_error' => 'Error de visualización',
    'unable_to_write_email_config' => 'No se puede escribir en el archivo <strong>core/email.php</core>. Compruebe los permisos de archivo.',
    'enable_mailer' => '¿Activar PHPMailer?',
    'enable_mailer_help' => 'Habilite esto si los correos electrónico no se envian por defecto. El uso de PHPMailer requiere que usted tenga un servicio capaz de enviar correos electrónico, como Gmail o un proveedor de SMTP.',
    'outgoing_email' => 'Dirección de correo saliente',
    'outgoing_email_info' => 'Esta es la dirección de correo electrónico que NamelessMC utilizará para enviar correos electronicos.',
    'mailer_settings_info' => 'Los campos siguientes son obligatorios si ha habilitado PHPMailer. Para obtener más información sobre como rellenar estos campos, consulta en <a href="https://github.com/NamelessMC/Nameless/wiki/Setting-up-SMTP-with-Nameless-(e.g.-Gmail-or-Outlook)" target="_blank">the wiki</a>.',
    'host' => 'Dirección IP',
	'email_port' => 'Puerto',
    'email_password_hidden' => 'La contraseña no se muestra por razones de seguridad.',
    'send_test_email' => 'Enviar prueba de correo electrónico',
    'send_test_email_info' => 'El siguiente botón intentará enviar un correo electrónico a su dirección de correo electrónico, <strong>{x}</strong>. Se mostrarán todos los errores lanzados mientras se envía el correo.', // Don't replace {x}
    'send' => 'Enviar',
    'test_email_error' => 'Error de prueba de correo electrónico:',
    'test_email_success' => '¡Correo electrónico de prueba enviado con éxito!',
    'terms_error' => 'Asegúrese de que sus términos y condiciones no superen los 100000 caracteres...',
    'privacy_policy_error' => 'Por favor ingrese una política de privacidad de no más de 100000 caracteres.',
    'terms_updated' => 'Términos actualizados con éxito.',
    'avatars' => 'Avatares',
    'allow_custom_avatars' => 'Permitir avatares de usuario personalizados?',
    'default_avatar' => 'Avatar por defecto',
    'custom_avatar' => 'Avatar personalizado',
    'minecraft_avatar' => 'Avatar de Minecraft',
    'minecraft_avatar_source' => 'Fuente para avatar de Minecraft',
    'built_in_avatars' => 'Servicio de avatar integrado',
    'minecraft_avatar_perspective' => 'Minecraft perspectiva de avatar',
    'face' => 'Cara',
    'head' => 'Cabeza',
    'bust' => 'Bust',
    'select_default_avatar' => 'Seleccione un nuevo avatar predeterminado:',
    'no_avatars_available' => 'No hay avatares disponibles. Sube una nueva imagen por encima de la primera.',
    'avatar_settings_updated_successfully' => 'Ajustes de avatar actualizada correctamente.',
    'navigation' => 'Navegación',
    'navbar_order' => 'Orden de la barra de Navegación',
    'navbar_order_instructions' => 'Puede dar a cada elemento un número superior a 0 para pedir artículos en la barra de navegación, siendo 1 el primer artículo y los números más altos que vendrán después.',
    'navbar_icon' => 'Icono de Menú',
    'navbar_icon_instructions' => 'También puede agregar un icono a cada elemento de la barra de navegación aquí, usando este ejemplo <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" rel="noopener nofollow">Font Awesome</a>, <a href="https://semantic-ui.com/elements/icon.html" target="_blank" rel="noopener nofollow">Semantic UI</a>.',
    'navigation_settings_updated_successfully' => 'Ajustes de navegación actualizadas correctamente.',
    'enable_page_load_timer' => '¿Habilitar el tiempo de carga de la página?',
    'google_recaptcha' => '¿Habilitar Google reCAPTCHA?',
    'google_recaptcha_login' => 'Enable Google reCAPTCHA on login?',
    'captcha_type' => 'Captcha Type',
    'recaptcha_site_key' => 'Clave de sitio de reCAPTCHA (Site key)',
    'recaptcha_secret_key' => 'Clave secreta de reCAPTCHA (Secret Key)',
    'registration_disabled_message' => 'Mensaje de registración desactivada',
    'enable_nicknames_on_registration' => '¿Habilitar nicks para registrar usuarios?',
    'validation_promote_group' => 'Grupo de validación posterior',
    'validation_promote_group_info' => 'Este es el grupo al que se promocionará a un usuario una vez que haya validado su cuenta.',
    'login_method' => 'Método de logueo',
    'privacy_and_terms' => 'Términos de Uso',

	// Reactions
	'icon' => 'Icono',
	'type' => 'Tipo',
	'positive' => 'Me gusta',
	'neutral' => 'Neutral',
	'negative' => 'No me gusta',
	'editing_reaction' => 'Edición de reacciones',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Nueva Reacción',
	'creating_reaction' => 'Crear reacción',
	'no_reactions' => 'No hay reacciones todavía.',
	'reaction_created_successfully' => 'Reacción creada correctamente.',
	'reaction_edited_successfully' => 'Reacción actualizada correctamente.',
	'reaction_deleted_successfully' => 'Reacción eliminada correctamente.',
	'name_required' => 'Nombre requerido',
	'html_required' => 'HTML requerido',
	'type_required' => 'Tipo requerido',
	'name_maximum_16' => 'El nombre no debe tener más de 16 caracteres.',
	'html_maximum_255' => 'El HTML no debe tener más de 255 caracteres.',
	'confirm_delete_reaction' => '¿Estás seguro de que quieres eliminar esta reacción?',

	// Custom profile fields
	'custom_fields' => 'Campos personalizados',
	'new_field' => '<i class="fa fa-plus-circle"></i> Nuevo campo',
	'required' => 'Requerido',
	'public' => 'Publico',
	'text' => 'Texto',
	'textarea' => 'Área de texto',
	'date' => 'Fecha',
	'creating_profile_field' => 'Creación de un campo de perfil',
	'editing_profile_field' => 'Edición del campo de perfil',
	'field_name' => 'Nombre del campo',
	'profile_field_required_help' => 'Los campos obligatorios deben ser llenados por el usuario y aparecerán durante el registro.',
	'profile_field_public_help' => 'Los campos públicos se mostrarán a todos los usuarios. Si está desactivado sólo los moderadores pueden ver los valores.',
	'profile_field_error' => 'Introduzca un nombre de campo entre 2 y 16 caracteres.',
	'description' => 'Descripción',
	'display_field_on_forum' => '¿Mostrar campo en el foro?',
	'profile_field_forum_help' => 'Si está activado, el campo se mostrará por el usuario junto a los mensajes del foro.',
	'profile_field_editable_help' => 'Si está activado, los usuarios tendrán permiso para editar el campo en la configuración de su perfil.',
	'no_custom_fields' => 'No hay campos personalizados aún.',
	'profile_field_updated_successfully' => 'El campo de perfil se actualizó correctamente.',
	'profile_field_created_successfully' => 'El campo de perfil se creó correctamente.',
	'profile_field_deleted_successfully' => 'El campo de perfil se eliminó correctamente.',

    // Minecraft
    'enable_minecraft_integration' => '¿Habilitar la integración de Minecraft?',
    'mc_service_status' => 'Estado del servicio Minecraft',
    'service_query_error' => 'No se puede recuperar el estado del servicio.',
    'authme_integration' => 'Integración del AuthMe',
    'authme_integration_info' => 'Cuando la integración de AuthMe está habilitada, los usuarios sólo pueden registrarse en el juego.',
    'enable_authme' => '¿Habilitar la integración de AuthMe?',
    'authme_db_address' => 'Dirección de la nase de datos del AuthMe',
    'authme_db_port' => 'Puerto de la base de datos del AuthMe',
    'authme_db_name' => 'Nombre de la base de datos del AuthMe',
    'authme_db_user' => 'Nombre de usuario de la base de datos del AuthMe',
    'authme_db_password' => 'Contraseña de la base de datos del AuthMe',
    'authme_db_password_hidden' => 'The AuthMe database password is hidden for security reasons.',
    'authme_hash_algorithm' => 'Algoritmo del hash (AuthMe)',
    'authme_db_table' => 'Tabla de usuarios de AuthMe',
    'enter_authme_db_details' => 'Introduce datos válidos de la base de datos.',
    'authme_password_sync' => '¿Sincronizar contraseña con la del AuthMe?',
    'authme_password_sync_help' => 'Si está activada, siempre que la contraseña de un usuario se actualice en el juego, la contraseña también se actualizará en el sitio web.',
    'minecraft_servers' => 'Servidores de Minecraft',
    'account_verification' => 'Verificación de la cuenta de Minecraft',
    'server_banners' => 'Banner del servidor',
    'query_errors' => 'Errores de consulta',
    'add_server' => '<i class="fa fa-plus-circle"></i> Agregar servidor',
    'no_servers_defined' => 'No se han definido servidores aún',
    'query_settings' => 'Configuración de consultas',
    'default_server' => 'Servidor predeterminado',
    'no_default_server' => 'No hay servidor predeterminado',
    'external_query' => '¿Usar consulta externa?',
    'external_query_help' => 'Si la consulta predeterminada del servidor no funciona, habilite esta opción.',
    'adding_server' => 'Añadir un servidor',
    'server_name' => 'Nombre del Servidor',
    'server_address' => 'IP del servidor',
    'server_address_help' => 'Esta es la dirección IP o dominio utilizado para conectarse a su servidor, sin el puerto.',
    'server_port' => 'Puerto del servidor',
    'parent_server' => 'Servidor padre',
    'parent_server_help' => 'Un servidor padre suele ser la instancia de BungeeCord a la que está conectado el servidor, si es que existe.',
    'no_parent_server' => 'No hay servidor padre',
    'bungee_instance' => '¿Esta BungeeCord instalado?',
    'bungee_instance_help' => 'Seleccione esta opción si el servidor es una instancia de BungeeCord.',
    'server_query_information' => 'Con el fin de mostrar una lista de jugadores en línea en su sitio web, su servidor <strong>must</strong> debe tener el \'enable-query\' habilitado en el archivo <strong>server.properties</strong>.',
    'enable_status_query' => '¿Habilitar estado de consulta?',
    'status_query_help' => 'Si esta opción está activada, la página de estado mostrará este servidor en línea o fuera de línea.',
    'show_ip_on_status_page' => 'Quieres que la IP aparesca en la pagina de estado?',
    'show_ip_on_status_page_info' => 'Si esto está habilitado, los usuarios podrán ver y copiar la dirección IP cuando vean la página Estado.',
    'enable_player_list' => '¿Activar la lista de jugadores?',
    'pre_1.7' => '¿La versión del servidor de Minecraft es anterior a la 1.7?',
    'player_list_help' => 'Si está activado, la página de estado mostrará una lista de jugadores en línea.',
    'server_query_port' => 'Puerto de consulta del servidor',
    'server_query_port_help' => 'Esta es la opción query.port en el archivo server.properties de su servidor, siempre que la opción enable-query del mismo archivo esté establecida en true.',
    'server_name_required' => 'Introduzca el nombre del servidor',
    'server_name_minimum' => 'Asegúrese de que su nombre de servidor sea un mínimo de 1 carácter',
    'server_name_maximum' => 'Asegúrese de que su nombre de servidor sea un máximo de 20 carácteres',
    'server_address_required' => 'Introduzca la dirección del servidor',
    'server_address_minimum' => 'Asegúrese de que la dirección de su servidor es de un mínimo de 1 carácter',
    'server_address_maximum' => 'Asegúrese de que la dirección de su servidor sea un máximo de 64 carácteres',
    'server_port_required' => 'Introduzca el puerto del servidor',
    'server_port_minimum' => 'Asegúrese de que su puerto de servidor sea un mínimo de 2 carácteres',
    'server_port_maximum' => 'Asegúrese de que el puerto del servidor tenga un máximo de 5 carácteres',
    'server_parent_required' => 'Seleccione un servidor principal',
    'query_port_maximum' => 'Asegúrese de que su puerto de consulta tenga un máximo de 5 carácteres',
    'server_created' => 'Servidor se ha creado correctamente.',
    'confirm_delete_server' => '¿Está seguro de que desea eliminar este servidor?',
    'server_updated' => 'Servidor actualizado con éxito.',
    'editing_server' => 'Edición del servidor',
    'server_deleted' => 'Servidor eliminado correctamente',
    'unable_to_delete_server' => 'No se puede eliminar el servidor.',
    'leave_port_empty_for_srv' => 'Puede dejar el puerto vacío si es 25565, o si su dominio utiliza un registro SRV',
    'viewing_query_error' => 'Visualización del error de consulta',
    'confirm_query_error_deletion' => '¿Está seguro de que desea eliminar este error de consulta?',
    'no_query_errors' => 'No se han registrado errores de consulta.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> Nuevo banner',
    'purge_errors' => 'Errores de purga',
    'confirm_purge_errors' => '¿Está seguro de que desea purgar todos los errores??',
	'email_errors_purged_successfully' => 'Email errors have been purged successfully.',
	'error_deleted_successfully' => 'El error ha sido eliminado exitosamente.',
	'no_email_errors' => 'No hay errores de correo electrónico registrados.',
	'email_settings_updated_successfully' => 'La configuración del correo electrónico se ha actualizado con éxito.',
	'content' => 'Contenido',
    'mcassoc_help' => 'MCAssoc es un servicio externo que se puede utilizar para verificar que los usuarios poseen la cuenta de Minecraft con la que se han registrado. Para utilizar esta función, deberá registrarse en una clave compartida <a href="https://mcassoc.lukegb.com/" target="_blank">here</a>.',
    'mcassoc_key' => 'Llave compartida de MCAssoc',
    'mcassoc_instance' => 'Llave de instancia de MCAssoc',
    'mcassoc_instance_help' => '<a href="#" onclick="generateInstance();">Click para generar una clave de instancia</a>',
    'mcassoc_error' => 'Asegúrese de que ha introducido correctamente su clave compartida y de que ha generado correctamente una clave de instancia.',
    'updated_mcassoc_successfully' => 'Configuración de MCAssoc actualizada correctamente.',
    'force_premium_accounts' => '¿Forzar cuentas premium de Minecraft?',
    'banner_background' => 'Fondo del Banner',
    'query_interval' => 'Intervalo de consultas (en minutos, debe estar entre 5 y 60)',
    'player_graphs' => 'Gráfica de jugadores',
    'player_count_cronjob_info' => 'Puede configurar un trabajo cRON para consultar sus servidores cada {x} minutos con el siguiente comando:',
    'status_page' => '¿Activar Estado del Servidor?',
    'minecraft_settings_updated_successfully' => 'Ajustes actualizados correctamente.',
    'server_id_x' => 'ID del Servidor: {x}', // Don't replace {x}
    'server_information' => 'Información del Servidor',
    'query_information' => 'Información de la Consulta',
    'query_errors_purged_successfully' => 'Error de la consulta eliminado con correctamente.',
    'query_error_deleted_successfully' => 'Errores de consultas eliminados con correctamente.',
    'banner_updated_successfully' => 'Banner actualizado con éxito. Puede tomar un tiempo para que sus cambios surtan efecto.',

	// Modules
	'modules_installed_successfully' => 'Todos los nuevos módulos han sido instalados correctamente.',
	'enabled' => 'Activado',
	'disabled' => 'Desactivado',
	'enable' => 'Activar',
	'disable' => 'Desactivar',
	'module_enabled' => 'Módulo activado.',
	'module_disabled' => 'Módulo disactivado.',
	'author' => 'Autor:',
	'author_x' => 'Autor: {x}', // Don't replace {x}
	'module_outdated' => 'Hemos detectado que su módulo está destinada a la versión Namelessmc {x}, pero estás ejecutando la versión Namelessmc {y}', // Don't replace "{x}" or "{y}"
	'find_modules' => 'Buscar Módulos',
	'view_all_modules' => 'Ver todos los módulos',
	'unable_to_retrieve_modules' => 'Imposible recuperar los módulos.',
	'module' => 'Módulo',
	'unable_to_enable_module' => 'Imposible activar un módulo incompatible.',

	// Styles
	'templates' => 'Temas',
	'panel_templates' => 'Plantillas del Panel',
	'template_outdated' => 'Hemos detectado que su plantilla está destinada a la versión Namelessmc {x}, pero estás ejecutando la versión Namelessmc {y}', // Don't replace "{x}" or "{y}"
	'active' => 'Activo',
	'deactivate' => 'Desactivar',
	'activate' => 'Activar',
	'warning_editing_default_template' => '¡Advertencia! No se recomienda editar la plantilla predeterminada.',
	'images' => 'Imágenes',
	'upload_new_image' => 'Subir una nueva imagen',
	'reset_background' => 'Restablecer fondo',
	'install' => '<i class="fa fa-plus-circle"></i> Instalar',
	'template_updated' => 'Plantilla actualizada correctamente.',
	'default' => 'Por defecto',
	'make_default' => 'Hacer por defecto',
	'default_template_set' => 'Plantilla predeterminada establecida en {x} exitosamente.', // Don't replace {x}
	'template_deactivated' => 'Tema desactivado.',
	'template_activated' => 'Tema activado.',
	'permissions' => 'Permisos',
	'setting_perms_for_x' => 'Configurando permisos para el tema {x}', // Don't replace {x}
	'templates_installed_successfully' => 'Todos las nuevas plantillas han sido instalados correctamente.',
	'confirm_delete_template' => '¿Estás seguro de que quieres eliminar esta plantilla?',
	'delete' => 'Eliminar',
	'template_deleted_successfully' => 'Plantilla eliminado correctamente.',
	'background_image_x' => 'Imágen del Fondo: <strong>{x}</strong>', // Don't replace {x}
	'banner_image_x' => 'Imágen del Banner: <strong>{x}</strong>', // Don't replace {x}
	'background_directory_not_writable' => 'El directorio <strong>uploads/backgrounds</strong> no es redactable.',
	'template_banners_directory_not_writable' => 'El directorio <strong>uploads/template_banners</strong> no es redactable.',
	'template_banner_reset_successfully' => 'Banner reiniciado correctamente.',
	'template_banner_updated_successfully' => 'Banner actualizado correctamente.',
	'reset_banner' => 'Reiniciar banner',
	'find_templates' => 'Buscas Plantillas',
	'view_all_templates' => 'Ver todas las Plantillas',
	'unable_to_retrieve_templates' => 'No es posible encontrar plantillas',
	'template' => 'Plantilla',
	'stats' => 'Estadísticas',
	'downloads_x' => 'Descargas: {x}',
	'views_x' => 'Vistas: {x}',
	'rating_x' => 'Calificación: {x}',
	'editing_template_x' => 'Editar Plantilla {x}', // Don't replace {x}
	'editing_template_file_in_template' => 'Editando el archivo {x} en la plantilla {y}', // Don't replace {x} or {y}
	'cant_write_to_template' => '¡No se puede escribir en el archivo de la plantilla! Por favor revise los permisos del archivo.',
	'unable_to_delete_template' => 'Imposible eliminar la plantilla. Por favor revise los permisos del archivo.',
	'background_reset_successfully' => 'Fondo reiniciado correctamente.',
	'background_updated_successfully' => 'Fondo actualizado correctamente.',
	'unable_to_enable_template' => 'Imposible activar plantillas incompatibles.',

	// Users & groups
	'users' => 'Usuarios',
	'groups' => 'Grupos',
	'group' => 'Grupo',
	'new_user' => '<i class="fa fa-plus-circle"></i> Nuevo usuario',
	'creating_new_user' => 'Crear nuevo usuario',
	'registered' => 'Registrado',
	'user_created' => 'Usuario creado correctamente.',
	'cant_delete_root_user' => 'No se puede eliminar el usuario root!',
	'cant_modify_root_user' => 'No se puede modificar el grupo del usuario root!',
	'user_deleted' => 'Usuario eliminado correctamente.',
	'confirm_user_deletion' => '¿Está seguro de que desea eliminar a el usuario <strong>{x}</strong>?', // Don't replace {x}
	'validate_user' => 'Validar usuario',
	'update_uuid' => 'Actualizar UUID',
	'update_mc_name' => 'Actualizar el nombre de usuario de Minecraft',
	'reset_password' => 'Restablecer la contraseña',
	'punish_user' => 'Castigar a este usuario',
	'delete_user' => 'Borrar a este usuario',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Otras acciones',
	'disable_avatar' => 'Desactivar avatar',
	'select_user_group' => 'Debe seleccionar un grupo de usuarios.',
	'uuid_max_32' => 'El UUID debe tener un máximo de 32 caracteres.',
	'title_max_64' => 'El título de el usuario debe tener un máximo de 64 caracteres.',
	'group_id' => 'Grupo ID',
	'name' => 'Nombre',
	'title' => 'Título del usuario',
	'new_group' => '<i class="fa fa-plus-circle"></i> Nuevo grupo',
	'group_name_required' => 'Introduzca un nombre de grupo.',
	'group_name_minimum' => 'Asegúrese de que su nombre de grupo tenga un mínimo de 2 carácteres.',
	'group_name_maximum' => 'Asegúrese de que su nombre de grupo tenga un máximo de 20 carácteres.',
	'creating_group' => 'Crear nuevo grupo',
	'group_html_maximum' => 'Asegúrese de que el HTML de su grupo no tenga más de 1024 caracteres.',
	'group_html' => 'Grupo HTML',
	'group_html_lg' => 'Grupo HTML extenso',
	'group_username_colour' => 'Nombre de usuario del grupo',
	'group_staff' => '¿Será el grupo un grupo del personal?',
	'delete_group' => 'Eliminar grupo',
	'confirm_group_deletion' => '¿Está seguro de que desea eliminar el grupo {x}?', // Don't replace {x}
	'group_not_exist' => 'Ese grupo no existe.',
	'secondary_groups' => 'Grupos secundarios',
	'secondary_groups_info' => 'El usuario podrá tener los permisos secundarios de los siguientes rangos. Ctrl+click para seleccionar/deseleccionar múltiples grupos.',
	'unable_to_update_uuid' => 'No se puede actualizar UUID.',
	'default_group' => '¿Será el grupo por defecto (para nuevos Usuarios)?',
	'user_id' => 'ID de Usuario',
	'uuid' => 'UUID',
	'group_order' => 'Orden de Grupo',
	'group_created_successfully' => 'Grupo creado correctamente.',
	'group_updated_successfully' => 'Grupo actualizado correctamente.',
	'group_deleted_successfully' => 'Grupo eliminado correctamente.',
	'unable_to_delete_group' => 'Imposible eliminar el grupo por defecto, o un grupo que tenga acceso al panel administrativo. ¡Por favor actualice los ajustes del grupo primero!',
	'can_view_staffcp' => '¿Puede el grupo ver el Panel Administrativo?',
	'user' => 'Usuario',
	'user_validated_successfully' => 'Usuario validado correctamente.',
	'user_updated_successfully' => 'Usuario actualizado correctamente.',
	'editing_user_x' => 'Editando el usuario {x}', // Don't replace {x}
	'details' => 'Detalles',

	// Permissions
	'select_all' => 'Seleccionar todo',
	'deselect_all' => 'Deseleccionar todo',
	'background_image' => 'Imágen de Fondo',
	'can_edit_own_group' => 'No puedes editar los permisos de tu propio grupo.',
	'permissions_updated_successfully' => 'Permisos actualizados correctamente.',
	'cant_edit_this_group' => 'No puedes editar los permisos de ese grupo.',

	// General Admin language
	'task_successful' => 'Tarea éxitosa.',
	'invalid_action' => 'Acción no válida.',
	'enable_night_mode' => 'Activar modo nocturno',
	'disable_night_mode' => 'Desactivar modo nocturno',
	'view_site' => 'Ver el sitio',
	'signed_in_as_x' => 'Logueado como: {x}', // Don't replace {x}
    'warning' => 'Advertencia',

    // Maintenance
    'maintenance_mode' => 'Modo de mantenimiento',
    'maintenance_enabled' => 'El modo de mantenimiento está activado.',
    'enable_maintenance_mode' => '¿Habilitar modo de mantenimiento?',
    'maintenance_mode_message' => 'Mensaje de modo de mantenimiento',
    'maintenance_message_max_1024' => 'Asegúrese de que su mensaje de mantenimiento tenga un máximo de 1024 caracteres.',

	// Security
	'acp_logins' => 'Historial de Inicios de Sesión',
	'please_select_logs' => 'Por favor, seleccione registros para ver',
	'ip_address' => 'Direccion IP',
	'template_changes' => 'Historial de Cambios',
	'file_changed' => 'Archivo cambiado',
	'all_logs' => 'Todos los registros',
	'action' => 'Acción',
	'action_info' => 'Información de la Acción',

	// Updates
	'update' => 'Actualizar',
	'current_version_x' => 'Versión actual: <strong>{x}</strong>', // Don't replaec {x}
	'new_version_x' => 'Nueva versión: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'Hay una nueva actualización disponible',
	'new_urgent_update_available' => 'Hay una actualización urgente disponible. ¡Por favor actualice tan pronto sea posible!',
	'up_to_date' => '¡Estás en la ultima versión! (2.0.0-pr7)',
	'urgent' => 'Esta actualización es una actualización urgente',
	'changelog' => 'Registro de cambios',
	'update_check_error' => 'Se ha producido un error al comprobar si hay una actualización:',
	'instructions' => 'Instrucciones',
	'download' => 'Descargar',
	'install_confirm' => 'Asegúrese de haber descargado el paquete y cargado primero los archivos contenidos.',
	'check_again' => 'Revisar otra vez',

	// Widgets
	'widgets' => 'Widgets',
	'widget_enabled' => 'Widget activado',
	'widget_disabled' => 'Widget desactivado',
	'widget_updated' => 'Widget actualizado.',
	'editing_widget_x' => 'Editando el widget {x}', // Don't replace {x}
	'module_x' => 'Módulo: {x}', // Don't replace {x}
	'widget_order' => 'Orden del Widget',

    // Online users widget
    'include_staff_in_user_widget' => '¿Incluir a los miembros del Staff en el widget de los Usuarios?',
    'show_nickname_instead_of_username' => '¿Mostrar Apodos en lugar del Nombre de Usuario?',

    // Custom Pages
    'pages' => 'Páginas',
    'custom_pages' => 'Páginas',
    'new_page' => '<i class="fa fa-plus-circle"></i> Nueva página',
    'no_custom_pages' => 'No tienes páginas personalizadas.',
    'creating_new_page' => 'Creando nueva página personalizada',
    'page_title' => 'Título de la página',
    'page_path' => 'Ruta de la página',
    'page_icon' => 'Icono de la página',
    'page_link_location' => 'Ubicación del vínculo',
    'page_link_navbar' => 'Barra de navegación',
    'page_link_footer' => 'Pié de la página',
    'page_link_more' => '"Más": Menú desplegable',
    'page_link_none' => 'No hay link',
    'page_content' => 'Contenido de la página',
    'page_redirect' => '¿Redirigir página?',
    'page_redirect_to' => 'Redirigr a (con procedimiento http://)',
    'unsafe_html' => '¿Permitir HTML inseguro?',
    'unsafe_html_warning' => 'Al habilitar esta opción, se puede usar cualquier HTML en la página, incluido un JavaScript potencialmente peligroso. Solo habilite esto si está seguro de que su HTML es seguro.',
    'include_in_sitemap' => '¿Incluir Mapa del Sitio?',
    'sitemap_link' => 'Enlace:',
    'page_permissions' => 'Permisos de la página',
    'view_page' => '¿Ver página?',
    'editing_page_x' => 'Editando página {x}', // Don't replace {x}
    'unable_to_create_page' => 'No se puede crear la página:',
    'page_title_required' => 'Se requiere el nombre de la página',
    'page_url_required' => 'Se requiere la ruta de la página',
    'link_location_required' => 'Se requiere la ubicación del vínculo',
    'page_title_minimum_2' => 'El título de la página debe ser mínimo de 2 carácteres',
    'page_url_minimum_2' => 'La ruta de la página debe ser mínimo de 2 carácteres',
    'page_title_maximum_30' => 'El título de la página debe ser máximo de 30 carácteres',
    'page_icon_maximum_64' => 'El ícono de la página debe ser máximo de 64 carácteres',
    'page_url_maximum_20' => 'La ubicación del vínculo debe ser máximo de 20 carácteres.',
    'page_content_maximum_100000' => 'El contenido de la página debe ser máximo de 100000 carácteres.',
    'page_redirect_link_maximum_512' => 'El enlace de redireccionamiento de la página debe tener un máximo de 512 caracteres.',
    'confirm_delete_page' => '¿Estás seguro de que quieres eliminar esa página?',
    'page_created_successfully' => 'Pagina creada correctamente.',
    'page_updated_successfully' => 'Pagina actualizada correctamente',
    'page_deleted_successfully' => 'Pagina eliminada correctamente.',

    // API
    'api' => 'API',
    'enable_api' => '¿Habilitar API?',
    'api_info' => 'La API permite que los complementos y otros servicios interactúen con su sitio web, como el <a href="https://namelessmc.com/resources/resource/5-namelessplugin/" target="_blank" >plugin oficial de NamelessMC</a>.',
    'enable_legacy_api' => '¿Habilitar API heredada?',
    'legacy_api_info' => 'La API heredada permite que los complementos que usan la antigua API de la versión 1 de Nameless funcionen con su sitio web versión 2.',
    'confirm_api_regen' => '¿Estás seguro de que quieres regenerar tu llave API?',
	'api_key' => 'Llave de la API',
	'api_url' => 'Enlace de la API',
	'copy' => 'Copiar',
	'api_key_regenerated' => 'La llave de la API ha sido regenerada.',
    'api_registration_email' => 'CORREO DE REGISTRO DE LA API',
	'show_registration_link' => 'Ver enlace de registro',
	'registration_link' => 'Enlace de Registración',
    'link_to_complete_registration' => 'Enlace para completar registro: {x}', // Don't replace {x}
    'api_verification' => '¿Habilitar verificación API?',
    'api_verification_info' => 'Si está habilitado, las cuentas solo se pueden verificar a través de la API, por ejemplo, dentro del juego utilizando el complemento oficial Nameless. <strong>¡Esta opción anulará la verificación del correo electrónico y las cuentas se activarán automáticamente!</strong><br />Debe configurar su grupo predeterminado para que tenga permisos limitados y luego actualice el grupo de validación posterior en la pestaña StaffCP -> Núcleo -> Registro al grupo de miembros completo con permisos normales.',
    'enable_username_sync' => '¿Habilitar sincronización con el nombre de usuario?',
    'enable_username_sync_info' => 'Si está habilitado, el nombre de usuario en el sitio web será cambiado el nombre de usuario usado en el servidor.',
	'api_settings_updated_successfully' => 'Ajustes de la API actualizados.',
	'group_sync' => 'Sincronizar Grupos',
	'group_sync_info' => 'Puedes configurar la API para actualizar automaticamente los grupos de los usuarios cuando el del juego sea cambiado. Simplemente ingresa el nombre del grupo en juego y el grupo será sincronizado automaticamente.',
	'ingame_group' => 'Grupo en Juego',
	'website_group' => 'Sitio web del Grupo',
	'set_as_primary_group' => '¿Establecer como grupo por defecto?',
	'set_as_primary_group_info' => 'Si esta activado, el grupo principal de los usuarios será actualizado. Si está desactivado, el grupo del juego será agregado como grupo secundarios a los usuarios.',
	'ingame_group_maximum' => 'Asegurese que el nombre del grupo sea de 64 caracteres de largo.',
	'select_website_group' => 'Por favor seleccione un grupo.',
	'ingame_group_already_exists' => 'Una regla para la sincronización de los rangos ha sido creada para los grupos en juego.',
	'group_sync_rule_created_successfully' => 'La regla de sincronización de grupos ha sido creada.',
	'group_sync_rules_updated_successfully' => 'La regla de sincronización de grupos ha sido actualizada.',
	'group_sync_rule_deleted_successfully' => 'La regla de sincronización de grupos ha sido eliminada.',
	'existing_rules' => 'Reglas Existentes',
	'new_rule' => 'Nueva Regla',

	// File uploads
	'drag_files_here' => 'Arrastre los archivos aquí para cargarlos.',
	'invalid_file_type' => 'Tipo de archivo invalido!',
	'file_too_big' => '¡Archivo demasiado grande! Su archivo pesa {{filesize}} y el límite es {{maxFilesize}}', // Don't replace {{filesize}} or {{maxFilesize}}
	'allowed_proxies' => 'Proxies permitidos',
	'allowed_proxies_info' => 'Lista separada por líneas de direcciones IP proxy permitidas.',

	// Error logs
	'error_logs' => 'Registros de Error',
	'notice_log' => 'Registros de Noticias',
	'warning_log' => 'Registros de Alertas',
	'custom_log' => 'Registros Personalizados',
	'other_log' => 'Otros Registros',
	'fatal_log' => 'Registros Fatales',
	'log_file_not_found' => 'Archivo de registros no encontrado.',
	'log_purged_successfully' => 'Los registros han sido eliminados.',

	// Hooks
	'discord_hooks' => 'Discord Webhooks',
	'discord_hooks_info' => 'Envia un mensaje al canal de discord para mostrar lo que sucede en el sitio web. Crea un Discord Webhook en Ajustes de Servidor -> Webhooks.',
	'discord_hook_url' => 'Enlace del Webhook',
	'discord_hook_events' => 'Activar eventos de Discord webhooks (Ctrl+Click para seleccionar multiples eventos).',
	'register_hook_info' => 'Nuevo Miembro Registrado',
	'validate_hook_info' => 'Nuevo Miembro Validado',
	'delete_hook_info' => 'Miembro Eliminado',

	// Sitemap
	'unable_to_load_sitemap_file_x' => 'Imposible cargar el mapa del sitio {x}', // Don't replace {x}
	'sitemap_generated' => 'Mapa del Sitio generado correctamente.',
	'sitemap_not_writable' => 'El directorio <strong>cache/sitemaps</strong> no es redactable.',
	'cache_not_writable' => 'El directorio <strong>cache</strong> no es redactable.',
	'generate_sitemap' => 'Generar Mapa del Sitio',
	'download_sitemap' => 'Descargar Mapa del Sitio',
	'sitemap_not_generated_yet' => '¡El Mapa del Sitio no ha podido ser generado!',
	'sitemap_last_generated_x' => 'El Mapa del Sitio ha sido generado {x}', // Don't replace {x}

	// Page metadata
	'page_metadata' => 'Metadatos',
	'metadata_page_x' => 'Ver metadatos de {x}', // Don't replace {x}
	'keywords' => 'Palabras clave',
	'description_max_500' => 'La descripción debe ser de almenos 500 caracteres.',
	'page' => 'Página',
	'metadata_updated_successfully' => 'Metadatos actualizados correctamente.',

	// Dashboard
	'total_users' => 'Total de Usuarios',
	'total_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'recent_users' => 'Nuevos Usuarios',
	'recent_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'average_players' => 'Jugadores Promedio',
	'nameless_news' => 'Noticias de NamelessMC',
	'unable_to_retrieve_nameless_news' => 'Imposible actualizar las noticias.',
	'confirm_leave_site' => 'Estás a punto de dejar este sitio! ¿Seguro que quieres visitar? <strong id="leaveSiteURL">{x}</strong>?', // don't replace {x} and make sure it has the id leaveSiteURL
	'server_compatibility' => 'Compatibilidad del Servidor',
	'issues' => 'Problemas',

	// Other
	'source' => 'Código fuente',
	'support' => 'Soporte',
	'admin_dir_still_exists' => '¡ALERTA! El directorio <strong>modules/Core/pages/admin</strong> ya existe. Por favor eliminelo.',
	'mod_dir_still_exists' => '¡ALERTA! El directorio <strong>modules/Core/pages/mod</strong> ya existe. Por favor eliminelo.'
);
