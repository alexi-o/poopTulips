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
define('AUTH_KEY',         'B)*V=Ylf#1FZk YG:E%?y9O4[,+G`JgG42!Dx*1(1~a5Bp;}&EU8j/lLu!asi4i8');
define('SECURE_AUTH_KEY',  'b57N(L3ak~k0cNV-Yp#;V0A3LI|Z=3]#]X}*sRD>ibz esgR}nnc%d`f<f<.DxfN');
define('LOGGED_IN_KEY',    'C/Z>_042_*`#K52p];+E+p+2z&ZZV(6}Z>3B%y`3g}G+emiv&~TX.AtAY^mh7@Oh');
define('NONCE_KEY',        'u41TD&K`rN;xOd/Il!Ml$Ju$TC&a@.!y(Exq*tLZE;q6kXhRooS4d0[@O>mVn=&:');
define('AUTH_SALT',        '$MVL-,Itkyk79A(6!>)[t8nN[51JXTc@}a|[/uVdZm};vDtEcxD%T;nzYECA=/Ew');
define('SECURE_AUTH_SALT', 'R<*PeD| 1:p82E(ZXcbX_$p%K5R~bL1wx)@,~/e(siQ/4k,@(rd7kU[+}h1+tOuG');
define('LOGGED_IN_SALT',   'koWCNTHFUsk,xexMmFLtjNqJ{CbOhJgjR{PWJb,0{TQ(esI)~H4iLOyD EQbhDD.');
define('NONCE_SALT',       '8.fHo&ix1HJ/[/N3Ng6LfE]*/6qWw6]2We/,/60v^7k1E^]@1Xv|TE1G.hRb4.)V');

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
