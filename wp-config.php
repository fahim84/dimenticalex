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
define('DB_NAME', 'k5m8h1g2_dimenticalex');

/** MySQL database username */
define('DB_USER', 'k5m8h1g2_dimenti');

/** MySQL database password */
define('DB_PASSWORD', 'Dimenticalex123');

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
define('AUTH_KEY',         '_g.S?ZOH9pib*GVQKxU`@>7=},v4Ln{=NZ{6@,X}FCwp(o|lLL*>n2HIrx1eH%cY');
define('SECURE_AUTH_KEY',  '_A44YaTM)uy4)_Kfu_db(pr]#JZ}Mhx&1_;yqv^O9gsV7i,fNiR^14S7uO)q7uA,');
define('LOGGED_IN_KEY',    '5i9K@?Vc7QW0U@Wpd)3B+xnYjqz7WZ@x4,>-IXwpE9iL G`fx5Z-/L3r[(9;>~(&');
define('NONCE_KEY',        'y.!vgSUZOm-wanyNs%06wQe(j,yzXVp6P(kc]n T}<4:SFp]Q*^[20gja$`B8(|x');
define('AUTH_SALT',        ']E[/2:,[TyR!p2<@c]@1nxe?(u{?wnFaa&7z}4pH>t6R-!EXWs2Aa%B=z<I bFZ%');
define('SECURE_AUTH_SALT', 'adjdwq#w{R_wHN_DI(9]!.AmM)S1SQoHW/A$c,7Lg%Yg#aq.mhxjCWOC=mMS( G~');
define('LOGGED_IN_SALT',   'Z Dwy7O{w$rrZpE`ab~)Tn4G%4f=|_@J}!i{H_}d<SxQxI0.l}W&18V}`M3m?*-n');
define('NONCE_SALT',       'X#by2DN>WGI`aD+g!w9wMFMAp;f=j&`XL.vu*{a?DvvpU|#_`^Xk>{!| >)0TQ(<');

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
