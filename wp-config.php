<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'quiltbag_dev');

/** MySQL database username */
define('DB_USER', 'quilter');

/** MySQL database password */
define('DB_PASSWORD', 'bagbagrecurse');

/** MySQL hostname */
define('DB_HOST', 'mysql.nycqueer.org');

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
define('AUTH_KEY',         '*<cBq:|@Mt=hVh?|49smi|7^qi3Pfi3O?7yAM{s,Y}xNBFg!O274Kb|>y]<BIUm_');
define('SECURE_AUTH_KEY',  'bqlCenE_Mg+>ZC(|!`KKY;-_@#SF*fl_gY/6w/>OYGQFgL5+k(F#~dvH>7+n|6~b');
define('LOGGED_IN_KEY',    '1K9N!d)53w>P q<qX^@DRgZJkVD%+CDbmaJ(HAvPI(HnL~l-rzz!TG+c1km0l($C');
define('NONCE_KEY',        'F2QtI{~-V7=H .u;R=X/ kk$--[C|b+kJ?k+0E1}j,2`%k)=xHvme}6D:723^b/`');
define('AUTH_SALT',        '5i?m5+QQGRj(kHJ<: ?$Slr Oz(B4Sx9X0tK.G0T*fyP9L?cN)=4hENBI}?M]gHU');
define('SECURE_AUTH_SALT', '`;6ovPE|07];y[]KR^m;*c||C~X6Hr6X1U=Ad`Uo,i/~hm/P*4wH*IE5m!-~+]WK');
define('LOGGED_IN_SALT',   'w{3k4)HiDIn!`fy#f5?;=G.K`^Y@.AL/Iqv45;!+7a+YgrKy%xj[x{I,`}vR0Wnl');
define('NONCE_SALT',       'ojG@,^|B~M+E{JP*xs+Bg|-@IMI_g}VB8w13YXK6g !]QSl]H*V[8*%(]eOJ{ATs');
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
