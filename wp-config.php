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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '8FVFy=}h?C;Lao dR7P75yrH<U+>Bk~?5eB`S[e~H@D[1T7CLg~ oZ9~,v?$>F;q' );
define( 'SECURE_AUTH_KEY',  '`aX;i~zu}<g+pC^})MkBnkY*P#W1g|J;rE.NpB!8bi>BLbR69Fe5?kM:do/i`!Rk' );
define( 'LOGGED_IN_KEY',    'Dmu%$5:`+B=~d@%w>3YuTZ@uGqwpVPPe<-/c$z}iw@dr.MeOEPj4v6,H>lPiXY(O' );
define( 'NONCE_KEY',        'O_ACk,WfNNQY_(&n>{(xc;KMU2I>32Sk`T@p^_1.F8o(:S:RG}47^5mJ/91n$vIe' );
define( 'AUTH_SALT',        '`*m7vh^x]tgKL6u4phVTRII!=lLj?lmsP`48,bKs^m+{;;qT,05p)iL{eq.OTmtR' );
define( 'SECURE_AUTH_SALT', 'aECD-~CT>C;dAkC<0p~JiOHEC.CcN326[QZtiR,+2TcT7v,tMHkJ} ^_Mb^1a3i^' );
define( 'LOGGED_IN_SALT',   'yZ4Kq/-DNPRy?@v#1zw( Rrl}y@*i: C5RlA5pfxDbS~WDq+}f`uX #pAVew[7k+' );
define( 'NONCE_SALT',       'Da.VzI7d*Q9`7{Wt-j:JDk.Hrr8=gS)Xvq>.6U#eY`/zY16V}Wo8kC{*n.dkvSgn' );

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
