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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'quicentro' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'rN_mrx;@F`E:<UmSS(h<7u7?#FoB5Hhi&%E,2XrAyP=x3X_{?Rk.lXz!Mh(+g-@X' );
define( 'SECURE_AUTH_KEY',  'USYMlP^fd~*Z38fceD_+3~R@D?bP< L<F5#M!oMm, #cv/:,uf6OR8_ikG!Mfy2R' );
define( 'LOGGED_IN_KEY',    '^!{N$JP{mXCEFw+ik?j/[X2/Spk1N?d)j@GDT1& el$sEW,uh/9/0Lz.yNoNSdP#' );
define( 'NONCE_KEY',        'm_*Rpo4qlRLM}-eU0}amXn<i^_wei3#O `F.Y(/2Y!jn`e>EylS<pXdX_^ZN3l5z' );
define( 'AUTH_SALT',        'FWNXa5-~.:t8epf,Bo5UkNYR-&o1.^jmU x`][uw*KdI<LJA;#f3{L8/tU]eby[d' );
define( 'SECURE_AUTH_SALT', 'Tub}f;nnTn%9` >VM1a~Ba|!OR%bE&[00CF4d:R}i}jped6^z319_&#aMrFP:E#;' );
define( 'LOGGED_IN_SALT',   ' CEM$rS!IstdX,I{&XU[uvlkTW;-_96O5KW7`5bCp~4Jefx25!pQkhEQC3Je;d#V' );
define( 'NONCE_SALT',       'H&[^:ZH|S=r)U%^D<`!Gag<D:P-:FX42f}$g<K1y|HTiTjwRLpY+,>t(4#B;-A:[' );

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
