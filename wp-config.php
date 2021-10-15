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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wptask' );

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
define( 'AUTH_KEY',         '991Ha~@W#Y8Y%grUI 2G_B`=9DZgL,mRw(U!=]~}bAE>nrfe!N/aBOV&]wvwplCR' );
define( 'SECURE_AUTH_KEY',  ')nhb5?!G:[BQ(s_i*;ug6Rz19S40^-ftJNDFc7kZdk$Gk-T|8=2]39syfvd|;[yV' );
define( 'LOGGED_IN_KEY',    '<AS5xNlsl`<%;;jb7*rmp:SNs%,0qr{k:YWg|]Jvi,5dzA: eew`pq].T/61./(q' );
define( 'NONCE_KEY',        'UX$_l?e~Nd+OMRAHLPbsAnhEdGA?6wG};4$g]wj 9~F`eOUNb8jg,kIbpfj`5zcF' );
define( 'AUTH_SALT',        'P,S9^nWutJi|vsai3q+}%uGiFrMIJUmX<+.W[ri}?p1nVxRv>+^>%>pt;&8)&>gt' );
define( 'SECURE_AUTH_SALT', ',/4?)*b4V6{exazN{49aBlDS--bt4~q~D07%#wC?b<X<<.g&i9jrne[._,,82}s/' );
define( 'LOGGED_IN_SALT',   '(MVJ3mTv+TQ@CoplQiLf$#xCOxjt6SUX#qp?bODQV6z;w`i$%5y[U:%+ZGm@ZGAT' );
define( 'NONCE_SALT',       '&x]C:V8 .i@tuln*nd/JVd^}ZyEStW$Ta0eX2}Y,#l>z?XuE~|ztp=Vf>7<2:9o)' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
