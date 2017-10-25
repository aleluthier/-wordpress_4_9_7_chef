?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'wp-redis.52irks.0001.use1.cache.amazonaws.com');
 
define('WP_HOME','dinuieeyd2ex5.cloudfront.net');
define('WP_SITEURL','dinuieeyd2ex5.cloudfront.net');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         'lZH8]WaOq%NSTqsT/,~|Z)0J5zrfoblkDdGq.P01-S6Le},#, j|- O?K{@]{HZ)');
define('SECURE_AUTH_KEY',  'b+%t1 9*UF}+K>+=IS{X;>.TW+SErt^(<c=(ox/?Ic]]tCwy58{vu`@x3>oNG}Iv');
define('LOGGED_IN_KEY',    'I.zp k{o6twJ{p6se+~1e{G|v2p(cOb8~&#g,J,tk)-{U8S,$/S-w.Ix@6QaVI+4');
define('NONCE_KEY',        '`nn0sJE@(>XF!q*Lh1ofz*p?y7Nd/9&?C@?{uAP1z}6,y{S_S3AT/HXIa>lh`5Kj');
define('AUTH_SALT',        'wI{+:iz@hP/XjtX$[az(E^Gr.hx1m)-irUBGY]+:#2Y8?1+A72bXtU3rhGD=GBEM');
define('SECURE_AUTH_SALT', 'FDn<>Aboox`bmsOjAfS|XMGdlAL^^-{c`f^#y6;uLH,-8%r~ORT`znjGYd&+X(F}');
define('LOGGED_IN_SALT',   '!V6S8mil$z+aRB/@SyUykgf>NDJ`}iXFW%`-!yfzkL+C<-`-Ip-v:fg-j}<<=u-$');
define('NONCE_SALT',       '55(tzE-0SzQDYMYx=x)::{MS^pP_|-xqW1,||d:*MZTs._5b<j<!d)u?5-TfkVP>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
