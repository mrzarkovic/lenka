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
define('DB_NAME', 'lenka');

/** MySQL database username */
define('DB_USER', 'lenkauser');

/** MySQL database password */
define('DB_PASSWORD', 'lenkapass');

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
define('AUTH_KEY',         '|db&d-R}/2Gi g,m!mK.ORJP rVQrwZ`Lc.T_n.{)[R@}tPilONN(:OOHBqX{9K^');
define('SECURE_AUTH_KEY',  '^k%w|p=~q?Mi Z#6e*M,w#e/u=`A2[!{,EWg+%!/EFVR6+m:{gmc=OZ^T5qGN0g5');
define('LOGGED_IN_KEY',    '5v3?[L%IvSU:,5ai4}H+{| 2!#4oR2uOYpiV*hY*0-hQU/)w+F#!Xw7+&a%gdA f');
define('NONCE_KEY',        'Tw!+em58LQqRZhV!*(h]xfNR>qQCkdh-A,&7_BQ2m,?5clmM|??*}V_*<<5~88J>');
define('AUTH_SALT',        '+i-7Q>knz`iQrqQ.4O~q7f:<Ytw{iK[d)#@S^5Kgme@xY]mPAE0iyN2IKa3d-4f!');
define('SECURE_AUTH_SALT', '3E00fUVrAA_pbk+K=NuT-F]>+-/6CooRdhydds=py}f6q.Nghg94w]NHH-t3he2L');
define('LOGGED_IN_SALT',   'YVMD146$gSaxcUA(`7v=2O1r?+ub_j0&[Ug8,RC0gQ+H:QVgq>.Js=Z>k]N>;rXy');
define('NONCE_SALT',       '[Gi;T^{Vt[KG w1=$D|ucbksEK)^-vTOO+%_8*ikoK-WZ-~|+0H-0:d|~D<#ch&i');

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
