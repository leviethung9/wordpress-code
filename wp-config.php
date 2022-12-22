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
define( 'AUTH_KEY',         'vC7hPdCF}!Ok!UzZ4B<{xG;;bSUv#~x~Mw@l7+8yN%5|.X_j0l$qjh%D,p4i;;4+' );
define( 'SECURE_AUTH_KEY',  ',V?yi~*7,pPI#Y-%fe{0aD(gkJ*$gg3yTO>,T.a6Ba^Ha@][BzK>c03f=,FiHD~Y' );
define( 'LOGGED_IN_KEY',    'zYtGwC8HaJp~#`0feEpyx].WONMr9WOc_wl@uv@$0w5+G`:p fZ>m(</UOg5_*Kh' );
define( 'NONCE_KEY',        '[V6QvSyAuCo?c~Zm$]J/KpY+_5(HJ_;t##6Qp3nPeP(8y=jz$k[9xurx_ c#z(Z{' );
define( 'AUTH_SALT',        'X6apGd7>A<f6kPVjit@Ad[`L-N03tmebrh&4Mq;{mU)$!8guIRfA_*vPSi7NIJVY' );
define( 'SECURE_AUTH_SALT', '2X4Y4r~iFoP?aurl]5;]+ 4yv^DnIDVh)p:Z7MKq^R3Uhn8~$$ms`chg)~@^je)D' );
define( 'LOGGED_IN_SALT',   '~c#@W@z=SI!l%mf8c,LmUWQ+0xWR)u1l@6a#JbU8,hlD{G%/H(=zmpi#>j74-K>.' );
define( 'NONCE_SALT',       '0uM`igQ]!|b8$%xO>5fe;1ce-(|%qf^44yJvS~=cjHNkaff<vAnZ>CBq{Bl/|?|A' );

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
