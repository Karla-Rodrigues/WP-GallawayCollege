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

if (strstr($_SERVER['SERVER_NAME'], 'gallaway-college.local')){

	/** The name of the database for WordPress */  
	define( 'DB_NAME', 'local' );

	/** MySQL database username */
	define( 'DB_USER', 'root' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'root' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );

}else{

	/** The name of the database for WordPress */  
	define( 'DB_NAME', 'db9da2hcnkf9t6' );

	/** MySQL database username */
	define( 'DB_USER', 'ubucrxejh67qq' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'vkvs4dvsqzpr' );

	/** MySQL hostname */
	define( 'DB_HOST', '127.0.0.1' );

}



/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OIj9xDenh5UPKF+ZesM86EiCJPixEhlIoA48ESWKr9GxSOKgqfv98DWNK/P2GDkfaiL8mnLLVvNY9/52XdpVUQ==');
define('SECURE_AUTH_KEY',  'VzdSaaQ/B3i6KFAjpoMnOMTjcjGiNVkxbNAJK55od+7QQufPltyS/MsEkYKHzOG5VzOxbO5tcOt3IDSlBjxmjw==');
define('LOGGED_IN_KEY',    'Q3X+z9dBm2ZeBySljBbhK3OqgAp56dpEgqwF4d6Ul4osgqZ1ARUt1hzTRRE6ZNiJ6PVQb6ZdgkJNZrAQz1XnlA==');
define('NONCE_KEY',        'pj6V+9N58YGbvyFS8skdTDvHRP83Q2LTjgwK/7cUeeL3I+6XaMCteVhFCedwp6gj5Z+4uxLTkz8anC0YJOYx8w==');
define('AUTH_SALT',        'UeBJ0MfA7k3bUYTvm8fyejxigRq2K064xtk4sVvXvQ79Ho3w7w+r9RXLp8stohKxK1gcPsfO7g2lg5H6pfcJ+g==');
define('SECURE_AUTH_SALT', 'MjUTFInLbK3eMBICDoFMmZsbdk6j9tst43dVCkm0qCC50duBta5ULnm9TL+bpNhgADt9CcR0YRLRviQYcTiffw==');
define('LOGGED_IN_SALT',   'Puc4MHRpAC3w74sL8oK8CzHAIRCXUoDVpc4x1qdMsPcwugrvD4dYY4Ydx3BZppC4ojjqd+nHAL9nLB7s6AtXqw==');
define('NONCE_SALT',       'mFWX9xgaTr1F5ic1dMEC7o3+rwB7tTX9X1VtXow85IMo8u1NcwU2kJKspHanvdrO1umibMsqIwXJjHEHqVzcPA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
