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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '^iK*/&Jm~WplM95$.KyE^}+YNXfv{nOLPNeMrzrw@$,lHPZIcdtz7/5<3bgZqqGi' );
define( 'SECURE_AUTH_KEY',  ' hoWSYYBE!n-cPvVwu$@v>j<Au.WI)pbY;q0l_c.HGX:IZmql%`g0lt$l5pFk ah' );
define( 'LOGGED_IN_KEY',    'Q}ysEGY39aA*p<I]vA+((A15s2uk&{-wD`&d.{ZyeM-;=O.fR*]&cU8G>`c?B4!a' );
define( 'NONCE_KEY',        '<?~i5BE5w.d]tIP2Ks;Vi}$#O^v)v_WhGr;{m~z,xVfK F}J/05{.zG.M7kw$Uz|' );
define( 'AUTH_SALT',        'Xu@Qy03]LI<ZNq?NkZ77)tC=K7PH(b#8S(zBP/i-B#@6:{}?6;KAgmvoeg`i%hOm' );
define( 'SECURE_AUTH_SALT', ':=5?EZb*j<b2))@v%p4p#55<FfSRt/;,ygKnIy|:WT_,(~ Ag<7>=*/;4t8ygMSk' );
define( 'LOGGED_IN_SALT',   'Y:.~5d+wdv!#O~T+7Alm`zJrTm;?zwX260 6$~j=Q@{7P0 NX?mwRjd[2 0[WA&X' );
define( 'NONCE_SALT',       'I~V dx[KNX6LW3V!|M6Wu`Q0AZESGq^Wbb2eIshHN9<v0#6V`apTt`Kwkja_Kv9q' );

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
