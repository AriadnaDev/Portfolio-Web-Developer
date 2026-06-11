<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_web' );

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
define( 'AUTH_KEY',         'ME+l^pyi=`a0 tD yrh:oyr[-d6mnCl{/9g/+WFvRF$OIPxGE46B+dD<g.RA>nUU' );
define( 'SECURE_AUTH_KEY',  '5CM_Zoo#h,eF$fBt]JR|%=<MjRo[cjQpeu<w1}8xTU:,pf3N( t0=x@&WbWXh)gq' );
define( 'LOGGED_IN_KEY',    '|ArW?!ivCl-C^)S@+l%I~wcvmh(a:7Ytn7ny,X:+.3*L:3jAGaBN9I6srCkksYUU' );
define( 'NONCE_KEY',        '_wbJ?t6omSi%tZP^V0TfqrV%?Uh(+;@cI_Zl|;jb6c)ADLLG<qqChpvTGmB/|J6g' );
define( 'AUTH_SALT',        'hz>T9l{]Z7p<O711SojhAzeC[DOk(BJ@mcOm)64x:Z#.R_5?,3`(qBASjqW3Y=3W' );
define( 'SECURE_AUTH_SALT', 'g3c97Z.$Rj!,Q*F-l;`_Bb%O=%JH5/*sYE-/62EXA,3NEl4|U{Dl=C@Jbj0XI0z[' );
define( 'LOGGED_IN_SALT',   '5lOHa:vAX}@`~{?~l(lmJb5]=W4(IE.JTU[2V@]QiJF.|vBf:O59%;$6InxI#W2/' );
define( 'NONCE_SALT',       'V=:YI4>AFnN>fF=yh!@nU3<YD;gb4M1:%97GfMNn4rdlZU:H1P(ROt|k;Mxd%ate' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
