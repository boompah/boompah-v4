<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'boompah-blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' }93Ej-3Vu:-f|O0]4c`_T?|(u.8Hd-imiG9}A9.) !ZG>H0+pug~e}9a^mOH3|K');
define('SECURE_AUTH_KEY',  '@nh0tF@.hWyfUBjQwZId~E|PkL=3zW^>- 38Y2H~5K-(6_v-b>*x+*[Y%+/%{m-a');
define('LOGGED_IN_KEY',    'yh{thf|#+:oiAWdI9PyJjIz%m=BF^!hq&jFx2kL8[@TQ-}W1()w;r;YZ@~N{P|]O');
define('NONCE_KEY',        'tW$YO9+XQRT#tiY.{{zM=~~SDuQ2eB!pt|?-+9_0H*ZfN3dmLz=|G;Aaky6<GocM');
define('AUTH_SALT',        '[6E19F9-%<^]hAKZNX+/cd3R>^<9`UMGhcyWeDKc>&o<Mi/pg,B81|M[x(p}F_A`');
define('SECURE_AUTH_SALT', '3|=|}JC|Cj)x4|;G[+Q0V&78`s,AHtm=h:|9i[l)EO+[0j# B4~RS_{np{-{QVJl');
define('LOGGED_IN_SALT',   '3xd`Df!%j+6>9Zhs;ni 0&MNKEsR>t@CO9`$K1W|<U[f$[jUUF|LivQ&;;I+yXl9');
define('NONCE_SALT',       '=)AgvK6r/+D@@)!(Qg4=@m,`Vj>[%WSySw$VYSFibi)<!/58ZJDIbC_s_TQXd,EM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
