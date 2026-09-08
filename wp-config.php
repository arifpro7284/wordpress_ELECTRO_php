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
define( 'DB_NAME', 'asset-blog' );

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
define( 'AUTH_KEY',         '|zx`ZGm9co|KGkl`D)o6n.q2OB:8f,MF,Ul,%7~#sS1i8!bdzppAGA&a*1~ Iu^X' );
define( 'SECURE_AUTH_KEY',  'M?xI&te%}Bv357mo@ULh!NAQx_6d;:w==fH1>E?jgCLxM!@#:!?t$?da%tcr-/GZ' );
define( 'LOGGED_IN_KEY',    'oC41,AVzqW,jzXDFnAB+!,$;D>WY)<y/#p|M+-bvY}^5I%F_C4rZ?7|zKvZOmbL2' );
define( 'NONCE_KEY',        '<d?_xfGjk&[vCD<hD YE$E);l12lIsx1PkkxPSF[zm}# (u-Rv:AyU:aRJa`,W,^' );
define( 'AUTH_SALT',        'LrU-K91g- ij,M1PkYi4}!sUE7)H.3{6&!yf5fY71UA!MG4>GO C1-z9ZFe4kYbk' );
define( 'SECURE_AUTH_SALT', 'Wp_$z1Um7zJwyfE)LzBJ.J]N`u*kYr]g+A83I!AoE9g1;1/CV4C~[]T[+gw`vdZ0' );
define( 'LOGGED_IN_SALT',   '*[LC7Tq4,Fm8:58Te0fzk:t7,:y8~.+hS>c?*GRkTVb5]e|WA$jn*sRv>n~qbjao' );
define( 'NONCE_SALT',       'zE$2>#V%N6r4S[Nds@gqv-QBr_?9b87:5- LghAe3xg=82no!*/}t5wIEj{X3W3d' );

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
