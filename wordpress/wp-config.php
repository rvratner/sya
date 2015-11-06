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
define('DB_NAME', 'sya_wp');

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
define('AUTH_KEY',         'MX7LOH|1k%yLuO@x4T)JL:!+U%{+fhj+oemt^!9.f:v0n)yuG06q!/V%c(`C8Xk#');
define('SECURE_AUTH_KEY',  't]_eVPkbpm[am]npBc&39:(||.t3/GNXgl50Ym=e|-xX>J+$(A<U rlm=-~J-Yvx');
define('LOGGED_IN_KEY',    '3wt}WC,>34|[0KY`a0s+gt!j~[$|TN!._Y -|5-f_LrSJ_w]yQLi4Z$k3,!uQ}-~');
define('NONCE_KEY',        ';f- %=K-o|VrDb1{q:9NU8pQTSC|I&T/xm]L%E 0-QX| JHlZH=%jvB8PBMXg~F@');
define('AUTH_SALT',        'gnB897e$2j r,?oF5h%MPKY8-2A+1gfx~oM$H$J2}/#08yz_A=QkP%-IBqS8P|h+');
define('SECURE_AUTH_SALT', 'fT:W-:L9,oH+/*Tx0w5N01 /q$>~@A/|Is<s6xB5MAxA[r2^(m^g0LK8U0QMS@d?');
define('LOGGED_IN_SALT',   'OrnWoGH|dI5^A,ynQfPl3GHB)8y-cuSs7X9/?9atUB9j5iWKM-a9^4YmZOX@-u9T');
define('NONCE_SALT',       'j2md)[YQBZp1Ebz+?U#4TF`~>OQ=W8c/druB5+&8+-nVK2>1?|2X<83j) Gv@Ow#');

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
define('SCRIPT_DEBUG', true);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
