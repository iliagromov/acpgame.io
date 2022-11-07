<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'acp_local' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8~6{T*G5laR54PK$w{/P%R&0y;lFE&%6MPBY]lq,86r9/srqg##mx2m(Lw9)Bc#S' );
define( 'SECURE_AUTH_KEY',  'yWJH$e5w3IGf9RNzh5A7@pl18J>rV|45~]~Aa%&R`15~2YjdOpj,w.qxW`xHSQVj' );
define( 'LOGGED_IN_KEY',    'J#aK:67fSYt<R4q`c<P;Ph_UhVU05@k]~e))s{P=pr^4$v^M.oUEX7s>dBRH; O{' );
define( 'NONCE_KEY',        '>XKKp#@`PH/P^GG/<Fu[NLEw 0n{!A}n@BmgZOiXOKhT9O%Y3+.=(_7|o0qQ7QKT' );
define( 'AUTH_SALT',        'HnLIc MeaMne@nzN0bMS@;d5:lmeb}C[0VZagTGg<H^O8`{WQzF5:lbSS>O!m$kI' );
define( 'SECURE_AUTH_SALT', '8;sU[iX*!PZlv7LSa=tpdR!xwOVABE=sSqcFn`>Rbp/O2YbaL7#k]a9N4]WtYLc>' );
define( 'LOGGED_IN_SALT',   '}*s?>;XivV.(PD7[<GyO&(dFPA^+_#ale^_A+#X~ h(2sj^`Y:?Pb=[ef]{yB7C5' );
define( 'NONCE_SALT',       'ti:]r$,-E>zEoX{1wUR^S]w%_J^ ^8juXY@|ADYv>EupkhVw,(Nuj=@Z VWp=F?3' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'ac_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
