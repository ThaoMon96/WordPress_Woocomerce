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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'xd(JFy6q6i=>RqS5A!:,-LT7b_I5jxbEB<R+_75tf.Pd)G;~{^4+o@@#pvK%`#;I');
define('SECURE_AUTH_KEY',  '&0#kV~/$i+lQ*EM~N:bEeJ~PJ,uv^TiCX]x <HL`4n:-0|+j[}`Qzj%3.!6yj`1=');
define('LOGGED_IN_KEY',    '^&MoWtMM`4<tvLwCap=Vuv`>4R,0Oqv4nVZFn#d_hvg8mO>n/Rmm9EzUy9jcR)=Q');
define('NONCE_KEY',        '[i]Ytsv@jh;pc!7=e+G|KF/{G<ty#/K-i]+=&#xAt?@{k{+lv^!AAU|;X83oP>n?');
define('AUTH_SALT',        'HB}M8#T[`?c92wW#GHf?2-_Mg#1UO<{T>323p!8u7grcLM]%;$#mNJSc;Cm9J2Rj');
define('SECURE_AUTH_SALT', 'D*XQ}2 JVc0nEe;b4~<+g8k4Y-G/M~-0J2a`Z0w&;5yLBjVYPqB0Wc[N3_~8DLw6');
define('LOGGED_IN_SALT',   ';rr3$y3z6fau-VLwOB#C|Weu XfR#6t?}&+6m lOc%wNmza?6w@0-~7Ik{|8s=5)');
define('NONCE_SALT',       '9O2OVp^+#||v6:H9pnf@w2sT_?!C&UWKJ9-/3+[1X^4xKWbJ=Xl@]eI3W*mZ0T;h');

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
