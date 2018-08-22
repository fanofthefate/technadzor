<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'dmitrij492_cimeg');

/** Имя пользователя MySQL */
define('DB_USER', 'dmitrij492_cimeg');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'o0llvn8e');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f&wo#VU& [!t[GoN#F Z(Hbh<Uwp=;7p4vhOa`kn!*Qy9?eH<Cgbbn <P,xo%<B]');
define('SECURE_AUTH_KEY',  'K]^?nJBGvO?*IXGmMvg4#`ao[@5p]&XyX!J|yTi~7!;{4-C,cYJE[G#Bl].7))l2');
define('LOGGED_IN_KEY',    'Eb3d+#AmqV& <?7s|oH(:Zr*?{y(F%mQ5!R.C{>t-$1AeoEE&WG5iws{t>4RMK& ');
define('NONCE_KEY',        'z[*,7/kPW-=ro,ikYsVJO==f!7?b%J*###>z7wjTq>Z?o*vL<|Tt+32bhJIt:`yg');
define('AUTH_SALT',        '#Gw(@PlsD1im bb;&Z0~Tsxfz;<m:6`:o:6f]_^#9wDg.hgmbfd+=fQ2DT2/]+^t');
define('SECURE_AUTH_SALT', 'sCiM@HdS@4Kye8V{yDADyrX[6]DFUum`SXRX-gO2@qU}?oNG,s9JO8 [gK7om>I$');
define('LOGGED_IN_SALT',   'X91EJ+!g,fhq1O2r}1la he8(Y?|VAV+=PlrNW$8VH~9F{[*76s*6$L3b=r{|-E{');
define('NONCE_SALT',       'S:3oL}45R=dq4|aL}Xu/MgwEjRbr-+-]p2vqc*@t7-+ @4p[+W>BjPceOOFv^3u4');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);
define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST']);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
