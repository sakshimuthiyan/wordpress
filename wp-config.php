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
define( 'DB_NAME', 'word' );

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
define( 'AUTH_KEY',         '{+^oRJO[_9_i0`wL4~wT?`moiRkue#HNQluZ;3yfqs[l:bA?@;/RK(vRirvI3{5[' );
define( 'SECURE_AUTH_KEY',  'B9~NRb]XsJMI7N:y+=yA&?:Ciq+tjo!B_n,Y3@rV>QcXGIXu*rWB&=.h$` 53zx$' );
define( 'LOGGED_IN_KEY',    '2&6@SxwG9Q3i&Z&rVsulG2l{G`KbPb6wD3_c<Y/%gd%;8/$/!mG8NUN@U]b-tGZ2' );
define( 'NONCE_KEY',        'oby!QDos7+k2yU;Gx~*~[)[/=|+i!}CbT9E=[l3x/FE:o.|y_>k^M*E:*yXOG@[n' );
define( 'AUTH_SALT',        '^]33Kqewx<b78n^1iGJ7WJGt[tKmP-uC}1?6eU5:(jK #9w.jh#1f@3Ot52gw[I(' );
define( 'SECURE_AUTH_SALT', '/p{X{x=R&S!{#N28*h]ACUI=fy~:|]5pyv_T]lzY6yz@0eq)aJwdlD!.fjK!E{GS' );
define( 'LOGGED_IN_SALT',   '-P(]WMmHuv/:JcykVA(aUyR.IcTC:38#SXYQ[z^mPQCUetom: Po;%]IaR zrd}d' );
define( 'NONCE_SALT',       'y:Y6MhTd>aU%R#7s6zFT+]93Tlh[TKhCGXjOv``8Tg<.5t2S5k5cy.],XX`j&S:*' );

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
