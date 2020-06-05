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

if (file_exists(dirname(__FILE__) . '/local.php')) {
	//Local database settings
	define( 'DB_NAME', 'myfirstwebsite' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_HOST', 'localhost' );
} else {
	//Live databse settings
	define( 'DB_NAME', 'myfirstwebsite' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_HOST', 'localhost' );
}


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
define( 'AUTH_KEY',         '7MS^C#v5uDRFfk40k/pC+e^x*(RK_@pPh-4^n#xJT[2]q_ye:QYmXBwO!bYHY/(]' );
define( 'SECURE_AUTH_KEY',  '^.0-%`0Qg-VRS`@*.#WYy*g4?o=7a@{C6@*eg+&9&K&|t7FUQU|lpAe[t9F Qw?h' );
define( 'LOGGED_IN_KEY',    '!Wr=T;Y_ UkjZ,4yDR2DvOw*7^MV[9b15t%`f%.zct--.Qw+v7Lc?h5hg<Lt7jz4' );
define( 'NONCE_KEY',        ']^G})y#1l*zNl+vm7,8l`dtlF-O>]p_XHf$Ifh-4I79VE0QAo^Nbu.rmvO8~F5 B' );
define( 'AUTH_SALT',        'zf#VQ=.GpuuxxhQ1Cz=cf^@sv0E/&X3+]@_*PlHiZ[A~(fB;%QyyPlFG.<~z92?U' );
define( 'SECURE_AUTH_SALT', 'd+T9|%`fxWkH.%m;M=/ODm/Xda!16Ot(iIhm{Df<k7q>hCO)Jx=WZ(h58w&nc;aD' );
define( 'LOGGED_IN_SALT',   'v@v:hMO,Twb:eys{8Y}_Z4#Y hhHZ[e_T B{%$;kkAw<8jd2?:%)t)1>J!i;|I||' );
define( 'NONCE_SALT',       ':/Vx3h[zoFS=t#()_WQz;-`nurzsIM~<Y[biv-J-LyER`~+Zwc#9cOz D@@7,{YE' );

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
