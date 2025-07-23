<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'nuykmk' );

/** Database password */
define( 'DB_PASSWORD', 'fd@-423009' );

/** Database hostname */
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
define( 'AUTH_KEY',         '2P{x^}`3uUsut7{ut wl}]`#}T=[1BgzEpeLwq[W;nRMk:5bO!Y{uvFVwO!!V@PJ' );
define( 'SECURE_AUTH_KEY',  'qQ,u0H7SA(w?b]wVlwLZ3K2*U>E3$/7Lt_ubUQA]K?%8#FVw{}*p+Ga3u[KR{{[:' );
define( 'LOGGED_IN_KEY',    '-ANm7Gob<s$ a+RVGPx9z$CSmJ(S}Z,{QB@x/95dkZXgp;@u*1(xM(;~hTAw~$. ' );
define( 'NONCE_KEY',        ',]A!?H){r;zQ=4L>B4N%kLc?jF]X~QwFI`P%oG a)YD#J;R0W5G^IpSF?0csMcxK' );
define( 'AUTH_SALT',        'q)vNSD7ag,y[m5UP<_ )4ft ,LnGLhMI^#ethByNU![-[.C6og<f}QU4{tBx*~Tn' );
define( 'SECURE_AUTH_SALT', 'x;`S@:w~3g$a@#*$IX,:9a9h#vo+)@;w1h[MSSDe{15M7c79u%ev*a0Iz oBDsEK' );
define( 'LOGGED_IN_SALT',   'f22}5#6jD!Ku*Y fVUoqldneI)Tl2_AF0QKU6LR;tpFFsA;4H!koTVPLVuH3%{E%' );
define( 'NONCE_SALT',       'G8*(zfqNpWQ Pu}gBrT=%Af+R]K/p00W~0$d6aaYleoR}6yf}oRA(o(EK[E#K!^+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
