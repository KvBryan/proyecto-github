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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'proyectofinal_kp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Tq`=f;}&>^LRH6<NwpgQ*X<L=6:8%v*xviA: a8j4ix {73t)]IV3|#X_nNH`X$c' );
define( 'SECURE_AUTH_KEY',  'fqQ|bqQ+xZJGZOZ!~@(wMBTU{gpu#Vn}MwFE_}v/!4tSc3Xj8e]*lj(e$,&{kMBe' );
define( 'LOGGED_IN_KEY',    '8eZdS2@}T?MM%8^O_t`AR<vXF>FB98%rE$bPRq_SKJJbNpUo3&`tm65S`8JEV99L' );
define( 'NONCE_KEY',        '%RO-3Z#ANfYyN Kpju`V0qZ7!;6Xyf!klO&*tt&jTsW.[^h{dOCfUDR xKq2[f`|' );
define( 'AUTH_SALT',        '*nKaX[ZQAKH4q4 KxPL67NL(k^%;Z.w_Gc[9P^gm)UCqi1YE*Q4m[lzm@f0QtK}3' );
define( 'SECURE_AUTH_SALT', 'Cx1Q|~BmP8$%Ek8r@sI[g^J(? lF5K,?aGXCpz! }Jy5VU<rfhbl$PlfC) ^8`EQ' );
define( 'LOGGED_IN_SALT',   '~)*W20b4[y%[T>ZO}K[rz?$-:&srF{@y7}@QA5)Z=Q5ncdcG]`8W7zE(|X1ct_dH' );
define( 'NONCE_SALT',       '~Dw~N$_cW`=_N~reWR9)]<Z]tE4M{qjaa4JloyQUSxiXgWDBu8LL+X(Tm-C,tKra' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
