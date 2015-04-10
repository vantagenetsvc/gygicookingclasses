<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gygi_cook');

/** MySQL database username */
define('DB_USER', 'gygi_cook');

/** MySQL database password */
define('DB_PASSWORD', 'gre45pwy');

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
define('AUTH_KEY',         's3fKR51^N;_it8?5+#X@(>(9-x1}+Nz+7N$Y7zezvO.(3*]p8{vKkzO4+I/yO!.s');
define('SECURE_AUTH_KEY',  'u+coHA:^9+QP97j?U/lp:NK+Abwju.kPC~P*qRe)0WPWgo#ms8G7>~YG`=gAXz$M');
define('LOGGED_IN_KEY',    'ro&{>-o5GTJcXnA6x@w^<2SeQWyo>C#40vIn*N7|.qG)|pt8Lz&oz|^=$.jcW`Hb');
define('NONCE_KEY',        'mpMgE7xw6$f|GX-mE|@ xo{d%f_bKU}1,%eJdeGF/}T)#J9;xBTUSc,/gnwCH|H9');
define('AUTH_SALT',        'bAX*k.,iiTk5Ldf-=6,n-/3,IT^+Heq4+7;VT8 +BE2/u&y ksx#uan=6@D{sBwU');
define('SECURE_AUTH_SALT', 'v]sD<HnFE>OsI[PhTDPgMl9QB3++*G@s2hTn9b^_=oSRbx3geI-B%buq0d$n=(4q');
define('LOGGED_IN_SALT',   'L$u}z(Ck-G5p,<~FWr&HlBh,aV>0/$.91>tv/W=kfus#m7#/`p`u8vfaZKMc-uLV');
define('NONCE_SALT',       'yUP/IizC>G>7E_Pd~>aB%&S!+}#/vKxu>a|UwkXkAT_9kgcgDe@0|N>PaKX8Mg-*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
