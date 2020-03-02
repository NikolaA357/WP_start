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
define( 'DB_NAME', 'wp_start' );

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
define( 'AUTH_KEY',         't*(4oe.Jh+%a/uABaV_!T$,SO(,eNaJbv}.d>M@aoj PbyV|+E/-oUE`lHhivnC%' );
define( 'SECURE_AUTH_KEY',  '`1F}eL%|;t5yg?=e.Q(sZ@f%E-^uG2BXI+-)@&(lgj|#C;1OwN7$+vmxH$<I^)3=' );
define( 'LOGGED_IN_KEY',    '3m0T-|*G&HGN7)P^+sMW5,=ol<1{?mP-qxHY6cwAxBz^*||%@Pdjfee)6?||IUBs' );
define( 'NONCE_KEY',        '/ialMNXI*<ua@[D1sj5z_):^u%Reo(.UIZuMAr.4Ft|9(3%wCq$V6#MVd,mDf+[|' );
define( 'AUTH_SALT',        '*SQoZ9([oMOW1r.23JjG:^}hhzuRFIQ~mLy~ 31f@;oU+zYM=`KK[O?U$L/d{(>c' );
define( 'SECURE_AUTH_SALT', 'KFlePb)]jK^W_!}Onv)_-sG[~/5x9|Vw2.-JS2/PF+Z/tYPmIT_l2-?s_~@cEs,i' );
define( 'LOGGED_IN_SALT',   '*S:=O]p)+QC-qJ]prh|lqnl]+{[e!^5zty2w5Eq+`Z!p[B?{VinE_;:?|-90 Fkt' );
define( 'NONCE_SALT',       'NTTVap!=c]$h-{y+IrE~^1[@6g ]*(:neqYI4z%[{`.ZZv_E``p4U;|KF;ew?3Pa' );

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
