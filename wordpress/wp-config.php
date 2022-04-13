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
define( 'DB_NAME', 'wpdb' );

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
define( 'AUTH_KEY',         'p5Ue~ Ra)R2X]Q>9mn1wL?>)w2Z ~7-jVx#J`1Z~ap9,w5,-LapiV,}hSFq.eC#A' );
define( 'SECURE_AUTH_KEY',  'h<@6aXQ=`I`;.8N,FTrHC]AaK<j=h=TwMQ(}Qyu]^%etY=.Z2S;EOUJhAAGGpfbI' );
define( 'LOGGED_IN_KEY',    '3a$Wz[=;Mbx<2>B/@YepjHI.t#P+^E`[KI}i|3R.n[p&2A$a7T^?TeG>{r>s*DgX' );
define( 'NONCE_KEY',        '4}PDB*dX%vA]GTfD<0Y?fm@oPy+.5of;8e;#;7jhJzNvVg]p%:Oc7yJSS3D}xDrx' );
define( 'AUTH_SALT',        'CB^.VRH`3d>,W-][F[|<TnUgYo]`4|tC3z~=FN3kJ5m=y6sc5&`BkaN(*H7Kr_mn' );
define( 'SECURE_AUTH_SALT', ';pQJ*&g=o,tk?iqkKVZS,=gji)x4<z@YQqw|DfYQ5%YJ{3Gy^fysRU%m6h)sgH>W' );
define( 'LOGGED_IN_SALT',   'T7T;~_](m4+Gg9On;X?{$ -Jo=J,U:GKtOU:oG3%&Wa~ih?eIy`6iR09JA+ >Y;j' );
define( 'NONCE_SALT',       '^y~5KI>Bt00P;@NmL%VUBp%H9cl<_)[*as8#&3tc9Sh0ZX-(~poU2o7+X7|B*C}Q' );

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
