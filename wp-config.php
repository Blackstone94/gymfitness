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
define('AUTH_KEY',         'pkYyKk40Lx5Y5s3ZlvzHNdPrQeaOTkCSEw7+I35Ha2oSqX4uTL+fqdPe8DpVGgeae7EIz4aWubR47d3hAEZPfQ==');
define('SECURE_AUTH_KEY',  'sRsmb/4/VPPewP/WKP1Aj4pqbFH8f4ph2XST7FcYiFMJahidI2l9qPyllDsdLlDzQnlOczqpEU+j0DJ4C6mAdw==');
define('LOGGED_IN_KEY',    'sG0stpiNk0mbMYt94eDV+h1EbYsqbiNyDyeRbrzo4CQIotieNB4tCU8eSJkhbLEjcokqzG7kYhGAUE5n1tIp1A==');
define('NONCE_KEY',        'bXYyOMxdIh44CQxMj/VruZUDYEHzaITILKnLXNEbIdWaiHoSkOGQSYcr4qCJWrxsBeY9R9aC7l0xdFWe0kPuLg==');
define('AUTH_SALT',        '9SzC1UwzSAVwcZHDmxQ/S/ekJPwpRIJQmcsCUp5Qm8ARa6H/w7oNELr2RdpggQ/5o8ASk4ziP5NcTh5GjTTaDg==');
define('SECURE_AUTH_SALT', 'ZLgR5C1010GfU2skcEu7vRA2a6wI1QYryKJkxV9kffAe71/Av3sM3VukTwZ4Zo/ZxUvAge0d5Nifi0ub/q4t7A==');
define('LOGGED_IN_SALT',   'GZzTVfZFdr1l5UXRnfORmsUV0AS617hI1YhIUOCABWfhVJful8m+Ew+ZeKsZtlKMd/df8AfWynwHQ4qZ7YnSuQ==');
define('NONCE_SALT',       '4vZ/CPTp7nEN3wvSmiINQeMI7SlF0oP/XhE4aWrrwTCzKGP4eCAdHIqjP1gOEpWnzPmPsg9Re18/peTGta0WlA==');

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
