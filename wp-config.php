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
define( 'AUTH_KEY',         'tcG&&Oiz:k^6<{LT=$zDi]n-5OzuCX[U6&{R8@<^%</Yq3]nI;7Yv-3@8}ctqZ-=' );
define( 'SECURE_AUTH_KEY',  'O>@lbW:pW/1e(-lMtz+Le8YW w`*.%{&O6|U>7z7ab:Bcq ET;Vny!N^f#2HU,zO' );
define( 'LOGGED_IN_KEY',    'kwQz7,6:IRx$E.]]hVzbH0TW-X8p[qaxRT~e<!bp2larq)OjO!+)1~HM}P$5y)vz' );
define( 'NONCE_KEY',        'zoSPBJ*_a%OzpUi}i]t&gU`3SP^Lrx3sP-=d@R&k=sm(f1SBp5T1T.YZku)bdiAS' );
define( 'AUTH_SALT',        '~a(.s@CM#[}| TiT. =-[MyoC1<h(.#nLetPd-Aba>Re/](3V*Sf-{PMC6M*jm.)' );
define( 'SECURE_AUTH_SALT', 'LKrOytA]Qb<R7{#eP+)ip+hurD`Qny{W<r_-%ZU:~q({zx&}PBP;>oq74)[li;Tc' );
define( 'LOGGED_IN_SALT',   'Bd]g7I!~&WU`2EiCw/u41ARTM%<#wE=X]hPl(K%|mgq)N#}HntU$WNo|z_X~Kaf,' );
define( 'NONCE_SALT',       '2L:/bXaQ8)@HSE+Z$-~qcz)([B>kq+ek0]+DB%Rrk09/IcWiN)  QV;*8)/:V8ZP' );

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
