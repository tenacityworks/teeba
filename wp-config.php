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
define('DB_NAME', 'teeba_dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '352478');

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
define('AUTH_KEY',         'X1qTfvl2IHS0l-D-2<FY{)(VziaZcY$%H/mMn *]G{}tK6SCTmGr;rB-6yF30M!=');
define('SECURE_AUTH_KEY',  'Ur+*8;.`sp,(_?~fmhhCRbE;l-a+5I>8U}WUsuC#$*3m|4eUNMHajkn?bXTKO5(2');
define('LOGGED_IN_KEY',    '0@AH%V@BtI1oXv/yZ?M:*Ba<V{)n]b5k0[(P_UD!RXT@jZ+5J|6FL{vaq`Wre([g');
define('NONCE_KEY',        'OvP7a}$* lMRH|$bMnccLl0WC1)=IsCyi4{J/9kz*!Y[R?zsGY&[TOpe^pkKY_0q');
define('AUTH_SALT',        'Ry5_NpS&?J}X+)AZKH5DE&LdSXL3SG=z Z)H_R]eMA@J1 u|MoUaH9D}LVE8m}Q<');
define('SECURE_AUTH_SALT', 'pB:klE/)*}`xxIA))){Y`bP<Zg4tNU47$s`9UL~2?#D*RS(C7KOB%`/$dfTqWu$G');
define('LOGGED_IN_SALT',   'e5!Dc;gbk_aUZeD*Krwnii>QKT_`-Og;e6{ vIBGQpW3VCx2KMFn@WoKEonVdxKF');
define('NONCE_SALT',       '6{A[G,*>8Q0B^rK= @c1s/U/!34(EZoO?ne1w01~=*,k!,R@DUkrC5~*HJNngL J');

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
