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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'plugin_dev_db' );

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
define( 'AUTH_KEY',         '{W2dR-PP`*]A-WCzr#XaN#Q+i|N3KWLf3lPC/[/t<52S2HkJCX~w;0l74bJPKQz8' );
define( 'SECURE_AUTH_KEY',  'jS6i{:VtmW)ei#>0NK2Kgd*kNJXt1fP5&%e$eAH_ Mo!xsOx k0HhfEs!n<~U1OC' );
define( 'LOGGED_IN_KEY',    'H6Y|_S@`MqW-MZAeyudupcYE]FB#Kv$=xML j#/LR*&bmZ:%7W7XMw;93D}ne#l_' );
define( 'NONCE_KEY',        '0K),P!H8sH+Rl/E];FIst%LoL.2RlCt[Y~}9l9.a `P.Fpm||^/Qac@t.*).]OwJ' );
define( 'AUTH_SALT',        'o2bj~sz&y!a*V1#c*wRFK|(.|aMF?fTnfo2uJD8EQjFxxF^MW;=TYj@VDjH$$@V:' );
define( 'SECURE_AUTH_SALT', '3?62Ri#p~MW0X{FIY;Y`z(7K!*bs@Rt3J+Gd@#e%6`6]b9?^_pwISBmWq~iQA}Nb' );
define( 'LOGGED_IN_SALT',   'Y0y7.].Al/%AgVHVn3[0i]N;|3DyAzp$dAb[T$#wIO(:DYlfz@n^}g]I5^~@]TG~' );
define( 'NONCE_SALT',       'nxGK-dHD }HkZ;Yb5Oz >Of:)db<zhD4#]hcVldhe5?z`TxxVf_XG9vXc9y)Bmvt' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
