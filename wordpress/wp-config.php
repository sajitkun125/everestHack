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

define('FS_METHOD', 'direct');
define('DB_NAME', 'wp_wpscaling');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rock125god');

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
define('AUTH_KEY',         'Ul}8^}90L3otIZ~dDkvi*u?b(pa[(%I_<rJhLwDH-M[WsN;xv[apsj_)cL@1_-5J');
define('SECURE_AUTH_KEY',  '(^e,1RV lj$[Mchaq$sV0jVgA>6&L#(OmtU<OE&K5/]qjUHr@G7^o;|]s{o)%7 9');
define('LOGGED_IN_KEY',    '9@a_0G6Zr_k*zLf&#-J}dg?zfbb{T+]xW5PD1VYm~QHO?/+umoMu[iTFi*Kg(j}6');
define('NONCE_KEY',        'KRqfQ=$6I2#dtVKw[V)=|zcW3 T+B?<PKhwCHX6;!yln_5eP^1Yc?l8Qv4SCM AK');
define('AUTH_SALT',        'he)k:/u^5!1w{2nr&EZc!z*mc]:)iiEk_C)a[ _~Hsj<t@Au!B>qtUj{n5X^@MUi');
define('SECURE_AUTH_SALT', ':vR;Mf05.M_mmaWtGj!ad9QE]hSw9Q]7y~4[=Me_yf]* ~nNK}Q`,ZQVE-QAiU__');
define('LOGGED_IN_SALT',   'zQ$84ha8Q,a._&dv,P&tDU|IBZNtU]&x?^.5/v&dgY9/bJEIV^Va[7,a(2iGc/>I');
define('NONCE_SALT',       '(]E`*bz37PV&sOS/r-MD>F*V6]{Ll4Vn=n@z!#HXa?)y <P{Rx-`Bnel#NnjSf;^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_wpscaling_';

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

