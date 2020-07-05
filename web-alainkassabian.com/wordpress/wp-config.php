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
define( 'DB_PASSWORD', '(Ss72kP1(H');

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
define( 'AUTH_KEY',         'ebcd123794a5e4c0488d5d82b421481e4a11247e');
define( 'SECURE_AUTH_KEY',  '53c1808ee17cda0da9af07e391906b1cc3d4676c');
define( 'LOGGED_IN_KEY',    '8a28c5ce9843ee4cd6b3f282cdaae51d36a9f30b');
define( 'NONCE_KEY',        '1a00c7cd16f7cd889c255b5c3cf464aece58c1f4');
define( 'AUTH_SALT',        '1a17562c591b41f23f15e29dd49dd9d4cb78116f');
define( 'SECURE_AUTH_SALT', '1e92b12d6d313b30b6557a6eaa4d58727e2e8fe2');
define( 'LOGGED_IN_SALT',   'e99704e97a3432d1bf66bd4bbdceb6872aea9582');
define( 'NONCE_SALT',       '388201c0430dce173dc6f15f6b50dfbc2e304645');

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
