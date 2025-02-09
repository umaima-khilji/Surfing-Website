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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'D&zh$c&[3Pm!IYnXZ{1bT<@4tPs6N8km{6Yk mQg*V`1pw[5GS<O-(,r^X]Z6z37' );
define( 'SECURE_AUTH_KEY',   'iBz1;cn,cAdtj*IQM)-sh(/]~|faw@NdeUbzcd.ew*$Ms02+A?x^XDVa`F95~7q~' );
define( 'LOGGED_IN_KEY',     '~s&pT1sA:$ mD*q8QoJ&4NeC21w`r;,,Cn^i$Lp5>bwMXwUplT3GS$|kZtM4DU*$' );
define( 'NONCE_KEY',         'nt()hkFvVEDT]+7wEmXz&FcpB30Z9fP2,AV.2<;drsm3Z{Fa.F&5e~D }2c3?}ve' );
define( 'AUTH_SALT',         '3j!SMIa)_R<~:7NZ6*5B}$m+/667C1=F$jCYXnT^D&O%fe5BcF>EPoBh.3457;(+' );
define( 'SECURE_AUTH_SALT',  '>xw$8-gmpyf;a.GG-JEc-J[I$9dOdVfD]0eMhQ%fKv0ODiAer<&HSP8gMO7>3b/[' );
define( 'LOGGED_IN_SALT',    'afdXzy>K%p$73rFqkE[JB-i<BcN 9c?g+QhYKO?oVUz5iI,[g2+VisuN0((Mg?FN' );
define( 'NONCE_SALT',        'IVK(B7*Tc=bF]N,Q4J^|3r{r7Tyr=IF<T;r_M3_FMDc)FcKE-h?{k[P&49VQ!o&k' );
define( 'WP_CACHE_KEY_SALT', 'u8G.:c?1,0:aIA[)Rt42qV9F*kS)U[]#1_l3;]CuEl`bi:iyKJLVZk A#KXf54-V' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
