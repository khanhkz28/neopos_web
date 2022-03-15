<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'neopos_web' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1 Mo+:.Z0*1.I`p]af cN8Ej9cm?mpTP(0$fqiy&Gh8$Ss6k 0M``s4.R$O1^`>5' );
define( 'SECURE_AUTH_KEY',  's0$C6uo>iLFvQd|YseKG3L,juvH4.e!pnW@?Mi$L8spO<WpmW!.G@BXbn%*6> D4' );
define( 'LOGGED_IN_KEY',    'w`gF(e 88so{-:dFaC|Ik#Gg$A?]_GN#VQfton|Ui-mx<*@J~AuoYd+r<R.~{zl#' );
define( 'NONCE_KEY',        'Io7ayo2qrwE}Pl_xfs.,4hucf1H#Tv])p~KO0xOQ/&eB#m%@CC/:)%-3d_DX+H|+' );
define( 'AUTH_SALT',        'Y.9@sNzl NZ}aoy,)#c8e~|7UgI!ja}c!57 *9L[I!zc)H`$^XJGb1)8 sq,Lpdm' );
define( 'SECURE_AUTH_SALT', '?`rU|?}wb^|,]psc1qO1J%j?K)&9d~KmtwsHE:BpdNMX` !wU*ldIwqo=mji]< :' );
define( 'LOGGED_IN_SALT',   'fz#R+E|^>Tww*-^Dsa.][Y!WkcPA9&2gu!z9n~M+^/hKTrgIZx$WlX&F-,%iCwqq' );
define( 'NONCE_SALT',       'Y$FrJILF-X;;g8Z$onh@YxvAmp9u>A!rm*B{|YRG6/3X^MS [e}}9+{ZINShX@bq' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
