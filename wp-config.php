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
define( 'DB_NAME', 'wordpress_avanzado' );

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
define( 'AUTH_KEY',         '_MD|=#uW0On1*S#UY#K2t0zy4@H!LF8~,=!ou3r_k=[+.=39<(5YmxpOdZT{5-{*' );
define( 'SECURE_AUTH_KEY',  '*d2RNa#>qTQdj!?)1%gmPyuipkptnqcHTkB)E26OU,B1r4vtj2?^.$_#g{Qp0^lm' );
define( 'LOGGED_IN_KEY',    'l0UX5#?d)Wk;VK6=T[-:ESvbmw`%6$)CEbf5D4{w-zf8>|(eT_uj8a({wxXH{TgN' );
define( 'NONCE_KEY',        'k``N,Dn;e&e(r|FjW(UbZ:i%V|2#Zlb}ePb?HIA}0g2IROpqvh>-nLbq}hIzyiT?' );
define( 'AUTH_SALT',        'Q?=<1nL7U7Zv$EZB`$O%~Pb^-n]B4f)d4-Cww}75S){8x$I7BMMBdJ0E58qcgIH!' );
define( 'SECURE_AUTH_SALT', '-t:~lN/B+%KJIs?7`ctwB>&pQ}QQF1DJxw*qw[DNfSS3.uFh>U6pP+ua]2En;B*t' );
define( 'LOGGED_IN_SALT',   '6,jyzPls^c,)emR68E7=sg9ux@l%)bJ`0z4R@:~ud^H3lq`}E4X#P`&g^V>F[i]3' );
define( 'NONCE_SALT',       '-nuW2T]Qmd/9]4^a@YqI.Dx!za0Z<,bPgv%o63y_)oTnTep3iZG]`s3O2nF2RM0a' );

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
