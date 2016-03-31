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
define('DB_NAME', 'ubu_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'timekeeper2013');

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
define('AUTH_KEY',         'r +Ky_3;}o;)0%(UeDm6icfaBJ6B@6[de<W_H&Dgq<$<a`=%UzFzjRRBD6m9+m:j');
define('SECURE_AUTH_KEY',  '.gd9_A8:w7N>2h: =a;tJ90AAatTMVUxQD-jmi9h2)Qtm!AsL^K~ x?*e+LrPX`U');
define('LOGGED_IN_KEY',    'V`N)@5si7Zcr.EY@]u<5Hkj[uFS{!#ftPRR^MKhA :ee$PYsobFL:E|um[dO~6Sz');
define('NONCE_KEY',        'awd11Qg7)D~>~Y&n|qd{5hCWPYL%6b)i2%iw9~75H3)44[pKV<hwV_J(439?E-g,');
define('AUTH_SALT',        '}JVuNBzN S6.xx?y{fd!l/{IFaU]zK)`|%$`c2I09|/),ch|Vg/c14x^ZJnNxmV:');
define('SECURE_AUTH_SALT', 'ekGaUSt!/OS!<c17)HHN39dA$|~FAii&mg O2A4d)t$<8)Qw;Kkq`%U;I]3VxTyx');
define('LOGGED_IN_SALT',   'hDz:8C$lenOe ~rt-@?WiG6WuTu2mjP|A-kCS#A>:gJ>^e^ZRINQ}Z:ISxq2C-E*');
define('NONCE_SALT',       'w~!^}&iOdH*s6to^<MokV(m7L:|0OHNrevQguzPgM$r4<yPS$00R+| =@#75,cyP');

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

