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
define( 'DB_NAME', 'ceunsr_wordpress' );

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
define( 'AUTH_KEY',         '71UZs>l@8dh7r74.h&wu9oKs26ev|]/q]8=F<1Xn ~1[M<:!$93pw+u9qRZM5kF7' );
define( 'SECURE_AUTH_KEY',  'MK[chjh8|-7q?RiK.2 )n>A%rDA qVld2P?=&CB*rZsUm_YsmILnrM_?AzUuOAjm' );
define( 'LOGGED_IN_KEY',    '`w,k!StyN%9}qDyh;Z+?;dLQfHGree/KJ%,Y(T^DE:#YIaBeb@M?(AKja0BMD[3#' );
define( 'NONCE_KEY',        'b5)`|??C0`aF:P/_)3INSk`)hL5&SEm^<deSOEy#^m(Ex)k%T:v_=ANET5[!RLyL' );
define( 'AUTH_SALT',        '2a;[pIp*9:4C1CSZwuCK_Z8X|/j{popm0C&v]O?<o@5Pps_<dn:p|IU|wsI}nRL@' );
define( 'SECURE_AUTH_SALT', '=@:KCo[buD^?vY/#p|5~wr>edI6:dh~K2P@ cTT47{Ghtn-Yvmwa;Ji94K: :b+o' );
define( 'LOGGED_IN_SALT',   'vaP+Jfrcy-?6V[*.SuDK3v/9Z*A!m}>>vL@(0YhDxV/K~`c8E5t+|CZQG@M%hdU5' );
define( 'NONCE_SALT',       'O fWf{nR*3gIQ),nYe`c^N:l@=]C0:URZ@! UaCC:}?Zz9ILg5iZd<N~(g7-<~F~' );

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
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
