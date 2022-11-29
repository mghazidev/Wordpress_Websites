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
define( 'DB_NAME', 'First' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Blv+SO e{y@M1.[Vm_*3}}*QTS=k|zNE(tE]QZXlaCm]1~@jo& ;V%n[X -Hvbq~' );
define( 'SECURE_AUTH_KEY',  '~6[PBpmyIerm1)kex _mk]w#_e<t@FN{ydh;D_P*B*xlLn50kavf2wph+yM^}xnK' );
define( 'LOGGED_IN_KEY',    'Sp>K8hC>X2.WAebkENn@`J:Xwyoc/UV8]sD,dGui8:l#qxCp[^[;g0#yAJ@0692P' );
define( 'NONCE_KEY',        '%S=jRbO(NOTw:mEjU= 8Y?1HZ^id|$c@[U4k ^_}7##TF9%.UuB(c|2n#NoS8V:Z' );
define( 'AUTH_SALT',        'Q^^bHC>W!7.?[E0tb&nZOTy9z+g[]T2n7uh]S&:5h^p-KOn62XF)*V@+w&Xv.p/{' );
define( 'SECURE_AUTH_SALT', 'VfysH^5Ot:`,rc._MT#@4cdp/ifGhB+A`*Q/mxDxUN_MT)BTK;FZP7>wZ0[+kb_E' );
define( 'LOGGED_IN_SALT',   '?) (Dt*lYsy+mC-|QWCE9X_bGfpssspLnyVQ}r,^8s|Jl3;1|~r6Z>GNt,/ac.6A' );
define( 'NONCE_SALT',       '@uF!y<Q1m=V.q``LXIQLK<p)?CJ<2:$;o^&g{#;Wv0v|KNiOCbcYI{uWF,0OZe3k' );

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
