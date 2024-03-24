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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ',r%F|FA m3j){4Ji=yCqcLv_QEj1Y^|5%lLs;)K5F4~~DuQ=o:,ZkbusE9]Lmq{V' );
define( 'SECURE_AUTH_KEY',  'N.E_% B*Pq(e!kmlFo&l9x@)k@LnKr/cB*]^yKIy!c+ps5g2M0[b;(~nZ>S2^j%>' );
define( 'LOGGED_IN_KEY',    'Ac;h}~JK}rNKW?mS%Z{TwSGahLg`@Q[{?NpSLL*w?=JVA?T[y@}Etlq+?n0pn,*}' );
define( 'NONCE_KEY',        '>:96c7l{o.HzB(ZUneQE`[O+bn[::Bzkyxo:MQkS04l|Gfv+wV-^}sXH<AVSK#&I' );
define( 'AUTH_SALT',        'nE{5VT2;CYIJQ;7 :^cOoGU@13_a^RAE!Oq(&{Q^zH5f3{Tk+W}Geu;v[l@q!X&d' );
define( 'SECURE_AUTH_SALT', '#W5XDlyEvOVQm%:Og~T|6:@fuB2S1cpVs8dltSqs]ctvgYT#M#xxh.3-6c!x0<Z$' );
define( 'LOGGED_IN_SALT',   '|ZqC7IM%EI.K ;F)3E8*>b#&vFx$LYqBb53Q`x?CGIL(ly_YET*y;o4jtJ1AS$x3' );
define( 'NONCE_SALT',       'Qt5`2`BhlZ}.^! IAswj=jrf~r`Q5pgNIq!)tM@idTbbE3JnRO8f<`0wF[M8) : ' );

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
