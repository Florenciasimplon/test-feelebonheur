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
define( 'DB_NAME', 'FeeLeBonheur' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'YEa5vp*`6{@qp:RXPWk&.eB8aR:eFz/32>3ri<2?Ph]A#C~!_<S15e%x0NXpJt<C' );
define( 'SECURE_AUTH_KEY',  'G0=,%B7Z[Hi,[W^+Fc]$On!&8mnG}: &+S?2K{P}^$~3xGul>!k|l(*J.UAOY8Xz' );
define( 'LOGGED_IN_KEY',    'J[SVa:~l$_drCS:EVShIF%*UnTRD,{]twdaa[[QH4 m0vLSWI$ty{MXWALFs{E9v' );
define( 'NONCE_KEY',        'mg. 185j)3Y2ns[T-Vf7R[ri!c<{ZMDeYzs/M)zbE6dTOe-i6j,gO&Dxs35J:Ni]' );
define( 'AUTH_SALT',        '_Bl-y$N*}HjaCV+*gfbfi,obRgO/9ptqq!|hFI3rG|#_N0E::c@0Z?h bv#r+$Ho' );
define( 'SECURE_AUTH_SALT', 'efy~Lh?^`P-5rjLXCge,.1ujB[4[yvR[NY,3)_<yC|r2J8Q}h^sHo$za!WfmCE`;' );
define( 'LOGGED_IN_SALT',   '!R(TtEb&_DZtx$M:r&+.iYUo;KPuQzWo<h~ 16N)644@Q4Q63d<?<!9Rtk4g5 eU' );
define( 'NONCE_SALT',       '`-~%N.!ZiwQE*z5r#Zu?[%s3QZ&qgZJ+q6Xg9&Xd32}z#*8&cdjk0ULMdXb`L1Pe' );

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
