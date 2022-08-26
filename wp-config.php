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
define( 'DB_NAME', 'wp_my_shoes' );

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
define( 'AUTH_KEY',         'e=/7#2=Fvu>9%*6v|U0[p)i?vRz(EM`$K@8sn,|qxE:Iglr,LOgl0|F)nV_<Xka?' );
define( 'SECURE_AUTH_KEY',  '/0)#  .%6I}VB*1P%Vj_F|Yj7AR|8Y[uv^8;`mbmi`66kqPwpVHP[lH>TDZTR M`' );
define( 'LOGGED_IN_KEY',    'Ffuk^vtvo4`pZlqB86OpW^E;E#*iP?8ZE]m3(I8(zE1Hl>I[y-%f,3#ADs.8oE6L' );
define( 'NONCE_KEY',        'MM4L}U2i@sTGqvO]NUXPK5gCs:)Y7f:bNkU,E@VLU3LOS__qJjWflu;ebCU_e46s' );
define( 'AUTH_SALT',        'b)SF8f@iP<M^~a!1)U[u8Di&C?[_`-$3{i>he/E6P@y=%HEHKG[X[F6#CNx!@R#z' );
define( 'SECURE_AUTH_SALT', '7WouCPg!H|AdY25WgT,5,y3Gf;pR*5>sUU0[0=ZKPf^r@Dt~%Due?^~{V:&i~lnP' );
define( 'LOGGED_IN_SALT',   '}fMZ yW=B9tP^`OfcS3LglW|}L|EN3JDNy`hi:oMj_oiaGv8Ca]uJ~ywxf*E4uJ0' );
define( 'NONCE_SALT',       'Mcz//+dJw`2@voiIX$VrzuskJl?>a?AH +vEO}B-x8{jsu$pEX>#UwgTHZ,JzhAC' );

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
