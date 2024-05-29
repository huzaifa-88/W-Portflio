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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '.7R4FIhvPXc24X&K!Yetb?<%UPevVF)fxA4/F/rXA@1_2f6o{w|xy[/51Y9<}ln=' );
define( 'SECURE_AUTH_KEY',  'PYVHF:0`PG:@3>JG,.{t3.-~[35%|6h<+FE;m+oN2J%VZ|5 M}N^}vq3!8j:PNiA' );
define( 'LOGGED_IN_KEY',    '5r(+p!l3)mVs1^9S@~:2qT`5aA_qa3xS6lrdZ#5rhN6wN4r9eyu!{B^}*x~<2+9%' );
define( 'NONCE_KEY',        'h.-z#hx9S9GiPZF}`^RJ=E:%kGe_NzA;2$V)(2WDS)><x9*o=_KS|;-Q@2z1_8Q&' );
define( 'AUTH_SALT',        '3:VT%.u!+UL|+;mTt(J~JUp|j2B1$}N4>ncQV8(6bfuWWIU?u+}QF2OT=Vn3Ow+m' );
define( 'SECURE_AUTH_SALT', 'V}7aA=RD%q/]?RS%F)2pUf&-?nW0ZJ@juWt>+>{QQ[{c4]M*@%8g8B}jQ*FPm%em' );
define( 'LOGGED_IN_SALT',   '{EQK7WTjsyJ$q^iVj$qMqIVk<l8vV4Uy{dg(!{&W03Jzug:4{*f+r34:4*B<TM>j' );
define( 'NONCE_SALT',       'CV):X|-Q#&*}DyuAa;Sum|Brys0NDpjj]|Db:FD>F} b_B-,@CEMo<&Xl(I9q/X^' );

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
