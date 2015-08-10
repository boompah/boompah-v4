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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '+!%0>2-`Sd,2 P}%80spQ?J#/!7d]Un0-;(r$ljN]Nm0)@7BI9yfqJqr@&1PET}u');
define('SECURE_AUTH_KEY',  '+$st0`pJx~x5[|mtGWBgx+(n./Z6D-0^{JT8[/NLFV: %4)@9cr@@&l?8HcE&7Dv');
define('LOGGED_IN_KEY',    '@PjZEBN D!6XF+cy]$)wv(3j8MZ+`n2+UU?.&()}%O_U<1YGT-_|hx~(H||/YQjQ');
define('NONCE_KEY',        '|B! .?(---{ukH/9,s-`~Tccgq?L[2ljGH&]N/rrwLut}rX:-Pj Gr-YM[Xs>>0/');
define('AUTH_SALT',        '_H:Y$9 ,ur FC|65Q;qykC[[J9ar{Dlq=qi3=5`*VpMDYiG`zpXXG_vGJbO_`Jg}');
define('SECURE_AUTH_SALT', 'G4)QI-:HJ!7E,>S*r]B!gu+<Y^jQ#ILyS*22nfk)&~SBENt9]jN2Je`(gkq#!S3Z');
define('LOGGED_IN_SALT',   ';@KdhS!+&10O~tyd@>$|-[.Q=/%ui+E+n*(x07zet8-:N+t@lwzA`YKpUp3dQ1`Q');
define('NONCE_SALT',       'T+d?yo-vUgRKvt8!1:8N{D(}OHzxN-]? hmh5!e^8P{L5:?~sHN/cPRU8+5Zgi7B');

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
