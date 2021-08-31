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
define( 'DB_NAME', 'u0960218_wp492' );

/** MySQL database username */
define( 'DB_USER', 'u0960218_wp492' );

/** MySQL database password */
define( 'DB_PASSWORD', 'K-1y4pbS5[' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iph6gtarublvjmsooffz60gzwesx4djtwzivnnsgeokmincayznakz0c8xvfqcqt' );
define( 'SECURE_AUTH_KEY',  'zv1nq26q1adb6f7bmqlftlhhnbqutx5nnrxcvqtyk5wnkvo6hbukxvievmnkymh4' );
define( 'LOGGED_IN_KEY',    '6twgw0dqzhuwcvywaiyez0arrfrlclgb7tck4hl8bbeckl7fwetdpqt22c41trx2' );
define( 'NONCE_KEY',        'fj10wyyod5r7wszcz4lkcd5pfflu9ouar2vct1oppjcno4dxcjuuwwstvr1mz5vu' );
define( 'AUTH_SALT',        'zcxaklblbmzwhc3p7nvaux2wxmgslyyfloqywcmnlquq1snevoqlcpjeaspiauuj' );
define( 'SECURE_AUTH_SALT', 'os68bjmmryhny4y9kzzyfte6gnjfitongiuvutxenc0lcbbsybtokmanfl387tbt' );
define( 'LOGGED_IN_SALT',   'zhzruj9ptqnp3yqlnz4yanfdzouggkuix6xzznzsd5g2o8smmv85ksuidh3mgkyu' );
define( 'NONCE_SALT',       'qkcu5x4xi6ltjdf4gip3vaovflwjdx5kz0vmsraym29tnmgcje38vzzpa99cfkog' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptx_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
