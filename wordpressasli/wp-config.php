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
define( 'DB_NAME', 'wp_masjid' );

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
define( 'AUTH_KEY',         'S2N#}P0~AGg(0s]%;Zxr+U0k_^bz8gh>8TsKoHmUA=jL&*82f]ix&CTYz*sLnsZb' );
define( 'SECURE_AUTH_KEY',  'rt=UYn++o4|Gc=4$o;_mZ{m`p89fV9Z s@`99W| wh+[g|sk3`F|a0,(nr)VV9k:' );
define( 'LOGGED_IN_KEY',    'r$j$Qa!G%,l*]|7U)>$RfPe1/?}2p`ef%2f~hPb}hMSo*^#HaTGIJD#]THk^H^jM' );
define( 'NONCE_KEY',        'xdE&:z{Yfpt .YsNL!=`>}=qe:@.9+Zx:E{5BWdV6bv8LsQW[03A=||Vfg/*%9wD' );
define( 'AUTH_SALT',        'P@9lIjG]ckvUk%,Xf(cPJIiF`-QL4zJL_rV1XKmQn)7gZ^a5m#c*.~Qz0f#}@509' );
define( 'SECURE_AUTH_SALT', '~B|Hc<<O>Pc6adY5{NnB7nD`Ja_)A)8WEN/.HY,gAHU2kmz;PrFzI9olNg&BIf&m' );
define( 'LOGGED_IN_SALT',   'pTNY2&G8M?dWy7+x? *F:9n[zwBatU%)Ue*p3TvYjowzVp9>:7oM&>@m@eO _5#;' );
define( 'NONCE_SALT',       '%J?UC_RsT]jo2k6q$#C`q11kte1gCq8{G}}MB,/cis`xcfp%SEm:;hq:}h^9Ic,a' );

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
