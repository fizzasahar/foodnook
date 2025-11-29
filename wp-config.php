<?php
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
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         '<m0APqyA/DER/[tXf<UxPK0=N+Otb}[V[@!~e.0V=,y_Z/lu;p^Tk`#}K?w~gE&+' );
define( 'SECURE_AUTH_KEY',  '&LgN|D=EQw{JLVP`<hdNsyMD~,2:99@iaU/@rjl{aKP*?Cn% GE`k{h+n@#LvjhW' );
define( 'LOGGED_IN_KEY',    '82?9&yuybR4(X(0+~ptoL,7j!sBV1jNN%Yxh*gODDQGJL)Fa:(!IgyVO2edD{pCA' );
define( 'NONCE_KEY',        'x).]8PsK*t$8|6y0^U^BUg$H]Hq`Icb(k>M$_[v!#P?H}um=nXRJz+jiAA&Sh(_f' );
define( 'AUTH_SALT',        '%BD?06$hFW=)e[nSRC/;WXVrCD9m|!jLBW*oRfvsa@DBd``63j IvJZo&43UDnzJ' );
define( 'SECURE_AUTH_SALT', 'zS,2N`3l@<N.E&j6DS0XmoFQ`^1v-}1D ($93dWSux8Qn:ru09!U^3!-G<; w,1J' );
define( 'LOGGED_IN_SALT',   '. M>E!W0Pn-$3BlcH]aGl*I5quU;{UxB=4 _1.#wM*|: qG+$feR(C|m*e7FHcYt' );
define( 'NONCE_SALT',       'fpC-w>U~Jz7lIHt~8nHLl^H]{iO8?vsnJqZA2R*z91WiY(~HPQV6h#/`o/PV]Jf9' );

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

define('WP_HOME', 'http://localhost/foodnook');
define('WP_SITEURL', 'http://localhost/foodnook');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
