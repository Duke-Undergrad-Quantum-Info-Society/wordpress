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
define( 'AUTH_KEY',         '8oPUDY{il?UaqKLr[(An2dcGpw _IAPln,X.PAAaujG1PaE;O(.bu{YMspg[=HQP' );
define( 'SECURE_AUTH_KEY',  'zg-dVF~PzxrI}&%oKsgx]Lp76=?l!si)[Pf!mcEeXkFsrKJjVxMPj4lGAU2iIV:h' );
define( 'LOGGED_IN_KEY',    '_%PK_xAs5iWAZIW[[fi:3qF,Pm}&-&8<yu#D?U{uBKQ^4[qYXLtCtC7[)Lhi8H`+' );
define( 'NONCE_KEY',        'ryT:I {y{Q4}#f!O_}n)plG1u~}S 0|j(rIqf|xUi3^A9x!w?ipR^xY}|XsEFBMn' );
define( 'AUTH_SALT',        ';AV[WQ?)Tm/6{%z_q3,$rl4WiJop> ^z-MRZ3#ZN5-+E*%Iw:Iv*F`B-ux]=gQc ' );
define( 'SECURE_AUTH_SALT', 'JHW?i2Z((-zXsV.<#+vBw{pVPsR%wTG+B@2F&iOGb&WKUP!)%?gK!:9,&8:`<D*R' );
define( 'LOGGED_IN_SALT',   '/`A>FAB-)dhWf]qt _y6gDQX]w/^}7T)^;TSre.wpYQQsr4O}r^h2d-3zu9aZjC1' );
define( 'NONCE_SALT',       '~LC_L]I<cDNv?%p2]bw|Mw3 rMLnM=Ao*o+pGV[:Tj.h]>lhyh`XXoKm56?M5~/$' );

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
