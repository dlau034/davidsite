<?php
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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'davidsite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'uqvZ*|IkjIL>mi_A#*?mXIMc>O+cU)9k|NQ]^5xQXC:Z|:80z|$~J27xI$9}X7SK');
define('SECURE_AUTH_KEY',  '-f$;i.d*-1*d-;Ys*+VB.} 0fMbZsd8(|Jn+2U+Z,>U8M(=qurk7fo5KNo?DHH>J');
define('LOGGED_IN_KEY',    'JUax5+K,:+>hl=7S~:3k:HzsZ;c[+Z`43AF+-+Ij,7B0i{&vw#}[!+sxC)$op}4*');
define('NONCE_KEY',        '-aGrF4/`MW$s{V<.tMNAB L|5$+_+;D-AhrAQuU?_@}S}Ne#DU(O|+ahm@!!q2Wy');
define('AUTH_SALT',        'yK*6&iAE!:^;=2mKbSJBqr<?L:>nX<?0*YFF,ckp~_sAk$|?^6La0E:4Y+ruT_NL');
define('SECURE_AUTH_SALT', '2Nnh(=CgHGR1[?)YUAQ|_+YW!r:dcEKs4i?|>l#h_-Sndm0:EG%9Q_X6F*a!f%=J');
define('LOGGED_IN_SALT',   'A$Z$/l@7(?W((P1sT|7(G8&&Zkgwr~%0e/15+WDP~]QWpp3D xP6v4XZNk7v%^,l');
define('NONCE_SALT',       'z::z]|raJCH:JOBcI$.{/u&|PCe=GDmnZb+Yy}X8tF-;W(bw2WM|eyB+)S{g3Cx#');

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
