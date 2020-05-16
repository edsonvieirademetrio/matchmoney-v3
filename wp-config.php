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
define('AUTH_KEY',         '7T5wZg73dOACv/qEvs0BAmfltiPpbSqB0K2kGxEblmclOmdJgju3uw4AA3hgGm7IvSZoc9Q50VKFLr/2912dWA==');
define('SECURE_AUTH_KEY',  'p9IXXJ8rfihLrd+laMkFGy1ozrQb+kVdFJRnFS2jPBDbfQaIAButkdockygzbEbINJR4+BJFFHIvgLtFpLhRAg==');
define('LOGGED_IN_KEY',    'fsPm62OvtMbw4RSyj727PGsd55ZEVTAlfUUB0m1Wrk/UojmlEaDCOtIwg4SoSYNc9n28yOLzPkRIJDng33EUSQ==');
define('NONCE_KEY',        'iORMWmw2JLWha3r+iKA9cL4RTgkLQqb0gZt9i/YQLC5YtenWRW5+QwHJLrL+8zHW8ps8eY79lxONcsUXjqDCaQ==');
define('AUTH_SALT',        'oyhiAbWs92ljGU3UjweSxvUfu2lLbuVyhxhUSx9sl5QJQ5WMpUKzPUWR+wgunAi65A5o8Lnloyk//YRRI09b8A==');
define('SECURE_AUTH_SALT', '6i8BRwIX/r7Rh5TbKKyAfPyBsd0vFwmciogveTPZsPWfVAlsNjf+WkexFWNw2aDy/EtRFsCgYdwOSChKihSlCA==');
define('LOGGED_IN_SALT',   'K7SHhQkkuhzC+wTSo2FBSEVM0kJK9vCW3HcNIBaunMAoOSf8c1c3aDTxuHDysAn1NziAKL+pvgACfWM7ZKf+OA==');
define('NONCE_SALT',       'strrK0kVHbbLQ1qwvPISAE8XOxP4Rkji3eRD4c2JZu59Ei9o+eoD1J2OfcyxnPg0IItdo8+f+ewTsblY0qiglA==');

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
