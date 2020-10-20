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
define( 'DB_NAME', 'covid19_indonesia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '8Rh5f P:zQ`tBYcp4&Oetrc_S#g%LxouPmB*6o:p:Yre;b3#fofVF%K;ArG_q;tl' );
define( 'SECURE_AUTH_KEY',  'E&zAa%9YWF0|CQ2Cq.%4dM+#Xk:@blo]+OkR3y/2 +<-SH9?~/NWjdghM.c!2gn5' );
define( 'LOGGED_IN_KEY',    'UcKLb kQeLCpdxw!s2n~N@|)rIy=lS@8-30F-@sP~|C .BS<39tz=LKv/(I (0d|' );
define( 'NONCE_KEY',        ']^Az0$.*_ph$<Ly?ROo+C3c#oU$trun(kOh0l<=~#ZZo:Rc!PEqCHD3Cd7g/kODm' );
define( 'AUTH_SALT',        '8r/&<rda[M{Qn=ySZ,C1swWk<?#|iYM=la,{(NBG`_]zg7>HZ{+IWS=3QRU(HM6G' );
define( 'SECURE_AUTH_SALT', 'Ef]F41zPTF.=.jQ=_v>hiRT~5[1{=@V{(|$u/%IM{dci,:@3Ek/CzL[0Ua~F;UII' );
define( 'LOGGED_IN_SALT',   '%kv]Q%j XGr.hAG}2X%yU~^@mqek=m|o7)TmGeS![.cGFWLtEwd7z~DtT7S7fh>{' );
define( 'NONCE_SALT',       '%AU(B%$,zs*B5F,FAS168Q.iI/yaS#_pYlN!}wLtU9 LEP58qWq]o9l#Ni@_JbKw' );

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
