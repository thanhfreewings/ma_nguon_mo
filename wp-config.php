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
define('DB_NAME', 'mnm');

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
define('AUTH_KEY',         'Dgftlv8{g;c[FI@}}eluar&@_1EMrPcSV6BvL3LA8nJ]Y`t~;DmnbZTyA6tEyIK ');
define('SECURE_AUTH_KEY',  '{^_Oph>A)Ae;G_t{rc_zgIFd,&aTyu9-J;gd#Ksg5z.Y^O=TLE%F/LX;wb3NvUN0');
define('LOGGED_IN_KEY',    '`e;5rj~8EisX&/{2X.]`:&OQ$]~kUQ* G|Y+6E@P=0sh[up4n(Kj!Kx([jT-UIj<');
define('NONCE_KEY',        ';Gg~(~Pe$|pGTocx] %#[~4R5ov65Jbp00^twJSH>-,Vq$^vmp{YqyRu98/yWI#V');
define('AUTH_SALT',        'iN},e&^T&+rpi[3-p7nVYeIZ.b@Q}?WyU |0R=NT=Gu67(!NNe{hbRWcNDslk|up');
define('SECURE_AUTH_SALT', 'w::f[BW#2Q[oM}i<41B,qotr^JlaXi}XC,kvq_34~WYj ;*I( (*z>)([yExLw>T');
define('LOGGED_IN_SALT',   'Zc4bV}#E^NIb^-|KK%.zh_c;.5a8B:RB09U1iqZ>9bnFg<cl#ggd}fMC;Pw4^mhN');
define('NONCE_SALT',       '#XDBA7)1X-NqLVK2FFl%XC&;opVGM)]^df|t B3B _o$KTI[sQT!svvh/Pd PJM|');

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
