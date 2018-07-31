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
define('DB_NAME', 'wisesolu_test');

/** MySQL database username */
define('DB_USER', 'wisesolu_test');

/** MySQL database password */
define('DB_PASSWORD', 'a7bbae4z');

/** MySQL hostname */
define('DB_HOST', 'wisesolu.mysql.tools');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '2rw)@RSdeng2KC9up)J)^Wh^63Jfn#2C!ZR&K9Q!uKfT6PQyOl9E71kqqshO8w8!');
define('SECURE_AUTH_KEY',  'PIwtXW^5zfh1Ytut^gkOfwL6EyhifRPzAtRfqB2HAIdHtGJP(nH90Df4@bFT6oR1');
define('LOGGED_IN_KEY',    'mG0Z0)OuJeaiC893mo&m@qIJh1S7Ds6mfVqROAbWq2l193M59!8Tv*sWs1#ZnrnZ');
define('NONCE_KEY',        'w%a!8w*B%*B@yeR17G0opPG&)#@HZ&nco*v)JOquR98bul7AD(lvt#on8%0Da0*D');
define('AUTH_SALT',        'puTKjY!OklHmytc2MUYi26TApFf1oSM!8AWerTGn4*TzVz#bey&&VrjOIxuv7rg!');
define('SECURE_AUTH_SALT', 'ckKn4kxW0js(%fLSJ#Eeh3H3vWK)bw%Cfm#pkdOKH2dyBD7L8tz8GXzz0POLD5wd');
define('LOGGED_IN_SALT',   '&QqJER^j&Ob4bt4TgbAFfP9YsTJ!(7Cem1whvlNA812At64Wy8E7UnfIGLqWkm&o');
define('NONCE_SALT',       '@Gjg5@yuTzIScWCYE*y4QBM#bsA54ev8izu6zI@jzry&fuADZYrKp3wY8B*6mWCh');
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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
