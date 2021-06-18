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
define( 'DB_NAME', 'wp' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', '' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost:3305' );
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
define( 'AUTH_KEY',         '%<Z{j10$StD@+VqW*F2}Udq~:nTay.6,#=^KF?&qShZsGJnz@LMoSK}Nq|F2U5Xv' );
define( 'SECURE_AUTH_KEY',  'nnz^)fJ9!93b3kn^FcE2M1<fnlPgf`X cc5EIx,jWgnz+%-TAKqIlU6jE[ 9!ZU(' );
define( 'LOGGED_IN_KEY',    '=2y@MjXIw.Q6uic+w_& $jPno/ U*lBm6Yd: cJeHOaSWx0)rHor>nGQ4q$6L7nP' );
define( 'NONCE_KEY',        'ArRrz8j**YgJ3x(%yrB:eMA/yL3xVhZ[#$@8>50!@eGjk}.b9VtP5GpHm2{~Y,m%' );
define( 'AUTH_SALT',        'S_?q/^vn.Zs$!ii0*/aRYi?tvfhP5[tK<MB$Xsn2f9,S.`Uyv|<DhW4l*04(~bM:' );
define( 'SECURE_AUTH_SALT', '}_dV;6 ry8@2V3bzm@3S,9u+]iF~>&mxxHQl^j7X|YHOteaE.JcioLMimW-|y6ff' );
define( 'LOGGED_IN_SALT',   '|C !{qaI6Y|cuE[|8m/y45jm`HBQ7bqSi4iYjm?*~u*L8tBa>v|PD&x#k<D$%X4`' );
define( 'NONCE_SALT',       'WO(G?WV `VQT7;NZ& i_`FHe~]B-RE#z&}zX;DDd[kF/_+)P79sleUBr`}>p7Du[' );
//mx
define( 'WP_MEMORY_LIMIT', '128M' );
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