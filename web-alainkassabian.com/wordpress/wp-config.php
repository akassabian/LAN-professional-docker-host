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
define( 'DB_NAME', 'alainkas_wp194');

/** MySQL database username */
define( 'DB_USER', 'alainkas_wp194');

/** MySQL database password */
define( 'DB_PASSWORD', 'f432fesWER@##DSdsa');

/** MySQL hostname */
define( 'DB_HOST', 'wordpress_db');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '67680c3d228a45b833142d7593321b716fbb9880');
define( 'SECURE_AUTH_KEY',  '7fd5f886f445670a8c3778e1adf3e9a3313a5d0d');
define( 'LOGGED_IN_KEY',    '49bbdd860a81304c0f006e902c2479fcbdf4c7c7');
define( 'NONCE_KEY',        '840d652cb74e5a1769fe09aac17cfb987db91bbb');
define( 'AUTH_SALT',        '6c5cd392257a69d741c54f30642eb4500c374248');
define( 'SECURE_AUTH_SALT', '6d45f573e97922ddff2d9cfe00250c960eb40221');
define( 'LOGGED_IN_SALT',   '0ca70e5cebbbce18cc3e5af541c85c908f1ddf8d');
define( 'NONCE_SALT',       'a92de9db1c399388866c6d4c47f1d9ae12b9d28e');

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

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
