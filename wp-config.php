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
define('DB_NAME', 'chiedo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'X@Z%8?9HSw.v@6Yo/2^ZLp)>2:[_gT:_k*(hfmIJIpni,yx{tdp]Y::Or8C}xXy%');
define('SECURE_AUTH_KEY',  '2VHKe=iFzDr20=<PdZWJ!4=tN7~Ih!*i^]I@kX{)D83U_*kiGW;l>Jd~ 8@[WohZ');
define('LOGGED_IN_KEY',    '#/9%=fqd0GXH1Ygilw>uTPR<,#/TO8vq=UGrjO|AX/^4f:ITFQC tBh,Lr9]6/;N');
define('NONCE_KEY',        'NxEHFY4KZ}4F{>fabd/n{Jh{cvb^kFa;T)cQOES:Om*kIct+h0tw 95LN+&u+y`=');
define('AUTH_SALT',        '>kY]kf2j_Xi?O(I5L%$?]~sHv=)-,XPI$Iu~<S&a *hsV3,;1WR&(iKYo}79{QB~');
define('SECURE_AUTH_SALT', 'n`qazmlfA5|6pou,)+<Zu>T=+GwzuhyV%#q,(X+@ pCSobHQyO?ogvg~>Ozkx&%D');
define('LOGGED_IN_SALT',   '.&H!yJe.8zj5C ;TGts{Ck*]sKPh]crbB%CgK:K[J<7wwiyWhpScr6#n@{0F22&[');
define('NONCE_SALT',       '}.$.hlu<3h)wZIv?/nmW%Z|=!Tk@k`R3+<M3]v8w4W 69-cm(z3?nU8Vvcrx*A&q');

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
