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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mrmctaviDBk85hp');

/** MySQL database username */
define( 'DB_USER', 'mrmctaviDBk85hp');

/** MySQL database password */
define( 'DB_PASSWORD', '4UOi2uD4L');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', 'Qv>B3QFcUn{^7Ibuj^y{IBNFYvn!z>BVoc^3>FYncv>B0EXqf$<E2Pf*u<ETHbyq');
define( 'SECURE_AUTH_KEY', '0gVo@s|C1NZo!5[JcVo!0K8Ng<BQjbr,7QFbu.7QEXn^}^3NgUn^0J7Yvj^3}BUn');
define( 'LOGGED_IN_KEY', 'Zo!80K3{IAXMby{<3QIj$u{^6MfTqj^},B3MYjz0J7brj$3{I7UMj$vH6Pi+q<A2');
define( 'NONCE_KEY', 'R~_5ODWp_-x]H9ZSl~1#9SlZtBUkYr,8}FYzn^0JcQk@0,0Jcsgz:CVKo@v|NkZs[');
define( 'AUTH_SALT', 'v,7iatm.+2]DWqet;DSpi*t]_5SLXqe+u{.A2PIfXu;<D6THau*2LA1ODWp~2#9S');
define( 'SECURE_AUTH_SALT', 'V9OhscQn^v}F7QJcz{BUIcyn^7MFRgYv>!80NFcVsk>@0NFBRk@v>Bqf.6Ibym.A');
define( 'LOGGED_IN_SALT', '[0Kds|-4NgZo!4J8Rdwl~:GZOh-1K8Rk~:!5O7MBUn$,7Qrfu<BUjbr,0,7Rkzn!');
define( 'NONCE_SALT', '5Kat#5ODZt#5ODSl~#9;DWq.2#Aatix]DSmatCVkw[@4:GdRv[!4}FcRogz0|1OCV');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
