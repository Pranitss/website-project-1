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
define( 'DB_NAME', 'codeline' );

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
define( 'AUTH_KEY',         'kdY-UF2fg^(9i_NB.7cSPqB)P^je L~3QBT:^-#mMqw|ZQkg%xp`1cd>t{H{>d1{' );
define( 'SECURE_AUTH_KEY',  'PkI%v~iQUNxy=UOsPcoWrln&7]BZ_ppd&4!8[/3#Oc5_tDFtm@?ZESvQ{i=Nu6^3' );
define( 'LOGGED_IN_KEY',    ']y@:ki#n/.in4MP4_rK0D>}Fp-Ls+5;v%2`vTl;I2+*&f. WmHk%z6cobto?6(:j' );
define( 'NONCE_KEY',        '@4XOu&`*Gsx^/)2%h{5o^TlX.v^G]MHCa+o+6gFcXxu$`p9b.IhyNYmGysPuc[nr' );
define( 'AUTH_SALT',        'iO(IzLw*<0h~c!6w==9kDs(pENp(V-!9qWlj;7Yca/;a+@GIcTwG^q89{##G8rY`' );
define( 'SECURE_AUTH_SALT', '<{ggM_p.-1x:ZC){<A`Hdciicv-o?[_N33dq eV/*Obcq^NP7+b(!}0m#UsX@2,E' );
define( 'LOGGED_IN_SALT',   'DYl@:a9c]>>iODm&vBej-qj@5dPm&gi}W+[yM5:Rl?G54Nd.u$H@WGpL~ukjgwDL' );
define( 'NONCE_SALT',       '|IBX](Z2{WbY]q{_W(%<Ujh $~qoL8etaSsH8v40DQKQ-OGp!al7T@B%4[oKxThR' );

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
