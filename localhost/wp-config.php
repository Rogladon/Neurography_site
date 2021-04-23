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
define( 'DB_NAME', 'wp_neurography' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':G_w$`{KDi^l2KU:u-ond*Y(u`C$6KSK24;QyPrb00sb28&LFH&}%_88,x>A 8S7' );
define( 'SECURE_AUTH_KEY',  '<h*OIH~<H4 U-T#j[ts[A<QiR<_oOaq&P^Q*.lgu<NC=yiv/5 &00wJs-rl`|Un{' );
define( 'LOGGED_IN_KEY',    'umM;@q85CllL8NItA.BN&,{(y&>Bu $J0,e|Usvy`5.1L8,*5zefT5@#ii#,iGbQ' );
define( 'NONCE_KEY',        '4I07BZknjJx2fr?hO%A>N<QLM-zLuuY/N)qSo?*g {N=tWrIlbxy~<lcYWUiZuS[' );
define( 'AUTH_SALT',        'o#K:{`X3*.qg1Y!MnES hgE`3qtd_qSFg4yT)zbXW(j7uB.5T:Y0.he.$RXEBgjU' );
define( 'SECURE_AUTH_SALT', '*K?I~0>G~[,+]blF83`#wFg|q`iU>j4y47*MLw,e5E~#Q$c5:b&UH!BI>4?Hdux6' );
define( 'LOGGED_IN_SALT',   'b+*iHU<t<=m~`9ulB%AE-);tSpiOPa89>,iuiq8++ S?wg0`-p^Tf8-S8d=dG>zu' );
define( 'NONCE_SALT',       '++r9buUJd8%J9tC=R>fxkBGM<_J,Yn)Xj 60Oyu1uy9msA^RL,]`ib61:V15>3^B' );

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
