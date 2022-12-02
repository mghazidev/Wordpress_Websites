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
define( 'DB_NAME', 'blogwebsite' );

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
define( 'AUTH_KEY',         'jjW;wDh[L`/#O*(7G-|8vQAn0p6w*:8wy<$DC^6(OA2G |3%tpS;T/RvH9H;f|KZ' );
define( 'SECURE_AUTH_KEY',  '}fa%8]2[,kC;>#-Q6NOJ!:w8s=Cdz4{5L J*vk_,[f]kf0*G!e+81{s@vQ^Z+,8N' );
define( 'LOGGED_IN_KEY',    ';DwH<XYEUGE[@7XYnV<XhOC#}e(J?ot*yU0!9$ZRfc.agsEQgkZN8o6GF5TR&3-]' );
define( 'NONCE_KEY',        'W=]/)V&MP3nGw)Dt{rk*QLzj)-iCjxd#Ti7IWdSi{l?]9:K}?psyj4AG=M0XuxvA' );
define( 'AUTH_SALT',        '[>0^BkPoNpl8/%DQ?b@`As[eo7_)=8*&Z7RAtpoOn55G9W3:-G~i$Ph~|Nd8J%8]' );
define( 'SECURE_AUTH_SALT', 'R;+L]<kV1x%s0HswV.39#4MMf| P~eO0vXt.DM81$&R_.qx>d.6R*A+Qzh{<* 29' );
define( 'LOGGED_IN_SALT',   'A|bBv]BbyDbvd}G:@qTtY/B*pdYF,|&!*i5nv$b?G5Wh8J G?-)B`c66xCh!<ISJ' );
define( 'NONCE_SALT',       '_qJD+41]*/X_i;blP/lX`A*rqbU^fP;<=&+m ?k*abMT2QAq^Rv[]5~8Y^`%x`mj' );

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
