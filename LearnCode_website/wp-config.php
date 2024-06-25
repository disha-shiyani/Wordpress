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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word3' );

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
define( 'AUTH_KEY',         '^ [F-q`.wgz2uj)M]#2fx-b;&n|zG`]F1(uw{K<[da|iTi3<L-,t#Rr}}l#k2P0D' );
define( 'SECURE_AUTH_KEY',  '*DdM;cbv`~:V}+ZYHD]Jq5Z>[KtH.}WHC&h!StG[b:UMN38KK/))wQb*~e|g!2h%' );
define( 'LOGGED_IN_KEY',    'xRsuw5n#%h(d9A:IRqBQNHKtfKKw7@(_<c~8-*1UL|g8u>,QRKg*zX0GR6.Q,ao/' );
define( 'NONCE_KEY',        'M:w[i;S&Kc[2%Ep</n.Mp9G^.D,]6~#? *#~WSe7aAk!<f[?{rYN3TUNc&C{1E,Y' );
define( 'AUTH_SALT',        'q:8Y0`Mst19Pi8m$b?O wwBb/yXhE.|9N;Yb^5^UG_^2GX|z7z&akjH8<#tg:,-W' );
define( 'SECURE_AUTH_SALT', 'R#o>TFV]4@w4wC{VO599q95*pv=fj-l(AZb=qgncm1D`b[,7F7BS*dd^Aon`jT9s' );
define( 'LOGGED_IN_SALT',   '|zm.EV1TDHC3l<R|<!)K&!;}!7WW9{Jf.5tnL38(B!:C& S&i!Bd8d#Qe8oD?Zym' );
define( 'NONCE_SALT',       '-TJ9Yo]KHyFRx^(t&_$gw]I)xX,-3J!_eA$JAk#ocGhB-u)>m`A5Z=)[t ?wA I6' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
