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
define( 'DB_NAME', 'larkellwordpress_db' );

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
define( 'AUTH_KEY',         'W.)YH?o8CS/8niVNNcf^5b+,agTf71<xlpr]EClAaegA`/^NwFy,^:wR%HnwBQJ6' );
define( 'SECURE_AUTH_KEY',  '*j^m6a2Q59w ]2>/4.}gH3r6eTkz#7y<t}p&,?Y=na^^X1-2daG;>afn~j&Q#3mM' );
define( 'LOGGED_IN_KEY',    '}4jg&&2fY78zU;ZW:gEsTKg,XPhi_iOn0%{P0s8jh;#rq*5BSfejl+.PfJ5$go#J' );
define( 'NONCE_KEY',        '[qU-g*g^pzig/3u1>xPKCF[j}Z`w#WEX>R|gpq@ZMGp*2)Ha>OA%TP(s&lJWqc:t' );
define( 'AUTH_SALT',        '+q!inyYkjTB`g[YM2c*y+)=cT?G?cI;c:B.G(-VRu)N<Y?lMmOr4p2<HBCXP+K]A' );
define( 'SECURE_AUTH_SALT', 'G }`KTud2^-5%}mZ2-1}y5{@zWU+2hE ,`zYKPdho--j*]Fd:#/@mC^r6!gj.[iI' );
define( 'LOGGED_IN_SALT',   '+,~|,nkU<B;#yg__IGkeDi%44Q=>m2bC6|%&EmTF}OyI*ymlpjsC9jgHj=$Ju/dC' );
define( 'NONCE_SALT',       ' 0A[RX|!R$`H?IX<QVj(^3HwPF4%M<4j;Z~1F~0>D4+J=+D|cgSaW/w~:W>zTf/a' );

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
