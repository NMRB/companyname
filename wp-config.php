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
define('DB_NAME', 'companysite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
 define('AUTH_KEY',         'ag}( Q>_ubB/i+92*+PszD+/LeU$Z{AF7N(Bv TFiLsIncFr$hyeTs(+i1oljc:c');
 define('SECURE_AUTH_KEY',  'GD8[ .7|-(-1C*BuiK?lrJa&d~glJH9uQdK4vBRSM$wEK4/A/oR> (mg#*_C?6-P');
 define('LOGGED_IN_KEY',    '(oT]5M |k-,0iOw;[dr^&Gtkww-e^%a:l3A1x|d G[zP:k1reG+-6AX[nz:`C7r$');
 define('NONCE_KEY',        'eOghQ8)Idx:ck1,`,$,Bvlzg*C7~Lee,k*C1B0IbS<_W16_Bfj81+SjvhlVn>QU&');
 define('AUTH_SALT',        '|,bVcU2PGXJ9OC?9QqnhD^?Q22GTsKqVM GT&F.m/IpklTF>j~]5dlI8`=aPeK$L');
 define('SECURE_AUTH_SALT', ',dLIE0:+qwXe._3(v0t+F8t}m{ f9Z.4wyhM_3ki|#;)OLUDEuKMMNbd-D-4.F :');
 define('LOGGED_IN_SALT',   'Y1uu5ZJ{>Bg1o+3Zb)gTWP)j/;w~_.$-Yg#vf^#t3MEMq8e{V4f!dn&.8OK1hgvV');
 define('NONCE_SALT',       'd#whEiTrwAyz?H/V.PEMF/?/CoOFo|Y}9CqQ5un_eXf`/!+)-!Y&72C?Is[(x$a/');
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
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/content');
define('WP_CONTENT_URL',  '/content');
define('WP_SITEURL',    'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
define('WP_HOME',       'http://' . $_SERVER['SERVER_NAME']);
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
