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
define('DB_NAME', 'wp-1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '+l]cFdDh)]4x+9?nJ,Rr]8RLNl^nW}zr@:#)y|2SOtoi=a~;@7:X9<(^Fshd][-U');
define('SECURE_AUTH_KEY',  ')TTQpCm0J%RzR$[GE5 d.;+ikwn(:$L%oXkKz%xozO6O><xR-&:&1-i3#fNNS;K_');
define('LOGGED_IN_KEY',    '#GUqw8/JG^,DE O@)gSkg*1?cNVX.21WJhbxEf,R3Pi3e=[VSxP-`3Z^S2`FLCPO');
define('NONCE_KEY',        '>,]b?lO&DEZM}`}%b%:<anY6+d+J_7uSbm}$`.Mghi5bD]/dxA/9 (I.|?Qs|Yui');
define('AUTH_SALT',        'gY3guPyC)+@3/d wf,u-|337qjaWMb!pu_t+fqV@6T3]xCOGB;KtSApA.+-~L|J>');
define('SECURE_AUTH_SALT', 'iX.LhMiu.=4`-pJMfyrZ}k(F0$RFopjBYMjukO?3hKRyGB}F33Xh}B):O4ZZjm<g');
define('LOGGED_IN_SALT',   'ye9PPz_`9^+t+w}JmsO;/lH%x]J<~,0 MWN!+/2ZM/z[Y:$*rN6Gq~2VjT~{e|B`');
define('NONCE_SALT',       '5SS6}B!Pa.w)?sQK]^W<IB1K fo,7*FZGH%?_nw.Lb5lU4.-!k-y%Wt ;!r}CRRh');

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
