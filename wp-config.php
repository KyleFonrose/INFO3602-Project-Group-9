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
define('AUTH_KEY',         'L5SwxpXBSbhgtdvF7OhQj8VoKcpHdpd89ndpKZjTsCo/LIcCiSD6aBSoqdCkqlrVMWRNlm1RZS/796Fw8X7sWA==');
define('SECURE_AUTH_KEY',  'hzX31V42km9pC9ueaYqD5QbOzgZavvtFthBoTjoweg3ejb/qxOzyChwtTYine/IV3zJf57SPKR3n6LeAQhBPIg==');
define('LOGGED_IN_KEY',    'm49H8zde5dDL0m1U6PaFJ0W0VyDnQ1cSlOXgEPwaJvThUtMDD/J4z2roms8RtASC68lM1FpRKPwSv14KsrszbQ==');
define('NONCE_KEY',        'DN2G1WaLWibeBcEJmKCbIxYF07byKzhswoI1gfIjqBGPrfVfAI6yP4ZEel8OzmKeZT/WXlqXzyec5dPacZzH2g==');
define('AUTH_SALT',        'xsBXG8QAnSE2ps65xIJz/stLJ6p5E7G80HE4ivqc1mr0V/AWy+7nV7mH7ol+5OpMWWwllCy/RzPg2a0bXHBdsw==');
define('SECURE_AUTH_SALT', 'd+hWsEWhLAcD00OrLCJrpQqFIum1ctr201Kq0Ilr3QOvptUgJTMKJ9+JjiLmU0qoedl0HS0wa6BYu3uLOCAl6g==');
define('LOGGED_IN_SALT',   'LP56CBJyd2DNHVu6oPuECbgG9qQB6jcBHpyDDhDqqOsXQLiDsELlKYR0K9vY/4EWnCe/gXXH9fjENMAGWI5G+w==');
define('NONCE_SALT',       '+GNzkshdrRorRoNPoSWiRV9u9oAZd2fileIlzKXkLm+C1YlTOFO3UorrwBbj53WdKQ8ZyWPrdVwqISqLL9dJhQ==');

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
