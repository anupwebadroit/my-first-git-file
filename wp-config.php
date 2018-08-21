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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'torr');

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
define('AUTH_KEY',         'A&LSr+o@JxN6udn!sg<0EDYV]tvB:Oq|&Hoj/fA*~R{BNf&l~7EyhVz:Xm+t&ivD');
define('SECURE_AUTH_KEY',  '!wCBH$;[~lDwmPxW>:UW=@Dfbu^{v)JFY_3eXD8JSRS ?GCg-!]y*Y7.98zEW?V:');
define('LOGGED_IN_KEY',    '}HWWh)zgVUd&}56$D~ov@u#IfyBS_Rwn2SWpa#`x*}ac#Slc1KD)Pg@ur,5#H0?U');
define('NONCE_KEY',        '.}>FY 4r(gKx>hg(%G[zd9V9dcuwvn8gXt+$;[8Xxup;C%a<YG,t {84Cz=Z/Fgn');
define('AUTH_SALT',        '@I$_|1Ohfhkr7K0-.AS`a (Wr0`u)%{qL]g,PGk^k5.L:O#<S9$Cr?Y-!#ImdpbG');
define('SECURE_AUTH_SALT', 'pFOBaG(9F(R+{n6SjA^&7jrTTUN/A).%` 9Eb)8*?oM./R&KHCNcx-ZRA]rc27E;');
define('LOGGED_IN_SALT',   '@<}f^?nl]Nliw-n8*9G &;sQ!$TBfB2B*~Xv4=Fe,u[KF%0XbFwf)p)TQngeSBI|');
define('NONCE_SALT',       '+6C[-A0=bKOjx34Q)7T|GN`Fuk8CbBN[76pZXvbPyVINjkGEY6@1@yDAzyq X)AV');

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
