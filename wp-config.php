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
define( 'DB_NAME', 'neopos_web' );

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
define( 'AUTH_KEY',         ' 9HWh_<qce$wZ*?jTPD FV(.Y$=!Jv=z!&tnTms`WR|%N]RW/HzM]XxR!b2~WjV?' );
define( 'SECURE_AUTH_KEY',  'NdHRtYet;xTlDL_1bHHfNm,am#5t/4Hw635l&3ll{V:L%wZ=Zn|L>hSk$P)x/{x>' );
define( 'LOGGED_IN_KEY',    'p0&l-k-95<cfa}lU=*A~^gH20!H]F/&lL5vF))f_rD 8S*Ar:B,|M@ii|U9{4-c!' );
define( 'NONCE_KEY',        'wQ~9ZKfJJ+#E}zGyp4M,gek}A}LZ:t|w(y8u{2zlF`3 TLc+1[l5[q[SJ-uMBt|m' );
define( 'AUTH_SALT',        ',])Z)rQy>8*a1$u(uo)5*A$v1}uZo{8c]@X}u$&sfEmE?dRcE4ZhGY3O|h{nopp<' );
define( 'SECURE_AUTH_SALT', '`7ee5~R/A8SQL|L1CO`q$5zTx3~!}P.e}5(l^Z|RI+%Xv-1nu)A}Y.zHPMfP*cX<' );
define( 'LOGGED_IN_SALT',   'd|qFvz`9aU(*kE<Bt^,7lCs[0{qmJ1R<ZQ~G8u#`RjQ^%~;-eI]tJwTpvue$nT8I' );
define( 'NONCE_SALT',       'Wj$s=x&hAAwr~Tnrn*m:VhE@]lM>|>h{Vb =<k~{sT(]=^)[)Ef?Vx6>z3_Jy**T' );

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
