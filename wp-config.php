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
define( 'DB_NAME', 'if0_37280050_cinta' );

/** MySQL database username */
define( 'DB_USER', 'if0_37280050' );

/** MySQL database password */
define( 'DB_PASSWORD', 'oJZ79bQua06mC' );

/** MySQL hostname */
define( 'DB_HOST', 'sql108.infinityfree.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4_unicode_ci' );

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
define( 'AUTH_KEY',         'Y?Awnvnljq+>bM!aM%},#0~3W#QN2z!%k`W@qnX%yk*0ju.lqm<a].CxOy3eL>8?' );
define( 'SECURE_AUTH_KEY',  'x>y2X-ES6Fu[()qc~;y]9pX^BM;1uC ~RY}dVtY|1UV#VwrqC5wtjkR[(*u_kR`F' );
define( 'LOGGED_IN_KEY',    'oU4&8Cty:rZ?;?Q3~nO$WcmPd*DQJ+fQkp5dC3J+0h3|?Ip01/-57_9H~ 13MxX_' );
define( 'NONCE_KEY',        'i|w%*Y(Pjm9/*/2t?A6f?%+@t;.<~wRFt )Ws|(*GrUG`)32<,+Wn@I6oXQ3s;[G' );
define( 'AUTH_SALT',        'pe{svR]M@rvBHzk_ {VoqV4*yE#(Otmrtd-sQ@|HnmD#a#UV-4iw3uH5%lAgxm_2' );
define( 'SECURE_AUTH_SALT', '1)8R:y[XK$44x17w(xkv!ylSm8{J6t20]B|u.6Qwvq.#YiEaYgSN7;6F q*&U*s ' );
define( 'LOGGED_IN_SALT',   'w]9F3n/i)D7`(gq?jo unF!JqHDwCb}5^jpgqM/m(tgE_`gYFUH=Ri(W]iP8})H/' );
define( 'NONCE_SALT',       ':Yx&]dH#Qdi&6?j/0>mB~Y&H0fN{gSxUSGeYPM^R*_^=6|t{;Iy5t$}g&hua}>Dq' );

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
