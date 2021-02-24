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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'logabiga' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'ir{(kvr`mr@VCI.n*=G{<o%},4A+u0:nPkb<;Yb~TLl*&2ur9Ldr8##kW<  ~lFM' );
define( 'SECURE_AUTH_KEY',  '<4rQzJC VBFD<Bk&A6q<)7;(EkR9-BEppecy0VOEFPJ`6!-$KFvhI8DYsqcVR^cr' );
define( 'LOGGED_IN_KEY',    'Kh9N[KN~tpv`_01BzB`[-;mDLpC8z2oN}$x#>Uhy5k;;UjP>)W[Yv:3of?dPS|B;' );
define( 'NONCE_KEY',        '!N`X;yYeWQ <2tg>2Y# l(AV^3Lb-2@Jt|A^iZs~,h>_kX.P8@%*|&ogE8nSK`c=' );
define( 'AUTH_SALT',        'up3fV%Fk]}}TkMc7)*)On%B6+$1SU(Uar*6y=l|h2IEVQT=@Rp[*Z|7I3eZFSa;(' );
define( 'SECURE_AUTH_SALT', ',f73LjtmT@#WtW5[^sn+`.nKRZ0T3tI/[dn{3twBPhVM)M]2Z;AIG*TM{*8=_5I~' );
define( 'LOGGED_IN_SALT',   'SZYsX^)}7el|0O]B!I-JY0dlRRXwf q_q;!Y|o.=Pv8^9BN;kg7s+yH#zz@H!]s ' );
define( 'NONCE_SALT',       'RUz3ryfwMFhb(vY71c>*KTZNviqDiC9hF8Y>J;}|fbM/8XMmF${(xUp8Z^@_[=%4' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
