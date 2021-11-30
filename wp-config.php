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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'meetbio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '=MydkP,mm0=LRKH^R4z;=k5${=ji~6xmKu,xYTahaOh[Y0RWLPqGNZMaDcr[44H,' );
define( 'SECURE_AUTH_KEY',  '_21W9HQ0>+(ZckS/N+h-Yg{1)^9c|ZnAC?s}kvrNDeGW@ }ueNd~Wwa?WZTLQP!u' );
define( 'LOGGED_IN_KEY',    '4``E0lw-ZR+Tf|&<D2N^O:G;X^F?^~iQd16eQR+m/@CBa{)wot^6FffW[2}eTJqC' );
define( 'NONCE_KEY',        'l7])udC%UE+w,P_h)esYZrRKWK5{r8P-<G|7ch_VHymna@M( >~R <RGb7hV|bXX' );
define( 'AUTH_SALT',        'FDRSNJ[Ps7sB=DqM!g J4C1K8C&X@rv7#*R-7pN#8<1E0;,]Fz!~VUH4xL;gfSfn' );
define( 'SECURE_AUTH_SALT', 'V.sCPxmE!i<_%Lxl#%(SU1)2F%5~1S:GdB<rM$<B{*>&t9&=7OZc@UkX$n+L-*@x' );
define( 'LOGGED_IN_SALT',   'dF8X(PAkw@L)6&[HUu1+O;>nA}VLNg%zKNeD[tRa1|6YA:W#!P-MQ9hg{Znd7JLn' );
define( 'NONCE_SALT',       '(o/|[ -(i<oX$|[Y&qSeJIY(`~ChKK3LzhQH9>_~x6]ANiXe{BLj49o@$4z)3ZT|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mb_';

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
