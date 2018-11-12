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
define('DB_NAME', 'kkmais');

/** MySQL database username */
define('DB_USER', 'pluralia');

/** MySQL database password */
define('DB_PASSWORD', 'pluralia');

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
define('AUTH_KEY',         'wyP>JQ;5?$1|]+<k4I a7*P2{HAa~sUDQUb/*=mtP#{e?|Jip^mtBc`<$=#qUlL:');
define('SECURE_AUTH_KEY',  'rG8K&E1nk+4??Xfm44JPO*m#]>e6 ;f=#Bkjer=1Ve:pv2vH+H7/_0X{!?VLQ~^/');
define('LOGGED_IN_KEY',    '7#*3)&9DA.4~^AF#L`Q8%NS6tC9{-n1`hK.c/CC9~ly1MUHP.5D}xC/By3# $=I/');
define('NONCE_KEY',        '+rV!GW5#f_dd6%E4~k5Te{7+e3d[[AoR%{h=/ac-pGHvq5o.Z7P=W&uU3<iI|Pri');
define('AUTH_SALT',        'Z_6y?{3E)wFqlRDz%t*tBgZ^@H^qG<)XZSFpyg=.O~9<w[bR~OV_=.p()6N5Ln9/');
define('SECURE_AUTH_SALT', 'A+{-6}HC]WdRRIL >P>$1-Ky4cDiAncmW$+;!,vSm0LW_C E&W[|pAdr.Ud:&*O;');
define('LOGGED_IN_SALT',   'uU4CHE0brRR`PV)@mh)SZ47.}jN(qa`c:A8bklOE~dNEB)=@g10xT;weTHzlDvya');
define('NONCE_SALT',       'Et|Y#1IBJ|fWx0&2R.CXdlB!BMO@5mx-88cw__O:^~vY~2&Js?pR/o+/g$nXh@te');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
