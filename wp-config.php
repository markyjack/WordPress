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
define( 'DB_NAME', 'freedbtech_myskycdb' );

/** MySQL database username */
define( 'DB_USER', 'freedbtech_myskycuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'myskycpassword' );

/** MySQL hostname */
define( 'DB_HOST', 'freedb.tech' );

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
define( 'AUTH_KEY',         ';-5<zZGgIx5vImt&Alp,j[e?~O1Yfx5[87v9k+ol/i%;1*RTckU,Gj@5)d3biA}j' );
define( 'SECURE_AUTH_KEY',  ']t0(23_v=uWS0zwDD}G9NBc]GcF<TvJHk%3pR<n9zci)D,#iQ}!f+8?~_Ult}t4i' );
define( 'LOGGED_IN_KEY',    'dy#:)Nzkivh,w]54J_[g*ZbHBGQCv dL3%A@T58t<f<|re>0G$w&d&dn8In[=]0 ' );
define( 'NONCE_KEY',        'ht4dIyZQC(Yi*`JhzLnCNF48_Xv#h8ua8D];n($28O_4Ao]01ZvN)3>9T!]Vz&]I' );
define( 'AUTH_SALT',        'l@8EgIEymQ/$QJq!^d.|9KH~^w&X/FY*cWKa(0Cs.Ag(K[h>khbnZLZZwq*Z]%AN' );
define( 'SECURE_AUTH_SALT', ':{F>!m0z[t |i-{au@ka^zMDv}o!Vn!wQ:.}z0|X=5$DtWQd*70r)zVa}~-~iJ[@' );
define( 'LOGGED_IN_SALT',   'MZ31/jnp0J1Uci9L~8F;:@v)4q52i?zi~p^E5$k{Le(W2{yJQ9i(J6/mrl9j-f`)' );
define( 'NONCE_SALT',       'Wnp:L%1,J2H*vvLQY}1]k4@iNM.FIJb9V4|xr+K+bU)}!EjSy%u#KK%s!G&Qx2`N' );

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
