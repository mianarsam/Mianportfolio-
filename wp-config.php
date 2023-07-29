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
define( 'DB_NAME', 'wd' );

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
define( 'AUTH_KEY',         'ebz:T}~&c (QX,2-Fnem23ie>Rwg}-Y<Exqt%}*Vi{;eEn*&wXfr|NWblVHA&$u,' );
define( 'SECURE_AUTH_KEY',  'Q{p9Y,Th_yKn}=:Q3JS~J1Rip+Q}nN4qByi=bO_SxyPcIeE Fo>mM+p<IY)cn8{z' );
define( 'LOGGED_IN_KEY',    'Re 1CXn`N0lJ|(U*lCgv77(Lg!d[eT=;{!P3UT,HU.I9/V`/;h0N}8-U%r.Kq8bd' );
define( 'NONCE_KEY',        'M^1m)3{fXgeOf jPVi:nT?$dRcb_Ys>#X&cj!^s9nT!A68c(5aMF?O7/m4.Sxu4O' );
define( 'AUTH_SALT',        'kw1+f2y$.h)]Hc[:M]t9?2.LP7QQb^R`>&zuqBAH.c|jJk6XlkMkM[P)j{H4Z%^W' );
define( 'SECURE_AUTH_SALT', '_!I1!%i[t^/m[,7<*(F[ ]Gxqw$+|9yq)iMGBwRg`fayT&6WUx9F4bQVQf|^du@O' );
define( 'LOGGED_IN_SALT',   'DX^u_&20p/<6;b+r&>5ZZw<UfNPE[hh,7.ws.,x4AkW&R*/I:&tMa?vU2_1w3J-*' );
define( 'NONCE_SALT',       ')vYpUl90}i^|;G62_{!HC[rYZ/?;uO_BMi2G[Q )|iDm3.?O0?[VLO{<!ido^;@K' );

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
