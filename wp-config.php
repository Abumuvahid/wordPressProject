<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'muvahike_riel' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'muvahike_riel' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '6I8hcnBCi5' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'AhLMG(6&,%.49)#;St?$fQg]58.3lhmd=}+m3h))f>CPu1hLeBc?4sp>^&(2V!{|' );
define( 'SECURE_AUTH_KEY',  'qs^ar^=0t%qf+x_{~bd;P~XdBt[i. u)KLly-MXF^b@tY4{s7z*3GQ<8-<0mR9+:' );
define( 'LOGGED_IN_KEY',    '0+::eLCPH?^h&CX yH[r]p?0AS1V1mNtxH&ne{lR(]]x,54Nih$T!9NY_p<z0Zb`' );
define( 'NONCE_KEY',        'O^BRI66hIaFZD$~K:R`_0~QwM:Ps3Y.&&Q(C)huR13p&H8=R6*#C`/r4<PlB<c,w' );
define( 'AUTH_SALT',        'IC#I!}yu2,yQ>u.L<QYr$N{%y*~THvaj@f4NJF>3Y<kYK?Q#jV&>dpGj)2_73^7u' );
define( 'SECURE_AUTH_SALT', '*<?%-G&}XsWeH.dVA;}Z<Z4E${}z3-7J}s @}ByIAbA[X7lW&9kc)37cD${cn^&Z' );
define( 'LOGGED_IN_SALT',   'F -AH4@|fGFr$Wi~TB|#{6ru5P%,NDlb3#JEq!]rrDiNQ;pwQX?AwY7aM`9<H11.' );
define( 'NONCE_SALT',       'IVExJeKVI-&e6/vV_wCW-NJSyQQK`e8Kwua2zBQBcHFCktx#1HmX.{o/150V1;fh' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );


// запрет автоматического обновления
define( 'AUTOMATIC_UPDATER_DISABLED', true );



