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
define('AUTH_KEY',         'W+GZtoa3XaSt/m+9YGzOlgkQopHUV7qldPCgv8rwvIKGJzv3UTd5txwjplOJOZ2VzRsYQg8Sy23YW033nDbW4w==');
define('SECURE_AUTH_KEY',  'DTjNPr/Vv5UUx9mMbemEFsAkU3zpvOxnEYk1/OjYBYPVCn3r/cq6DmzHfoj5q26TJ3B6vDSXpeh04LW+fw54gQ==');
define('LOGGED_IN_KEY',    'jCKBEcnE5Y5xsPT8RzEneKODwnVU9pT9c9FZwVI+cDYO7FKnLBJmBF2EPO8lwIb4XyUB9IO/xuZHwo1GmQdGsQ==');
define('NONCE_KEY',        '0Leh9kFQy3RaqSTwHb88REp2n7Uys5X8E+aVN4pia2ppBUCGfjnwWtPQCvztqL54QPmPQsGxFsIBhAHG+gWL6w==');
define('AUTH_SALT',        'qjv26N3m4lHJyvmbs0LZwHj78ow8JFuZH1dgT3Wr9MfFQualHC3NjdsNPTATVj0SgppOos1LqIsrZzmJznx7dw==');
define('SECURE_AUTH_SALT', 'ZGfBlxqbv5EZfOsipY0AId+WnAyOzRuNcxyZ7lbtF7KPusac8F/D71ryUgCX+i6jxFEIlGrQd2VO/mVmvcU4nA==');
define('LOGGED_IN_SALT',   'MuwLaWP54Cb1fIGNYYKcTgbfxN47FUhHbAykAU9lQbtvjXSzDUye1996XHFf8hyJkSKEo/feNwm84vuInYaJqw==');
define('NONCE_SALT',       'mW50Stgwl5YFMoWtTzsjJaQsSUILZYeSPavIuixVxWUWeo6l6itXarG24KQ0rJdEONd5baaZZWJpv63IfsodAA==');

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
