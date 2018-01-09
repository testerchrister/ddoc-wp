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
define('DB_NAME', 'ddoc_wp');

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
define('AUTH_KEY',         'vIvl(K=Nw2[FAF^V=##UgsQ+/ZNSvv6RN[%H**e]O~|<*X9Z;1>qa$dQRaai=:[t');
define('SECURE_AUTH_KEY',  'C@{@}6&r0:{,;f0Pz4sX9Am.cwdM(_AG[pE)L5)6kzju=>q3j:ZmKB40=+nPx#zg');
define('LOGGED_IN_KEY',    '|{EX]dH1$|sDw;p#LPv3ic;cCs$J{;x`cVNgx6/CU9nls@$w[/l|V)+To|Z(AP.,');
define('NONCE_KEY',        'hTv1adt@%p]pYJv=W%,b%[R3,+PmnusU|RyOuwv$t;*vE#=&=AsIGYGTh6-R/m.9');
define('AUTH_SALT',        't{JnFe>Yv_ R2P[HbOL`t#((uXGha]cQTF6t-3bc4eCy1gh>92iI>2m.>^/rTubv');
define('SECURE_AUTH_SALT', 'yH*+jTbI|LO,hC}EJzzobC&4sr.qFd%GnU0]Bmd A]m%b>jjL^H/[S,x28 STf#C');
define('LOGGED_IN_SALT',   'F>VM-^IpfJxWyu0dCw c=B@8PN5)N1p?:66Vcxee]!V[i,C0wr-2zz<mqn>%~C)I');
define('NONCE_SALT',       '<JA]2_^g_Z_$h1l6d6Cj}V),F?i^34|`yKk%P:5fJBQiWbVFH6BZ{nT4HD1 BY@r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ddoc_';

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
