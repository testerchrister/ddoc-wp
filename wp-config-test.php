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
define('DB_PASSWORD', 'NoPwd!');

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
define('AUTH_KEY',         '{{lUoX#pBxUHoOXKp/if=I2DW41l+8Gxuw4O`pVb|_Uq[q4|)LE_J~e7qCt#v1pC');
define('SECURE_AUTH_KEY',  '(>A8>s|xbaY&Sk)DZmCG&H<.ago*P?Uo+i`oPg|:;!$eO}AlQ^E$HRsBk xNE^P:');
define('LOGGED_IN_KEY',    'RqPt~~3!}9N/<E,!m|SH%Y*EAn*9@oG]TCN{Ln3 k>uDJlj8G12@Ld@gJ8PbI=9%');
define('NONCE_KEY',        'lJKa_^J rd,5nJhM0Zb3;(A{u$EI,#tj[UR}fQ:Crj}=XA*[PR~z/0MV^RGK>E,J');
define('AUTH_SALT',        '_>esaz,wW9yBB]~Uw9~dRa@ft1C`}b!#9w!J.& )GSvD~Km2F~7<PZ24CW9;V=xQ');
define('SECURE_AUTH_SALT', '9`BegQXoyu[#gnk6=CA?xNlG5Sk2/H-H4UxMo]pm^qSa{hZNT{&m$-6N^JNHU@e>');
define('LOGGED_IN_SALT',   '_(5AcX#nZ:D/iy/L%tF;Fx<JgSFO]7/iX%HB-;[{znEK0sNiFj(*yd~auH<K._jO');
define('NONCE_SALT',       ']RP+pwifhw~$rmN^JkO+u/(5>2-8Zz_:,N}uBj|&f[7LX>>IuJX&<FpQ9|`#p)Ss');

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
