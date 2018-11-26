<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'santek_pushly');

/** MySQL database username */
define('DB_USER', 'dmuser');

/** MySQL database password */
define('DB_PASSWORD', 'dmuser');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'GD2ND:W|y5172y6mPoVQb^hwgT@i=#:pZJn5 }bK2WReo>>=lS%`^MoH2N d:lE ');
define('SECURE_AUTH_KEY',  '|*>>QZ(`,E6`2a5z;,Ku8~[{5d]Yu(3PrkJ,b;X}E?2nK}-|Yo?S@z$-n?FCZKt{');
define('LOGGED_IN_KEY',    'Hr.L597:R:~!=PNzo9Yd!pH8=05jBIy>QwFcCj8.G,@6oYLa]V=@?qICqI~g%2?_');
define('NONCE_KEY',        '2Y6bI.KtyMs<#>}n^zSRI?HnhQm1!a8Qn<=/%8;3-uZp,>>B*bVeW0-Y,q+b{}mp');
define('AUTH_SALT',        '&OjX.MFm;IJmJ+Xb7<L;o+!Gpskm_&[jb-2}ej4>aC<6=I`,.SHMx`mG>[/4jjN]');
define('SECURE_AUTH_SALT', '>]]ytF}2?9Fwi4QuL6Shsrl6W;wRq`*|-j*jH2v(Hj]JowyO1uFBRn_f?FysGzbg');
define('LOGGED_IN_SALT',   'qlcFa7NY)PbXJY7sjn=-P+%A*?yJ~^t*B6F?u/fld;tO>K8VJrvJ$wI<9e^*Vb,!');
define('NONCE_SALT',       'DM[ugYi DaJ]T!J#PXd18<?Sa<du1_ws-K!8+-FLvJc;eDVnE*oNTe-jor}nLY-B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_m3h1j8ak_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
