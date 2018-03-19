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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'ud71mfNOHrmpdAefNf+Lm21eLXM8q4En/evOSumv5HmGqz9KIEe/GOPJgTQK8h65pYBZyDcTU6NmF+QKT7vakA==');
define('SECURE_AUTH_KEY',  'T1h9mCxQlNbynx5Ej+43Lp5YUHnsRWfp2epavj+kq3H1Cb09sPx1+H6jfrnGwcyjTEYxrI76rmFmniivD+GJlQ==');
define('LOGGED_IN_KEY',    'x+lb0R7vwi1LRpW53S+5Wcq4yeMjxc+J7yMsfwA3tng/2YAGgJKn+meKA3oOYy8MFYqqrUsQjeybPydWQy8CuQ==');
define('NONCE_KEY',        '8VcAWT5tPMr8+Yf/rEieLVbPtmAyMqtYdoVc8NNIQHXxA3yUo+LdUrTPSokl5u9CgkvXNSj0GDnI3wXscTKfJQ==');
define('AUTH_SALT',        'WgjAIr0IWcM2DODR2YPKoX3wETUCn6McGXVEoKWTeUG0z5AEv7Dr9XE2C9n90jFLfmlO3bu/Xtr8sCu0R7w77g==');
define('SECURE_AUTH_SALT', 'fmiUioZ8eEA9EdkDcWu8h0wMNr61bk0VGPWLtFxt0TSbZrBkzL+WhiL/qbivpxbrbRmf2bpzECvdG/q2ezSfpA==');
define('LOGGED_IN_SALT',   'CoHjcxsh2vewQ1aF0EBavC54DAPfnJVNqGWQVygPzUf3bUtqG/HylP1ie1NABAqS95lp/RqNDYU7Gvjzp7GTaw==');
define('NONCE_SALT',       '4T6pCjEEIm6AOj+RH8+aGskvGyi70KXYXAcllvJJ3aF/TWxbxDlr7aAY/2i7k1+RsgRSNRMnpofwL3xPh4GGEA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
