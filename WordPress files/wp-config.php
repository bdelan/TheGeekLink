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
define('DB_NAME', 'u291756600_mandt');

/** MySQL database username */
define('DB_USER', 'u291756600_admin');

/** MySQL database password */
define('DB_PASSWORD', 'sonataa88');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.mx');

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
define('AUTH_KEY',         '^+w,EAX]AI~,11zbL<.r}8n1QQToJP]MGx|>#<oAp`Q09S?NK9EJELL :&dRDel)');
define('SECURE_AUTH_KEY',  '=Kv?:/=O5g+rH `j&2F1_|;iAm|;5,Z)+*tGl8yy?C[!ftrza6,|zi6E!sX^phFM');
define('LOGGED_IN_KEY',    '-IX?KNi0zzOLP2m:v/&UjGV?TMk55:%c,BTNzP=Ktb{QP6L-R^`f;swZeHaqUBwT');
define('NONCE_KEY',        'p|fFO3#E3EdH3s,[_Rx:cd|A`l;+{p(qZo/a8_PHjJXXXJFq>ORYEcEZcmHfN$Q`');
define('AUTH_SALT',        'EL|S)=%Y;yz$K>OBEUVD[Jvu+FCn*{4|3s.u5RL(?1FFpSAa(sU(qQb.LW8bEq)f');
define('SECURE_AUTH_SALT', '-b]9>w)1m1Xo+i?L^|RkZp!^`i3n+]0C+*i,8$3/9/>MDt~-LF#w!g3Xj*EzQ4i{');
define('LOGGED_IN_SALT',   ' TqgyZmWqId mmL,WO5%40@dkL5mwGy,GqQje*)Y*asQbE_[il~Su=9uxSTPt@yq');
define('NONCE_SALT',       'e}mRg]IGTh6/ArPD?b +fKJVwv+`LoI76eTho9W,2Bf2`bcejPo5hFC-(!g-`Rig');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_admin';

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
