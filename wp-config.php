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
define('DB_NAME', 'everesthack');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_1~tnZ^z3 0Dkc*<fTNb>7JZ]9Qw1SAH?prxLa#j,My&ZW^F`y!WH;fs!M01s2Gl');
define('SECURE_AUTH_KEY',  'm!><+]K~k}[PY0FtK},*tZS478uH]r]3~I.7CRyCEUyHjF!c-07[Z`_I62sL!-3A');
define('LOGGED_IN_KEY',    'TJ+dL @oCHm#iej]ZTg$IhpU^5{ d Yl.%-o<pM+_!9.d`Z!0o6J/W4%A0G2{3TH');
define('NONCE_KEY',        '4-Z>| 2-D_0`y=E_|gKU^l|]e-j,M.,q3clwaXQ+@8G+WBGK5KC&h?%?Rl<?Fcxu');
define('AUTH_SALT',        '{|Rtr?1AI9wg&6{jIQz^;0>2/g#?CI,!^cQJYSm1&m`@96!8l0(Bj5r%;tr]/>I1');
define('SECURE_AUTH_SALT', 'ZFf]Wu]fofVOuI,lA90WMh(p<=zCmr2L5g*P+F=#-RUl?`Pg;d)^:x4tY}jcAJTl');
define('LOGGED_IN_SALT',   'x&*io>I&Vz`[j0Z>H,%c8SRB-5,R7>|xc5LcHq@7qITO^j:H;{yWv-$_FGF0ga,W');
define('NONCE_SALT',       'If?RU1LTGk.isjUW|zqPhv^Ws3@%i6$;gR0u8U1hZD|j:*r/Y(,]J1 q?U7Zy(Hr');


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
