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
define( 'DB_NAME', 'wordpress_tut' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'me3marea' );

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
define( 'AUTH_KEY',         'J&/{PDD*3_lfd6@]sxRIy*UJ?STM>bR#+kK^mtN`02S@fZM>_YANQAhMLi0+sUkb' );
define( 'SECURE_AUTH_KEY',  'r!8.M$/Xkg~3En=$?=ToqZKw~Y5#8xLjS(lU+~z<&9ZKCV`g |Aw$[,8GN+LG1kA' );
define( 'LOGGED_IN_KEY',    'yLcA$=PJO:6&S`Ah&M+jeqw%x:cc3B)K1Oj+`,[5$Gc0*ELn+<*5I7_|{KK|e]ZV' );
define( 'NONCE_KEY',        'U}#1LgRA(4_N8C/)A_UdT, 3L}f;*&K]?_/&s4V[ASV[%Q!8i@I2rPN(bC4~V,.b' );
define( 'AUTH_SALT',        'm:;z:Q f*&^ x8naIDmIlt9k[s}&|6Sx/*;z3gVy2:JFu}b{NIfyt]}cK`QVgLo=' );
define( 'SECURE_AUTH_SALT', 'g6s5fq1y@}2<!]NL{`FT$LRS$4^WR`tY=rDwPxhKi6unL9JjInS55{>6<9avzzJj' );
define( 'LOGGED_IN_SALT',   '[I/v+L4*UkpS5I^R|D_f~y|Y=b<x(U+Lk`J#E}@s)t[BgYxVIozOE22}*~T+`*:]' );
define( 'NONCE_SALT',       'mA.JZ4W2I6eIsPLR:t5I8I@q2?=ql/&P.7x<|5O8^JF[%D]DgN$p_9+Lh+&? Hi-' );

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
