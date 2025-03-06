<?php
define( 'WP_CACHE', true );


define( 'WP_HOME', 'https://example.com' );
define( 'WP_SITEURL', 'https://example.com' );
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
define( 'DB_NAME', 'CONFIDENTIAL_DATA' );

/** MySQL database username */
define( 'DB_USER', 'CONFIDENTIAL_DATA' );

/** MySQL database password */
define( 'DB_PASSWORD', 'CONFIDENTIAL_DATA' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define('AUTH_KEY',         'CONFIDENTIAL_DATA');
define('SECURE_AUTH_KEY',  'CONFIDENTIAL_DATA');
define('LOGGED_IN_KEY',    'CONFIDENTIAL_DATA');
define('NONCE_KEY',        'CONFIDENTIAL_DATA');
define('AUTH_SALT',        'CONFIDENTIAL_DATA');
define('SECURE_AUTH_SALT', 'CONFIDENTIAL_DATA');
define('LOGGED_IN_SALT',   'CONFIDENTIAL_DATA');
define('NONCE_SALT',       'CONFIDENTIAL_DATA');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/* Multisite */
define('WP_ALLOW_MULTISITE', true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
define( 'DOMAIN_CURRENT_SITE', 'example.com' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/**Agregado para que no aparezcan los logs de errores en la página web**/
ini_set('log_errors','On');
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );

/** Desactivar edicion tema online **/
define( 'DISALLOW_FILE_EDIT', true );
@ini_set( 'max_execution_time' , '300' );

/* Configuration SMTP Server */
define( 'SMTP_USER', 'sample@example.com' );
define( 'SMTP_PASS', 'password' );  
define( 'SMTP_PORT', '587' );
define( 'SMTP_SECURE', 'tls' );
define( 'SMTP_AUTH', true );
define( 'SMTP_HOST', 'smtp.example.com' );
define( 'SMTP_FROM', 'noreply@example.com' );
define( 'SMTP_FROM_NAME', 'Example Site' );
define( 'SMTP_DEBUG', 0 ); // for debugging purposes only set to 1 or 2
