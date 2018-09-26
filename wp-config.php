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
define('DB_NAME', 'videos_wp808');

/** MySQL database username */
define('DB_USER', 'videos_wp808');

/** MySQL database password */
define('DB_PASSWORD', 'hh!143pS5)');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9olursmishlxqxre5ndpmsbt3sfyqg8pk1siv14ffc8zzyxsetml1puif6catfi8');
define('SECURE_AUTH_KEY',  'rntrncpzham2t2xidrwlgirhj9wkgdk9kz9xncawzrp5xetvldgg9rr1gpnjecib');
define('LOGGED_IN_KEY',    'eyqlvhdopjbmgdiqf4vgscsiwhtjpcbofuzlzuaydbrfbaakluvkhyjvlp4mzmdd');
define('NONCE_KEY',        '3zabybytsmdpuabkn6zlittszkgblkgv6owvsfabpnhnytgbdrbltjbjghg5yncs');
define('AUTH_SALT',        'pw9qdmrx1mhrnvwqdep2bjaanmjeyprr4lpekotsgzofcrzasa2hkdsxartqocqu');
define('SECURE_AUTH_SALT', '9v6q0ivk4gqzjml6cdac2v5imzt0o24sl3ermgm4iwr0oyzkqszqq4yt7fvyofzt');
define('LOGGED_IN_SALT',   'oysmswwcpkjqtlabdpsptyu6u6gze9jqfgql0x91jyn9ncayhh3ozlabfuhw8pvy');
define('NONCE_SALT',       '2jbvwb9qfh8owsfqzobrcemqemdn6puaxkg4n1rdzhfkgzatcgsiqw9md1zwv8tt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpag_';

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
define('WP_DEBUG', false);
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
