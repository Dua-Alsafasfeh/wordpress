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
define( 'DB_NAME', 'nature_db' );

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
define( 'AUTH_KEY',         'R-E(z,24aPG/.*s,6Z_G K 4.-sIYx|qgID[u/C/k3}3+A4Z.Z,:$+$`j|I_p-8<' );
define( 'SECURE_AUTH_KEY',  't9b]l1-**EClifL3 I~Ob;>l@Lq4@rvW/a{t~Qu>Rzd-3Yls1D 9sidszU4vd#-~' );
define( 'LOGGED_IN_KEY',    'H%O@#`^6F/ijjtOl)t|oEm#.dd4B;)j{hL8NeNKX?|d<4/G^4cjsGq~--|:_XV!P' );
define( 'NONCE_KEY',        'r[;yssgc5cHvi99ZkwfvFm6hQp6U<Dnvj@-u.?*g@Q)~>+Hv4^g4-#C%k,`|G5hJ' );
define( 'AUTH_SALT',        'rfCjE>fIVPI;0SvVILf>NLzZjMQ[a66ppl1# n13H?z7rEDA-KJGPBVRIR&fo.x|' );
define( 'SECURE_AUTH_SALT', '[[[:`*;Hc;j5OuVxa7a@^D1Mwy/Ee`E###Vu]qqD5o<^&75>t58RD|Z</? p :YM' );
define( 'LOGGED_IN_SALT',   'EKIs]bp:kJr#/*%IYbj8DV^aON`w8 QSpM!Te|bd=I^p$zF]/a[~-hMoVyR;g~l6' );
define( 'NONCE_SALT',       'OW`^@7Ny?:*)z;.NoC2z12VRY^q1R Kvm1)z?@M{_.x;#@G[lY.<66 L)/Hr%hZT' );

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
