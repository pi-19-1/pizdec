<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'ilya' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'ilya' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '12345' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'W$J5=1,-K1RjIB[j(]QTG{=,SoNn=4F4gYp9.^V)xdb [PtkTCffag^&*YO8LPh+' );
define( 'SECURE_AUTH_KEY',  'f#yT`.*dt 7-u@9hWem2A<[m1Ld-J=2Ds3g3t@B&DI4.[8h_23;!FomkFXwh*%_]' );
define( 'LOGGED_IN_KEY',    '|b=f1?|X4uItji=4t@)(sVY(FsP]E,$+Xj,rC{]lI`<75e>ROQzH<H> dyfPgL;e' );
define( 'NONCE_KEY',        '(r/{Pp!>GB1J~WecV=%MIA)=^D,vVu}}{#qYKV^0YGt/fDSt0O-,KigNK!XO t$L' );
define( 'AUTH_SALT',        'O.) 1~@t=Rz1%?t#6?(j56GN$rY=G9l>_Qbhqbbz$P3>J{.+MrQDpPy@m`@Oe4K~' );
define( 'SECURE_AUTH_SALT', 'uUz{yIQQ;yL=@6k9qZlR_@*!jQ]o z0G9rYBcF8_$Lk.C383CMV7L]*6><F|}_TO' );
define( 'LOGGED_IN_SALT',   '312VIXXrB6S$l4h_N!,mYG=T>8Zy{m:nq=}}Da}}C(0SG)>Kn6s-%V.op$h3Wj[G' );
define( 'NONCE_SALT',       '>V`r{$&~~ J_8l#],.M%:!HZN]k=v.CENotP+3T}w#u2(P`-4_N;$Q8va~f8B$eO' );

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
