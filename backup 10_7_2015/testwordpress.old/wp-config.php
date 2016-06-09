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
define('DB_NAME', 'michaelbartkowiak_com');

/** MySQL database username */
define('DB_USER', 'michaelbartkowia');

/** MySQL database password */
define('DB_PASSWORD', 't#RCK?FE');

/** MySQL hostname */
define('DB_HOST', 'mysql.michaelbartkowiak.com');

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
define('AUTH_KEY',         'x"fai6*UDafI)hepcW^E22B4j&ye*(i?Scod)iGt@o~2ec|D/l;N"jxM;Ogm"W5w');
define('SECURE_AUTH_KEY',  'Z41Vr@/ezY?k%B5I9N0kD(MC#/62wc~sxcWTqZg7zEf+hrWk4cU4K@`8Zjc_WUBk');
define('LOGGED_IN_KEY',    '";b:8"`j"4Fo28e(D$Smk&el4ZC2sUYSQ^|T!6+6?u%|yQtclco&CR;Bz5:CbbW/');
define('NONCE_KEY',        'M9gH)DxA?V4w8XWb(z5n9fs$l0/f0dX`!z_(SD6)"Hd1M9bT1MLopu|4k^oYt&8&');
define('AUTH_SALT',        ')v^+soteDmZ@S%kxkZc(B@;t*aO`;`k$Ot2I@WyDU8Kh^R;zLh`/4`pRXAy/i&P|');
define('SECURE_AUTH_SALT', 'w;?er0d^SL39:&L3fN$zzX0gV#wy!AqJ2iLm+LeTr(g2e^~$VnO!`C"eBr0&1NFV');
define('LOGGED_IN_SALT',   '+DEV^TxbPQ#%n^u9r|Mz)#a+ofXn*o_5yC*Fk+Ff^(nPu$LhB#2S$X~;m+1`oCoH');
define('NONCE_SALT',       '8g~iQf0NOW|$iJM_cexG3am_W;sO%PQ)M8G(Qs0*/t56G&ud;j$5K1i(Pgv5m!7~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_q8ssby_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

