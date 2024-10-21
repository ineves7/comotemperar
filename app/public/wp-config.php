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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '6y1bX-a=kokvme5N)2W&>0Hs`EI9RvbhoT|;W:--Adnx~L)n+Ky4G;nr:aJ Op1@' );
define( 'SECURE_AUTH_KEY',   '7p_/pTOSyV/aI6^j_L0VTrR1mD-u!<.i({3d{gdqx0@=().~r7n&4AK8%hri4`.^' );
define( 'LOGGED_IN_KEY',     '77uslc<OGqe&<?O@8S7$7vr< 9_5x[W:CX-oV!U[8SrNfI`.P!I0vbLsLzz/y&,o' );
define( 'NONCE_KEY',         'j5$~#HY>VL(9^Kx]{xBP!-gN}bl~%Sw)3~K|;eOXA0 Ctl5#,E$f3HU:>@fwN9u[' );
define( 'AUTH_SALT',         '&;w67ud&@O3l5fN%F1]X/*Fx6/xqP]*U]+dCp56`#ahe7>yWww?<zpfK?s!ZzCD_' );
define( 'SECURE_AUTH_SALT',  'jf.L8/GC[=AJer:l~rv/]u&e&#&VEM_=)VLK*f)}@zDq$WJ?j?Mo+E)<#&lLp2pW' );
define( 'LOGGED_IN_SALT',    '= ;~mNX::NoG.Xr=q90sVCVd9BNwtKGF0:?q wPa-~LFV<wI/n.p29ZCI`P-8#XO' );
define( 'NONCE_SALT',        'D]Frlk(.q:58Su!?@WIonm!^d/Q&N(1@=^h,1#?^P-~UGCo^Kv2CIRcf5%zdZRUs' );
define( 'WP_CACHE_KEY_SALT', 'WA-kf]gv{@pKQnV)M#/|&bjQ>$DS[NyD5SaXu?tBDL,||kB3<>-$}K.Qj`4n!Rg<' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
