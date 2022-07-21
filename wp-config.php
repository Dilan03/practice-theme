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
define( 'DB_NAME', 'practice-theme' );

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
define( 'AUTH_KEY',         'Zmf M5+Ux>fhzaf[bc$chQ3iz[7,NvL0yeMi}-1:d[;e0&iG83(Wja(5{%#;G90b' );
define( 'SECURE_AUTH_KEY',  '$4fd:VY~-u_5?{TgGW}F0|g%6%5H/:D<0#Aeh#*RLe`<A,t(r8`(ay1p$q.EhBW.' );
define( 'LOGGED_IN_KEY',    'dFIe@KMStu.bOXZS:7L;sHV]n;Sj8FaGYn+Y/9+aSg2Ox7s-oBA Ey, ~2M-R&Pj' );
define( 'NONCE_KEY',        '{t?( MWP,@3@o#6%m4^w>b(J~mQ&Xrzr56k~;kpYxjO%+Yk;fcTRBGm.8Xf^`#OI' );
define( 'AUTH_SALT',        ')3^-82aCHa;`@u75:v}I0>QE9X<`?>wza?HHck^{9y@L/t1,+<V sM&|@W>Nx?YY' );
define( 'SECURE_AUTH_SALT', '+1uB5sG*rjht!jmX*O>}G|8[AC$z`$Y# uo*k/o F}Csbt1;8Z{o~S4ABq qG3Vb' );
define( 'LOGGED_IN_SALT',   ')/@GyfNNMccEkc6xQ=K]z4fw@GV>$tY^l.g@8B0h%9>rV}Wh4 ?|n@BqQ=ntwZi.' );
define( 'NONCE_SALT',       'ZB4Ka`hc8:dvJAPc_aW/z;kdCO1%uQ|{;FOCV|5^3,3neBnbCHlu}W1Wd>?^ZV/e' );

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
define( 'WP_DEBUG', true ); /* Change to false in production mode */
define('WP_DISABLE_FATAL_ERROR_HANDLER', true);/* get rid of this line in production mode */

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
