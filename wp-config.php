<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'martor65_wp314' );

/** Database username */
define( 'DB_USER', 'martor65_wp314' );

/** Database password */
define( 'DB_PASSWORD', '73SC(Vz]2p' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jmbcojbijvo66py65s1l9f5eofqwu9sifbzmwnhcigtqoptpbgltab1woqk1oeys' );
define( 'SECURE_AUTH_KEY',  'xbs4j6qx6rew3ykxnqfxaouv8nmukqhxxbntmtxfjwjnra3ulgjxzc16irliznrv' );
define( 'LOGGED_IN_KEY',    'dsx4ok0q39vzfpzcnumcdfaqxiaims9atlboq8gplgotalhnzp4rzxqgtndln2cw' );
define( 'NONCE_KEY',        'bvfbjdcbaqbep3uj2gzdrbvaleiuxc1vu16igl8ecnnrig21emjriv75g7kn2apq' );
define( 'AUTH_SALT',        '2zuek4no3i0wsb1vkndzbejj6orp7w2ih4nurbvgnzbfqlxvtmqbimka1suoyq6z' );
define( 'SECURE_AUTH_SALT', 's10ty3gmzp9kpec4ncj0srwwybalfn1iueoj6mwz3o1tdsesgnk9k1nopg9rbvor' );
define( 'LOGGED_IN_SALT',   'uyvhbahpob3ed7yv2qi1acjypcfh0mkc8imj3mpm5uaaao8dntyk6z7tnhpsslmn' );
define( 'NONCE_SALT',       'irecqlhkbawipkiphyo925sh3gf6d1ydqeeonmuwkad5w49paf80c86w6spzycgk' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpat_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
