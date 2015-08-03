<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'boompah');

/** MySQL database username */
define('DB_USER', 'boompah');

/** MySQL database password */
define('DB_PASSWORD', 'Boomdb06!9');

/** MySQL hostname */
define('DB_HOST', 'boompah.db.4833141.hostedresource.com');

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
define('AUTH_KEY',         '>QvN+|Va5uuf|G[DS]]!MHH~cG-b*j4(=g9bltJ#=2vcNOWTXNE!x.g+XIx=?5jA');
define('SECURE_AUTH_KEY',  '-gaBM)b%[_:2 sm(nD?PsTXngt&|?W/g+FY:XF3%MC]OS_)qrf8+yN>.?|KNya1C');
define('LOGGED_IN_KEY',    'rIi,}J-PCR{+`**n;z3q4SjS%ZkBf4@wc[Wv- ,~@H/ts2!oC[[g5tE@z@wQ:`Tp');
define('NONCE_KEY',        '~{Jq~jd-0h]qy-v8<MWGr1PXrPpVGS][J1D$`x97aoB,9Re!N^gQkDG!AUXL-5|d');
define('AUTH_SALT',        '2JE8xf_iHD1kWL-CB (kFln6dQw7n$.,|^.!zqAX5*,HL~F|HJTLn 24>.^.^KD=');
define('SECURE_AUTH_SALT', '__uA1HgGS6%V1Kc1|U)X|n48#}uuH,)XC,:+dPrPREXtoUIt82YEN;M/deA%!/r)');
define('LOGGED_IN_SALT',   '>&lL.P@H0r],H!JKd$.b?;Z#(ZWZ-tqT(@aw`e8U<H-#4-E!STOfPk[;PZ8ha<PD');
define('NONCE_SALT',       'ixA$w/|CZTsR{W|V{C~X6G+m1HBC47MZce6=11{!lJ%;>7Fx;rx;o|vf3FXfQ>K~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
