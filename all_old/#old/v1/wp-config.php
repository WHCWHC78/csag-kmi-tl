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
define('DB_NAME', 'csag');

/** MySQL database username */
define('DB_USER', 'csag');

/** MySQL database password */
define('DB_PASSWORD', 'dkdlyf');

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
define('AUTH_KEY',         'kdg3Fak@YGh=WtN{9I1~cB{ ybcI. v.3d7!FX )s.!vV7OZC--!^BKfP&}=aK.+');
define('SECURE_AUTH_KEY',  'S;#|G EmbVx@BURj^@~SS9%38]y3w;D0=9ID|yvJI-&fE0pcaod+|df%$dpIkS<9');
define('LOGGED_IN_KEY',    '{Zj(/*y ?7jIq9!/FaU^xWJLlMKa0.iyjcf5_~#*w3Ma^%T#!z;C]>}%$x4I)zC,');
define('NONCE_KEY',        '_QK1B/}DjHevBj|lH!oH!pzr6vW$Ro^pr!kRXO-hSzu-xm}ZVy|ZVnaX1z?#|mBD');
define('AUTH_SALT',        'V~NCru-0HKU=$d^yy1kz8yRJF7r7-h2V kjLJ/@Wwo=h1 dAN--LXSxS[.m+AwD|');
define('SECURE_AUTH_SALT', 'I[$^UpQ!gP=-G~p:bH;0,=Tl0~(*#:xz]`;.8|t2,L$jVzw*{6SHJkSRaEzmSHq/');
define('LOGGED_IN_SALT',   'bX0k+XAk?UYY9`]-a?%,?pASdTRp?:m3</]%#Zz/Fq0AWg<m`VGqG6WCkq^/D2hh');
define('NONCE_SALT',       'lJjIWf)zEHw7;fNe 1*:{3(HR6?he}uHVNG}CI9o[W)&&h;s+,<ojVj{}cHty-3d');

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
