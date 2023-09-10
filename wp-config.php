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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'Testpassword@123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '-2M9;W+|oI=v&9FaF?]b0aA+o~/+1=b0i<8ar#lwJ$BP t8L__u@WYc0UY/^W5iR');
define('SECURE_AUTH_KEY',  'pQ:mID]-bb)Ous6m6!u;pJ7H3Zk[v]o#t@@Z7X,o]5DDxm{F[aX af-0l9IMHaxn');
define('LOGGED_IN_KEY',    'cBDy$(z$Br)+@O[v+varA16q#{t}B F:^O-LKVF_pcC-|I+44Q@D3U7PnLZkV5,:');
define('NONCE_KEY',        'F1vi#^G[KT^xA5;;Q51Jpa*a%.iUYQyhUPG0{J|#!]|b.R6Cr+Lw;B2.-7|v:.{+');
define('AUTH_SALT',        'BJFQ2*Q7h5;|XfRIMRyHU{$8~`,lf3;i|XZcMr9?`:Qm+]X`7]I;VwjT4F,&754C');
define('SECURE_AUTH_SALT', ':=hv8Z6+#BO~rR`zy=<Z%^<h-?c1=~]CXT_ *`)<KO~r[H$:+|^I,^d<{4{Gbg^)');
define('LOGGED_IN_SALT',   '(_Fxwx;l@@KzabY|Qo)Ah[RP++ow|`ki#MDRt7~DzRr5f].RSnzD+H;g:.0X$P!U');
define('NONCE_SALT',       'Q`fXAS6)Q;r]={fF(G6cY2B#Aj~)/Z107VC5$p{eZRbmo4+&J{x/:mh1|tJ]W$#}');

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
define('FS_METHOD', 'direct');
