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
define( 'DB_NAME', 'mediahl' );

/** MySQL database username */
define( 'DB_USER', 'mediahl' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mediahl' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '*:bwj>Kc^`UmG-G`86S1_v gF2[p(H8>4 C=Rf#6P}!R/%Qk9!j/.,GRp}-RAzu_' );
define( 'SECURE_AUTH_KEY',  'jOTURTh^%es&btt9&RWSe`/nsNEdyWOoXrAs?+)L]8:?pX{o1zkTYA[h$-(fHJUG' );
define( 'LOGGED_IN_KEY',    'I6-*&7iXW$8gjs~vMR*&L6<{!=d}AO7YQDAMR21 hLP#&b8 UD|<HT#7lzJZ]hn4' );
define( 'NONCE_KEY',        '2VLP.IB]d!i!~6}&atnt;g42WwlxEd&Pbx=^G|(y.LtDJe09E!l[a)/K7K5k)*tR' );
define( 'AUTH_SALT',        '%LupCG-%VaebY^KF[,i{xzA_HjUa]8KS{0uDd,8cBH[8vTq~m`XW qjr.<7!9UI<' );
define( 'SECURE_AUTH_SALT', 'm-w@3FqYBs#5{V?u#^pS$T6 &H!8lFqgC)y(`D+Vb09E9Ii<`4I#zpaph;10F,>K' );
define( 'LOGGED_IN_SALT',   '|Vrv[6~m6/$62mq4_$/|tl(Z`>?pN_crI&Lw44Of,` n|G=%6ZK36@eS_!O{]u{V' );
define( 'NONCE_SALT',       '.)+Ve!|;HiE;J:7gEpv>BV?Oinmo[y=m[noI{$]/S^zTGv@w_)N.oaQ9sI{QGda~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hl_';

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
