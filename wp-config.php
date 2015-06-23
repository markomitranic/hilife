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
define('DB_NAME', 'hilife');

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
define('AUTH_KEY',         'T/KWlp:v``GXWczwJi;]|UATD`Y+(=c7e#2`m9`{EH]1~45fV9BS8~->}Rv2#yAo');
define('SECURE_AUTH_KEY',  'Y*-.t</ (p]wq(1[T.YEHIF]TEcl(zJQ|d/JmlDpVa1sL.sHtD3S1e=+;,CB{#TA');
define('LOGGED_IN_KEY',    's6FCpzl+w)(M2K$i^:?+{z%PSwJ*ji/u]Q6+wl7+y@9kP-=J]j|L70d.LL5C^uPC');
define('NONCE_KEY',        'n]ww~a~|a^8m7wEFI2$*SsM9-Q+Jdk$a2>j&|`s HVx_&z*;]-%dR~q1{EdVjH>/');
define('AUTH_SALT',        'j.5S{9[Eh|wQscy9-=xrpaP~E0|q}V8Cy|CE(R1b`~|Qz@[b|<PJ?@KQS.W-_%[*');
define('SECURE_AUTH_SALT', '-J0G#1_XYuj3C_7~8dX?=5v;Mn1X[Y_; ct4DV!d/Y_@AkhMt/)s|1Y+17twVM #');
define('LOGGED_IN_SALT',   '+d/O,fR:1b|]<P0]z*uC>uy6:1YJ.0oz9~let#y^iQsfYnaT!pnDDA.xF5%g4+r#');
define('NONCE_SALT',       '&Pq0E$xO+/G$J_xMz,m:$Y^E^ZAjWM(gHf }[`oXoLHGn%*=g1y;C.=j.wx|L]<y');

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
