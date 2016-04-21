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

define('WP_REDIS_HOST', 'wordpress.qfx2bm.0001.euw1.cache.amazonaws.com');
define('WP_HOME','http://wordpress-2074556898.eu-west-1.elb.amazonaws.com');
define('WP_SITEURL','http://wordpress-2074556898.eu-west-1.elb.amazonaws.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.cv7qdvmkopnv.eu-west-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         '+R#IJp0kAzV hqz!:&ct{TplZP{gLQQO.j7}VIL)lHbtK|/p${P9rQ`rp95Qw3`[');
define('SECURE_AUTH_KEY',  'N#/O!@?8dG91Ek.d6</+H(2+<wkjT4@,|FIN7{SIn*0zqg@5q+U3 ;C}Du~jN7e1');
define('LOGGED_IN_KEY',    'R4_BH.9)`eV=)_-J>qRGK]lB+c]-`?tr;s),6i3>3*HRiFP4t6zoA>;bXeYlZ>MX');
define('NONCE_KEY',        'UlJ6G;Nj/khRzhbf/OX.SNB+P{H+u]9B%i?Z?ySl&B5@wd7?r!_r(=#A<<Cc93*^');
define('AUTH_SALT',        '+|UE<-6c23k^ys|dU:NjhwqkUN;GpgNUy|zW>F6b|YH)Bvr[J]Y+Ut+SRrds/$d_');
define('SECURE_AUTH_SALT', 'dSlI6xFtO(l;+&__+x?;lDo)v32+rE<]b)xa#*!##T-@)9B}x(+amy4+9uK~2+8`');
define('LOGGED_IN_SALT',   's;mrgx=<Y.BassANvb$fhb>5net.*3I&q!QtrV|Xhpf$UCNe{{[y},cBx^[my?L`');
define('NONCE_SALT',       '||+</$D3@{>|Z9[Ls@p@=1<Ob-1Z>xey+Un&9rX1l_f~o!+1<>!6_nIVoEZ{d]Au');

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
