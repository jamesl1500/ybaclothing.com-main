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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ybaclothing.com' );

/** Database username */
define( 'DB_USER', 'jamesl1500' );

/** Database password */
define( 'DB_PASSWORD', 'Cooley12%' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'cUSHl217;@>})u;J;W*SZ]N7?WQ}}Xwt}dP}H`[Ahn5^Du6g}%n5Ft$f`V:y{QRn' );
define( 'SECURE_AUTH_KEY',  '@k%X=:;6l2wgT!G.|2qM{~]GC!YoJ-3Av4IxqR(wF<. =c}-W)}&?SLG=vxA0lOd' );
define( 'LOGGED_IN_KEY',    '*zA3w}p@|8Tt{XO.&.*%`#N?Yx 88zS k,6W, uWE?sj~3?K}G&d7]-rm9S=AqQR' );
define( 'NONCE_KEY',        '~eQ*93ktpbJXzDj}-CPH:D#+6Q2%TU@A+Y&0E1l8lR*ag|yJmWR0{bC(}PLlqQiZ' );
define( 'AUTH_SALT',        'dxwkvf)`p.zrP#v-vnfIA)I]g6(c tyu%n`a16F_R$Lj$AIi&n7tsl![,Xw/ufzW' );
define( 'SECURE_AUTH_SALT', 'R]g=]IvexU!fZ],.h+qTg_dQR|4wFPNoj`jAxdEE@1zsu^s#1&T;vTv,*I_}8Mq!' );
define( 'LOGGED_IN_SALT',   'KbE]nKvr37EscHUBHJdYAO~W${;/!uI!y]&c`=FK EX%HY0WYz&aEXHr*ws.[_hB' );
define( 'NONCE_SALT',       'wE(.~sSV>Std*!@I-;^).JFdom(;4#3ex}Y;lS;G2.k{pkQ;2fC%S$&AB2zRsqmQ' );

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
