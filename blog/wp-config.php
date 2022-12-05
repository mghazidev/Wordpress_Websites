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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'k;&i=jB{a!5s}91m9)<tHTv<adR_ EX~k175nYlHzIo:h7=Hn_QOYBP=3Ws-r .@' );
define( 'SECURE_AUTH_KEY',  '^vE6j@YMpk^sB(k86q3M)C$shPqDb==)hllJ K@fWHdO@P8>+ O1LJi{&ixH6$L+' );
define( 'LOGGED_IN_KEY',    '=en^RpB#<&-h$Snf@DHN(U/YVJt[rMV;QHAP76kxuh8(I/nbt>Mj,o=oi,d/X;9W' );
define( 'NONCE_KEY',        'Dqf|;cG{ H0FV#WF,3w| ;ncY03IuD>jw6:x]P,l.<M2oAK<n4}xzy?0Aodu`.1+' );
define( 'AUTH_SALT',        'PD0hmG:NdeI&t}Fbj] RM6HjVO)/ivW`9!E?J^pTCJoOQwlC._mJ`2ZcWD]<1aCp' );
define( 'SECURE_AUTH_SALT', 'oV^n88U+oM6b`mxxmzEf}J6pluSeMvt)t6l-G!TsQ{L=8`kk;UZ_Fj4}Wj+,{E%8' );
define( 'LOGGED_IN_SALT',   'H? Ty(-Fmnl1~GMNcG0gz@%`oblxY:ZW4gjde#Li<5_9.++8Cf_o6Z,{2p)]%vyl' );
define( 'NONCE_SALT',       'o0}O8d4uah`BaV|>0fZOWhzt<]})7O}3P;rcB<EApoFa{|,}zpPnv15tp.`{H 2G' );

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
