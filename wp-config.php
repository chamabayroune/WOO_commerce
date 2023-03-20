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
define( 'DB_NAME', 'woo_commerce' );

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
define( 'AUTH_KEY',         'x(-1e?4y?eMKp-TqJ*Jz:)^OwC}Mp6&`S2RdyEb_<0c25jw^b)HYX_k^YigP ZxW' );
define( 'SECURE_AUTH_KEY',  '*mbf7xG;RBf7Csc.:o_(~YA$8PS[#<c[].u@/l)C:;b}RV)PL`L+hvpzX%z}rtWA' );
define( 'LOGGED_IN_KEY',    'n 3C^=0r}wZ<02I1uRCh6iC6~oPgP2Y,2*llBTMoA4E>#X!QNR%sN$Gs6t*P~lIR' );
define( 'NONCE_KEY',        '&O.0_U 1vznc](%g*?_-@`j}P-UcDGY!DeALRr|,Ld2.1(3)zH RaON]?zRaA@jL' );
define( 'AUTH_SALT',        'r3M$`72@eK2vouNw+6u[CyM0&O/]^1Xx};G><:cgs;/WN]T[.-ZnGs,L:Unue0w|' );
define( 'SECURE_AUTH_SALT', 'g;{GdA)U2!C`NT)M%v&j956rA9SJR,P/eX y>lRu(uK*aaJ2>fFGNA*bP5S67M/T' );
define( 'LOGGED_IN_SALT',   '`jGdP(/vK[tT3<mI~BOw;T[gJWb<b1sequ2/+1p&|204^n2Cz^?9Q-<Dd{e?HY>G' );
define( 'NONCE_SALT',       '_Wo@c%+b0Gs#ARd!c1b! U5+vVcRxT0v`zqgSTxpIK7qC:u`(c]jFg-/Kd_/<p>b' );

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
