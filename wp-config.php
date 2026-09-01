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
define( 'DB_NAME', 'cleaniquelab_db' );

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
define( 'AUTH_KEY',         ',)Z8r0eMRc|SVH-M! %EAF=MgVJ>5qFd0n,?]Yq%O5{pX(0 9>WQ&e1cz44r|eo=' );
define( 'SECURE_AUTH_KEY',  'X)S(=VTT<{jebs>]-t{QEe`ANtDV:yV!1=oDq8>~Q+%A6p,A<H9V*[dad#@)z;>0' );
define( 'LOGGED_IN_KEY',    'vL%W^{E{m42PeQ&L@^oYH3&irmGrw4BZ ku%lcESK%kE*#8L]RX.lFm+eG37]-n/' );
define( 'NONCE_KEY',        'hX.ax+>42+-)EDv!W:cT%Kc?8u-8CcQ1KNcDucNlOF{5Kfbl!j=}*Y#xrAn)BJ/]' );
define( 'AUTH_SALT',        '#B6`6ND2zYwaTD*e`-eEZz0#T.A9-DLa,BPkD3K?dTZeSbgx2<$jdz;:?/.FDe@N' );
define( 'SECURE_AUTH_SALT', 'BPe,-~ULSDVUr0`p+O*uG1VE^;#qL;qc%6h%,xR]P [j<w%CJ-6fet:.J,#45[[j' );
define( 'LOGGED_IN_SALT',   'Sn<1Ds|!%BD*7/)-r `CYIflKKt@jA3~(.X;M oG/mSX$NcYb4^7(J9]_r3gg^(.' );
define( 'NONCE_SALT',       '%Bbgk6svMxu4I[r)W$E,hDo)@da_=84X9RyB#}[ht&fUpC@<BNt){/]VS.7XxK0K' );

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
