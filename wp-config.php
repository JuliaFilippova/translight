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
define( 'DB_NAME', 'shine' );

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
define( 'AUTH_KEY',         'C~)B49kduGH?uW,Nm#dP~M1@pBe;)CvCJsA6h>1D,_n-6vZ}K.[Zv7Q8?F.EYx/e' );
define( 'SECURE_AUTH_KEY',  ')IJM_saw/pU&rkC9:L95RW2oWS}md`^&ZI%:E2l%_zcXC|/?yfG|rFWbFaRkEKb>' );
define( 'LOGGED_IN_KEY',    '4m7>t.k,mx?%HCq=|1X#x3Dv&LK,2;TI0FSo4mn!LN9mH{AfVw73Lt?5]{8e.{}g' );
define( 'NONCE_KEY',        'Lm*u`(xed3&ukt._9Daaiy[vM^oEnC#FAl[Y0qy^$mCDx6P`;{wI/O[~@f,-9qwd' );
define( 'AUTH_SALT',        'a}U(d%:<?9pfTCEH] K7N/6rIpKFb[wYTzHUO8NXhr fYIDx@,XWu(4._dZ2]]R*' );
define( 'SECURE_AUTH_SALT', 'nj(ASJenhUGHrm>Y^}6xXKZ? k=o?|91--|x?qId{st{OIX.5BOk1<0%E|oMBDsJ' );
define( 'LOGGED_IN_SALT',   '2zWmtNrx)3!@X)FnlWj+E]WI&f<IQ](+A.[NuM/.2<lt49 hDpjqjfnog/kYEqQ@' );
define( 'NONCE_SALT',       'fBIFS6A?;p>8<NxcABd[ZXL3gCBeSvh -nO#`DQ7CJ&Sr}n:IF-g``^|KfVs4JN3' );

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
