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
define('DB_NAME', 'captain');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'j>/-=8dt4z^8$BbgE{DTe6;oWWp5 {9Gff3Nn|.c_Io.ExFiBe{EZE.Dpw+v?(K}');
define('SECURE_AUTH_KEY',  ',@I}Y`#V4+Bn;dD},^Gq)1g_PsRWa3h3-C@J:5|c;|bps)sz-=6xUI!B9#w.mp1r');
define('LOGGED_IN_KEY',    '#+k2*AE]}~qUMoZ5AlbuT=Y*K|gQ(NWPh2ay3^q6FY&XsYI`aGs!=0R@zMQ4Yvq7');
define('NONCE_KEY',        '{N&$W]BMMmyRWQN$9clbY{e-CW8M{huCWG~5IncZad=b(2fs<dix9*D^b*@A;>Sq');
define('AUTH_SALT',        'W( EKv./s$*h+RvqDUAR #Y&Ivgc5t0.Mnt;dm8)[8[q!e^pm@yE27+T_OmZlIN~');
define('SECURE_AUTH_SALT', '16_:P?1?glq$(5 $p9Q 9 %IG.Gs|rn`XS6}n]uU+]{B<kV?O>b]!^0Oowv)w#ur');
define('LOGGED_IN_SALT',   '^MnaFMQSv4+?mvPoOznx$}zHr Hp_.6q>/>o5c|6guC]Tu`?,(^RNuUvt<5nWx`s');
define('NONCE_SALT',       'mhN@.utgLn>C[y3GhsN<RAMI2(+F^1%P/oxL`%Sdz+u>Sr4P(l3d^`o3~9j5[%TP');

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
