<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
//define('DB_NAME', 'cafetabo_data');

/** MySQL database username */
//define('DB_USER', 'cafetabo_user');

/** MySQL database password */
//define('DB_PASSWORD', 'cafetabo_pass');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'bqrwbcssdyr9gdca1v5slcbwlr7pah7oora5gb9kzitudwx8aqxvuyued5xjlatt');
define('SECURE_AUTH_KEY',  'cvi5rjcrmogntxtjkh500mjlhpe2t2wkhxrxt95kbizbnxvshzbv2b668gbl52vk');
define('LOGGED_IN_KEY',    'g5bteyawhplbkuydno2tefsamgowzup1eccgtfori9r2lldwimr0wethbkwakqcb');
define('NONCE_KEY',        'txjolftazpxakk9kmpytmqn9rcusy7ob7arvp65oojfvhnq1tkmapdjoujdk3asv');
define('AUTH_SALT',        '8dgm3juox5aglimyncmiqzypbqs0ehy4cpwsca9o1qygrzjkqkqnnq55zfg3lzls');
define('SECURE_AUTH_SALT', 's37dobe9hqfkrihtsmiuubnyaduuhuhb2tv0cafflse7txrmrj8mxus3kw6r38mn');
define('LOGGED_IN_SALT',   'wrsvwpjjgklomwhdi1wzxrvsbauk5fnpir8gyydjghia3wd420soad9gihjdwde8');
define('NONCE_SALT',       'xpnqoxqmxdgfkdrmxm3pihwy8zkrmd4o4suxgiqwbwwyifbr2frgwsypymjjyqh5');

define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', '0lRWtvUuFa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
