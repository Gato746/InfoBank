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
define( 'DB_NAME', 'introduccion' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'ass@MexYbK4Ma8[QA:Ac{bki&xpV^M_uc6A(oA1_XO4J6l;c U2xhHfHaG!Trnm*' );
define( 'SECURE_AUTH_KEY',  '=lJ_qou@Vt?9X:a{>p9I/bGQvs51dZZY|oppq]=7#zbL`K2r@gr{UyOjmX,1.>N%' );
define( 'LOGGED_IN_KEY',    'e^ELEI[$522o<|u4+@Wp+hqXAk(-l(DrNLlVTfD6,O-bq:nV-?E@N8A*[(!a~c_u' );
define( 'NONCE_KEY',        ']iv9q9#P6xM$$s7=V:)[:kSqA~5YVb >1V.]Ik8;Z7N9r1G$hY?e!:B}n(:@jiSC' );
define( 'AUTH_SALT',        ']0?w|-M|vA5+n PzV5aht:8a]zmk$nxI*vJ0I}-yLX~Os!.=L6o`zsw7U1CI</Hj' );
define( 'SECURE_AUTH_SALT', '!5`=vRUYR;0zLs^e]nzo.HD&BbJ4kLhjFgz) ;#Vh~O=UwT2/Dq5pjcKZlCL1r1 ' );
define( 'LOGGED_IN_SALT',   '1lPa|A}m6dqMp;]H{g0shN(eLsks(T^1V+-pocmX<+:1gLAt3Gmv&+/RnPe0S[t;' );
define( 'NONCE_SALT',       'mg<ct!_DVDnl,A]vP1Dc^!qP*{*siU07,qIs@7b)a*69hw##L^6][?0Wp3zZm2v,' );

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
