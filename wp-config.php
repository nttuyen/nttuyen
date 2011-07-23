<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'nttuyen_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'gwc 91HZMm.xq.a6Bg3Iu8(o]h$%1ww6Ym$.91^nkM,Ol]uh.9 %Ys7c5Cv<R>bb');
define('SECURE_AUTH_KEY',  '>^I+5Pi+usY#kAf3E$y-nbl h|l&_%L:jSdX6hO|Wwax<8wS4}}U-+!AEYAZ+?>-');
define('LOGGED_IN_KEY',    '++AE[y<=N^N^&)>RVk:)+vF=tj*Njp+~mI_mM9uVHoJ6(7.yGsPn5IeVp6h*vuS&');
define('NONCE_KEY',        '4C~TK:2.^22u7@pFhe;~ge{WclA%Xl<bU.;+O?CM>VfqvR CeDF0nZ1csz!cK<`7');
define('AUTH_SALT',        'c`B .,B;ID+#GxT=8<ADO<pi/-*}9tgQ<Eskzl:mOKXxgG(09<>z8Uz.1yc>m*-:');
define('SECURE_AUTH_SALT', '+{{X;k2#Pv9<*zMMgaT ^N`9ou+!WPJAUn7:YRhgi{1-oNfvNN?Kp =x(k`knlYU');
define('LOGGED_IN_SALT',   'ml[NTDc-QRn&%SlvS$~hrXGsMKn> 8)naPMlX#{:JGZ-E|/LJqBrWu8`.8=Ld]56');
define('NONCE_SALT',       't,atu/Hhy_E6=UQWZW}=m?p1YX;zw*<>s&195=M$A}&|gNvi<ei~9O!w4^$._Z31');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
