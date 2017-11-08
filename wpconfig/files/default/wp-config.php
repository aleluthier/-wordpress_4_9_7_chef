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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'esdras');

/** MySQL database password */
define('DB_PASSWORD', '290792aa');

/** MySQL hostname */
define('DB_HOST', 'wordpress.ctqymgyuuhlq.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'L*B)DZyx4%{K*xQ^r5{Mp8FZNU0UQIm}:OwDpU#!%~{S$C;GWZ?&PZ_$|Sh-% } ');
define('SECURE_AUTH_KEY',  ' @^qcFE&6FE<OA}ubcZp$`gIYz,b3T&!&Z nRC+i#B:R1xt.Gk*FP,CI}]W&[}[w');
define('LOGGED_IN_KEY',    '4!x9|>H(f!i]h|-25LmT]ruEEuL-bp;%H|2QEqJ23!O4K~??%M$Pw`nPIy>s%aM0');
define('NONCE_KEY',        'm){I/0S^DhI,]4RFRC`g,x^QbBKDs*SanuMiAB)AOV*_qz`T/o|Kw0xOG2HZWdR9');
define('AUTH_SALT',        'Or[dnNJ~#*&v?.yZKrm{A.w2JOU)Hey{@wx5/^`x7M5nvF(9?t|^do,*]^5g>-[@');
define('SECURE_AUTH_SALT', 'n$KwT[(+0;XdWxa)*+4_ZvTQmyBJn85{|nka8v-;>+#SZKLsg8,I/>=K<e<_?8jP');
define('LOGGED_IN_SALT',   '^r&jjlIHi9#Kf[gR 0SG8 |7f4D+?6RtXWLG-F3Ms;U<9:~[cKJ` Q+t#7z|w,0y');
define('NONCE_SALT',       '2GG8h}7m6|-:R^Oe%A/SWZFWA/El/lYP.k:7Vp|:/%/d]rSDw(g 4_4FmO[2S1)1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptestauto_';

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
