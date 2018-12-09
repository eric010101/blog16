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
define('DB_NAME', 'esbcwp_blog16');

/** MySQL database username */
define('DB_USER', 'esbcwp_blog16_admin');

/** MySQL database password */
define('DB_PASSWORD', 'esbcwp_blog16_happy');

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
define('AUTH_KEY',         'h4bffanclj3ebcdh2ktngskyh5wdjgts8zhitwxojsad1fo2r7folgxl7tvzfm5v');
define('SECURE_AUTH_KEY',  'ewbmkgvynb5h0nqmb1apyxo6v9y2he5meipz9xkajhje5ycw6x4dwhpsfztcxtgf');
define('LOGGED_IN_KEY',    'pxqzwg1ohuaac2bs2sooz0hqe1osn1f93s0gcaddmkaacz1radmtx4vzt4jgoalo');
define('NONCE_KEY',        '7rva3azjehucrpnt3p9dpxpxcq0ln50jzxic8lcjr4eqrxhze4xtbjrqblbywdpb');
define('AUTH_SALT',        'qz1laxfopgnqjaibgfmg21msmmyttaruqmssxpcoeb7akpywrb4vcreruorzv146');
define('SECURE_AUTH_SALT', 'rrnqqpzhajyv7qbadvsvnmo08j8sczz352smoxy1eblj942nple7m2mzz5vq3vud');
define('LOGGED_IN_SALT',   '2zjh47vzfjv46zl6u13clg7iwkxjrfypza4rwlh0970l3gcuczvmb7didtnole8s');
define('NONCE_SALT',       'fqldquyoaem6ovdivuufxvvagpxl4mugjy6lqxg9d62b1iiqpxzmypbjkorkp9pn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
