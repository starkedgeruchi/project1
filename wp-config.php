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
define('DB_NAME', 'ahaapps-test');

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
define('AUTH_KEY',         '|brf)IF}bv<h^`ROG5~9Xyr>m33W/,U:z-Zt%8:N]F*=L]DtqAR%1{ OsZY5p:,e');
define('SECURE_AUTH_KEY',  'l9j/M#nIMaL8Ti8GW3e,AJ&Ty`>CZ5Z?{|;oi&MyRYdSAo/zB`7oj:,S${~>vZkT');
define('LOGGED_IN_KEY',    '[t=JUZSx2CCnL(D<AULRTL~fkjW4ACIXRQ(/A]YuPd6I$xmW1Ur ShW103We~g.^');
define('NONCE_KEY',        'OMTo3/ffSBB=uP+-pfPs:s<m7~Vw,mZ9jSH3S ryO$7^v^&O.@bw2q*7AMG`t}D ');
define('AUTH_SALT',        '^<[+E~lT[c]-aG}MX=rxeYl(#!m:aO<h^]C:+jl`].w/!x `5VOIX(fu<p-*=A?h');
define('SECURE_AUTH_SALT', 'ruK]sF <6vge~jghP/uR?#Ld!G:o5BT?SP^c*i2Er38>)DEb11M7L5r07qU(1`?R');
define('LOGGED_IN_SALT',   'JY;pDQ7-qQ(;RS)0T*T.jS[2CK;6rns8)iY2,-%Da>e}2X}QF;WuzPILC1@=P!K#');
define('NONCE_SALT',       'mOft^7~o{v2?fn B@uCDaAn6S>AnKwcrQl+C^MJ,T4Tv|f3vc{fdw:j4`~}xj%~t');

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
