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
define( 'DB_NAME', 'watch_list' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:8888' );

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
define( 'AUTH_KEY',         'iRvZtxE,Pr$o^,FZfS+,fon;DkY({|wu,]>VKAAV,/n1~sl}b/r+Cs{yrk6m2R,u' );
define( 'SECURE_AUTH_KEY',  'j3<K#K3&/Gd)OWlm19|(DFcyVb&)B41*8vb0,FUCaK`/>OTG0YJG;mT;ov(gvy*#' );
define( 'LOGGED_IN_KEY',    '<RV=v&kEYb(93<IWhQ#1YKD:w?]Xe`aEE?)e)4$FSSr5P~}%(gbM^a1UYt7J:Av3' );
define( 'NONCE_KEY',        'x=$GI</DnsN`g9 vHyi.Z`YbqnR>vzV{NPpF={^0H9}?h%NMw3Ja%@qQqo5V/WR/' );
define( 'AUTH_SALT',        '!R$66.o&S;4T{l-,_0^<*gonN%itz&WG~=#1}?zqSU<l2#pN<vJw}9DDM<tH kD@' );
define( 'SECURE_AUTH_SALT', '^>q:2OaDdZ_T]0}d$c=1B2?$we]KN*]05 h<C@b^1^jcB &ve<7UQ)D[dr2XzXXh' );
define( 'LOGGED_IN_SALT',   '-Y&yU6:{uPr;](lO^;Y/&p[|#N1`o!ps}kn)]U` J0`SAU39w189Qw&Qf6A4/JO)' );
define( 'NONCE_SALT',       'rNHQ&Ar{m.:9(b]:~XCuB}IwW`uUf8`2l{krNS{Wr81CrTs{ezIMg8 +PIHKL5`.' );

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
