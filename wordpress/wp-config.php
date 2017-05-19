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
define('DB_NAME', 'poopTulip');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ',j>*6CmW-O}dSECeUThw~iZD,_10NHfvIvU+=$:i~OKdC)f6T+O*<-c]/dADCCT?');
define('SECURE_AUTH_KEY',  'VOoi18MxMgT=M<H&1jiHmY5U_<]SC[zbo:WUqgV(;)h[wakG?qa9!Mc;&(%D(Oie');
define('LOGGED_IN_KEY',    'VH&{nt_x{U},kYZ/hGX(Qs}$tZu;upyTwdwl59`gF4e5TQ(>8_E{ee-Ee0g@laYj');
define('NONCE_KEY',        'vMuc`FsJ$,?PPSoEfF6DgDApA0.0f$H/J0>S$5|;}/<qBuH H+x})8~aZb*]/v$}');
define('AUTH_SALT',        'xE*803X,yVZj4&*%jBRHO:)Vm%gFL9/~f_ U`dp;gG;VDQhNVBeCn*f]D`{4!Jrh');
define('SECURE_AUTH_SALT', '9za`UEKr#ES&b#KRSnI `I]35sT dl[~jeY9:xE0U.nVhV}_ze|,)L9vp.u$G}l#');
define('LOGGED_IN_SALT',   '(Sngkkji]{zQZFLd_8BkGn%N!8-^smSBl_?jkZvzV<D!t/M[jgE%)0&r_TSaf4<C');
define('NONCE_SALT',       'ZI|m!CDyBE{[SZzFO~]Ly2g8&QAwU9uY$L)MM[#84<3&>C-`*#Oh44w)tFPINo2T');

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
