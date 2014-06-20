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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'hicee');

/** MySQL database password */
define('DB_PASSWORD', 'hicee114');

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
define('AUTH_KEY',         'B 2oB?nyImTg+?V=XmUsYPHb1C7A+yIa|(?%Ix<Q,-V,1[lQB&.!Oz=Fxhd(:+6@');
define('SECURE_AUTH_KEY',  '_V5#lmz95M,f4Gf;D|QAd15+d4b%)*jb]54-DaT8/Q]<[*1sRnPKup)JhRHu)9_3');
define('LOGGED_IN_KEY',    'z1pN8aj>|W!P+R@+qSBob[P#=az9,sTI1U+4$C}Komgr2geRXY^A_yyOW?U}}H,w');
define('NONCE_KEY',        '1~MR))LLUSC3iKq~V<j<5<S{+$>+*F!6}ihtWjD%[{~@.|dG(w_Vy*G.p] :8T-+');
define('AUTH_SALT',        ',A+TXT{jap/M(-uK]C:0@dG#QCOLJ_A1G[E?XAoN({AhZxQ~lkmOrTqq}7qBe4Xx');
define('SECURE_AUTH_SALT', 'oqAA3_)&-z7 e*-+KRP8M+l4j(W|R[;T_I<Oi/Vg_6^u%u5i+vUcA):TU:.:F}`p');
define('LOGGED_IN_SALT',   'p|k!*;NT$Yvqm>}6>)||O4p4*{~Qq58~x)&d~ydXZM/&0@-7]$IKTw;d6tIi/gpl');
define('NONCE_SALT',       'TS-[)2bU|#E;lX`gaIX-zog|E#t;alUd*],P#/sh8FbPlh>C2ew%NVxK`q}H/()F');

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
define('WPLANG', 'ko_KR');

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

define('FS_METHOD', 'direct');
