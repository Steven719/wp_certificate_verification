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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'nF.E]9n+h hLZQ_XH6IQfoLk%3;Yf?LwmVBYc$1]Y/}&{6y__tDk{R(U^%JuMU&J');
define('SECURE_AUTH_KEY',  '*HoJcsV]JTFp:C`ve[uAO?]=-J]&^iwKM/zxsEA<n/)kMz?gthLiyuW9t[JVKD1K');
define('LOGGED_IN_KEY',    'gb3~CZG=*_K=fCBmAp!FR3<U^pYW|mQiI-aj$b`RSuD~;D>GMblKj,va~*DZm*Bu');
define('NONCE_KEY',        'szq{z5F3!]q{q=OndO3v;Je#1k29D6(Fq0!~YnvHro@n. bO<O]sA!(XR%0.0X^;');
define('AUTH_SALT',        '-pbQv`|r3XN4SFh>akL]NcV l qjom|GQx1QactJ2*CE49f5MP_7I?X> /XsC&tY');
define('SECURE_AUTH_SALT', 'hsqWqeCy@@t{_t?iO)h:]xI#^j86e7)r]DyNPigY@<B (7mcp^K+>w}Im!7}D_e$');
define('LOGGED_IN_SALT',   'jW|*) ^X8=LTW`3^_`yAvtr%nS*a85p@r0hYLV[.l(]Vdx~T`@d %6m)f^Ea9lr[');
define('NONCE_SALT',       'F65y8k@+F 1nF3#h75ZJ`@p/UXnC&zU?)rS13-%l::$Liys&EhzB@Ce@cUv_[00 ');

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
