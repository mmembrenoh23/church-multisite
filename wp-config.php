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
define( 'DB_NAME', 'church_db' );

/** MySQL database username */
define( 'DB_USER', 'user_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PaX7h6Ki' );

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
define( 'AUTH_KEY',         '|y7taE5yT(~GZqmO4S9%WA-qpRi:[(}*TJv:XFxhPzy~)N92[j@BD7<j/7au=e9D' );
define( 'SECURE_AUTH_KEY',  '):HHE4id5>Jz^VxQ![`b3<Z=y<4FAl~T]njb SX;`]moYlG~YaeR`9RoKFr++!%I' );
define( 'LOGGED_IN_KEY',    'TDnR(,GnO@Egi1|EOTEb)L_%]{xzXOPX}&L4!gG]-+fYwd>0uWWMW$Wh7VJaCwXg' );
define( 'NONCE_KEY',        '<Oz1[g]X_j23 5-cmJPc3I_3#m6=[uj{U;_C/;~KKl0KLbROGHdUz!?[* ~?=Fqw' );
define( 'AUTH_SALT',        '~q!OJgB02aD/&Vv,%GzY<cSHNP.-dd8b&B^g!8(;_G=[ww]dO($7dXhQ$aSq4#d&' );
define( 'SECURE_AUTH_SALT', 'v~w0=F<,PZkE5ym8nA?/vx5TXU?E3tr*|y@YWrAAkX2bx[6xBK`<d._*Y93F>8kS' );
define( 'LOGGED_IN_SALT',   ')vSO4:UxLyf=35WleNZ:uVdt:L!/b{id/..]_xSN@wwLGs3^wcpA>j-U(^r-r[Sy' );
define( 'NONCE_SALT',       '2c0(?F<kE}sENx6x?aN.JkPZ^:}QN1]6>N#g&Hl!H(_C?813YAx*~1Ud0cy[QT%<' );

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

/* Multisite */
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost:82');
define('PATH_CURRENT_SITE', '/church-multisite/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
