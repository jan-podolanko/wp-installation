<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '{{DB_NAME}}' );

/** MySQL database username */
define( 'DB_USER', '{{DB_USER}}' );

/** MySQL database password */
define( 'DB_PASSWORD', '{{DB_PW}}' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e.g:i>A>8Wa|LjElh%J{-eH9P.xEha9$8|a=t9+DAjq|;;>^}=nuyI>:Kd6DWXcq');
define('SECURE_AUTH_KEY',  'Gd*KTn^0@j-FvY1V*1hU5_z-|cR Afr}Nh3Cm[LL9-9]Kv;lGC2e+$|F14XcW|+<');
define('LOGGED_IN_KEY',    '5,$[f8cKn:PuzBE8--o~D;}Z_.|Ud*bh35S;j+{cq:/+|}45i8?7j<D@+8j80@C$');
define('NONCE_KEY',        '%lN-pjhdg$;78OJ~o=8tMrn`_X&|p7v.I@.-19wjkvmE*G<;3*vABrvmju)2Mb8B');
define('AUTH_SALT',        ';pqT`r|yVj9jgXO<|+gH 5`jT/8w0ZWp4iqbN|]c@~cCWv|n,+KM,.Fr$=-Su.iS');
define('SECURE_AUTH_SALT', '3>g7]-j]vSc 9PpDS/Ok!V|aN$p([YAOc(*|MM*7s#ptYzX^`.F>pps)XR)}s+Zq');
define('LOGGED_IN_SALT',   'O<& 0Fm*Lo`M*ImW|L@d2(hWo^iX1^[;H6_eC[2M6d/=u |(<^)jru_-x^g@4]aG');
define('NONCE_SALT',       'sW/vcReeA&$c!_uFd?2GuyWV1-?).^van@N.r[^)w+-_h|1?w L{xH^?Jthd^vw6');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
