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
define( 'DB_NAME', 'getgroup' );

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
define( 'AUTH_KEY',         '7c`G5aFj ]Of?#OTzc{^^7p[0`n?(qM;FhzR &Q,_c+%{Ze-+(upY56*r!1-5Ff3' );
define( 'SECURE_AUTH_KEY',  '6iC5e;;A]+>2dA5ALg/W7|0~M7$EDY[VtWHFIlS#w{Snn,laX8wUY8kM1gL/?Hl)' );
define( 'LOGGED_IN_KEY',    '(# $_ `YHEt64$gV6qhC6wNk1S{M2R{]l7d=6D[%~g<nU)~7i yxbDlnFi6(C#]B' );
define( 'NONCE_KEY',        'GA1HbQ4,Dx2{hxmY1whBa{~G|IM1zKBpnzt+MGp9<`cJ:~3j_~5/a)py_6<oof,}' );
define( 'AUTH_SALT',        '|t0zP8I9xD<Yp^C^S@;)vHv(xiG1%Z4^gw~[DjVGf #]31e>gnAlqCi G4;[7UsB' );
define( 'SECURE_AUTH_SALT', 'tG:lV`/1)nO*=RZ*Xx,X^gS]OMoB*20i]U9]`{%@no*J>NlvBcYf9{x%=)r+pUbm' );
define( 'LOGGED_IN_SALT',   '3 %hTV?UDsn?Prk0RcUsMNgrS[?tP*W%&Bd3M#qs=l<sYkwv?K]M|ux88Gv/HXX,' );
define( 'NONCE_SALT',       'n!=v[{lEzm4j.JmN]+&-I,**?4{J$OzL_7.uWx!fy-$BLP@j0TU0C`SXYF6kP$ph' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'getg_';

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
