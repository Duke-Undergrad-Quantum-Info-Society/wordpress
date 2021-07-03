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
define( 'AUTH_KEY',         'Xj1Xn{FrV;v1B} % }7AnE:To{&&VWskUWX-%|ZFruu=Qj#{t+b}rT;>3|_jb[}D' );
define( 'SECURE_AUTH_KEY',  ':JE.ss=5$ook2HSqUI2uJGgK1`1dH!C@H1fAVK+Q#%;QO1=jt1!C|/)w/3Vl~b05' );
define( 'LOGGED_IN_KEY',    'o_-.3e,k%5V|P%>c%Z$zOO=O5p TKs.(#lzp^_Cp.,b~G.y+Mxr&y8j^WkSHH a7' );
define( 'NONCE_KEY',        'Y;E.*m-L*[KjaLP<t4#_ECd*V%&JyLaouoqT9{F$1KzcseEEp7,ag9Xy#OG9FU([' );
define( 'AUTH_SALT',        'kb`Mh#y:Ad}&S/Y,dd@NX;Z-4`kxP(+!N?Lb1I-ym}OMN,;f-eo<@/5ADZ-i 3|#' );
define( 'SECURE_AUTH_SALT', '=e@fM5YGx^mvPdS?KK($t6%;&-CPfWEYab,4CCCR|kV]6|JqF[|A4z>Nc@^lJ_fZ' );
define( 'LOGGED_IN_SALT',   '`i!cJDzv VRL)2AyYn6n%R6z=w4B2bt>#N0iccY3+%iiwByNLAOwd,s`xpwvR@G,' );
define( 'NONCE_SALT',       'QWEfkQWLl^7>c_yWJAGokrY4sR;W,lvjEhg9ArV_UEywDh0pmm<]H9SX<rQDr>W.' );

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
