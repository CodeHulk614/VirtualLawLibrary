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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home2/vituala/public_html/demo/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'vituala_wp143' );

/** Database username */
define( 'DB_USER', 'vituala_wp143' );

/** Database password */
define( 'DB_PASSWORD', '4p[M41K)pS' );

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
define( 'AUTH_KEY',         'gx7b5tng2hzsbtkds0xlmibbpnzbgde4enzhlp56to1991ezih3icygasdhrbdd2' );
define( 'SECURE_AUTH_KEY',  '72uvhvrxuwyneqwd5jganhlgmmbymskt4ocuh8iazfxtv0mfnqkuvhzjxloqexvo' );
define( 'LOGGED_IN_KEY',    'hicq9kaysbuuahmn7zadgtuygdqw6lrobdkrgvm338osfgygqr9t2e00mmdg8awk' );
define( 'NONCE_KEY',        'xsarnddcpcjwnngszt7zievgesycarop2oswa7bloty6pvuqi2go6rpqtdg7pq0r' );
define( 'AUTH_SALT',        'isfioyxvdrlhgwjxbvgpfuviuzxwm4kyao4ophzi7oowzvc4d2u5xhdeeaf6l2uc' );
define( 'SECURE_AUTH_SALT', '3vvmadkrkfhdzc8ldr54wqoovkcmnylzxyuemxa2klpginjk5ti54iypopqmukuv' );
define( 'LOGGED_IN_SALT',   'du5iyq52fvxwjdf83osmlvo1x680yfm23tbg1lykbdvgqnpi90vggjperzldx86d' );
define( 'NONCE_SALT',       'v0omunda5cpwaexfx7nhsmgcupu1pfmclzomazhttmj8oekfbc2ygso4l6gtaaah' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wphs_';

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
