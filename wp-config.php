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
define( 'AUTH_KEY',         'L2=U1|vGnZ3Cjb@D5jy{}-|pV)M|XJkq60XEh<6oFmD6&B*eXT]f4hZHpF7dn6Sd' );
define( 'SECURE_AUTH_KEY',  '5}fsHoWWNk}Sp9FYq*X!bjSgU_W;VJ<zWtGqZB$0D[6^B&Y<&BkI-CXbmO|Mrbh`' );
define( 'LOGGED_IN_KEY',    'Ry)FAu|-OlG3>Sl$p%kc.BoV#O-4u ,eZLjnTi42o>-zvH.8PnX[(;so0J^J`3Lc' );
define( 'NONCE_KEY',        '%9~mg8sIm@FHA%~w#A&!y+SFVY:dHqu>7u647fh. x5{xvK!zXHL,G,nb8TT=c$7' );
define( 'AUTH_SALT',        'R28-d1yI:2mL$9X6 46R;Ffd7I]tI5[3hE:fN0..]2-HjGg_OyvTO.tPv#!}fm5p' );
define( 'SECURE_AUTH_SALT', '3cBu|zbPZ1,l5!b8U]+O]SAUeVtCDco4Sl?{R1yGll&g7_&^zxBBmB@m^e-CsT*o' );
define( 'LOGGED_IN_SALT',   ',G~.[<z{KGgF@;#).^dK)Zha$c(UBe.r`P[m:Z+xXHb+mr8NSYZDj]P?E8q)epOZ' );
define( 'NONCE_SALT',       'h._j_B>=*#NL`n%%a(L%]1|T;,%:ql](H`+0O`(g=&ZMnajSv7G(ZnHGlKR,iy<i' );

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
