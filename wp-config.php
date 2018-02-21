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
define('DB_NAME', 'wptest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '/?$0lM>x7DTuYFr!,cvw F+1U|dhbb_JB&B;t>rDS]<owQ=e}h~os n`5R6J%2%8');
define('SECURE_AUTH_KEY',  'U0^-[p/z;f6G2(_heoI(#T7#Ikl| MV|u7M<k8C(WFyK=Xkw^|BImM@i>y##Hy 7');
define('LOGGED_IN_KEY',    'rscm](*:@=nj-JYYi^kj>/myK[Z?=%KZt B7m?vFtWkNMZf4A4<.D=-lPn0|srZz');
define('NONCE_KEY',        'oT7Nnl&1.U`5RzfR1gDW+Kav}l#/$;km9z@($(OPM4res/wS18I8doVb`&Dm~<w!');
define('AUTH_SALT',        'C6]7yYbS7yV%b7{@]d.NG+sx-^e,w,p7{?p1t@NaS=1.s?xY!7v[_UkHaFui_9p:');
define('SECURE_AUTH_SALT', 'yCLUyJ<yg:s(+&c~ea;GKc:7&vj6JX>iItS>b{Xd[$yG%MuUB$Z9f)Ycpfk^Nr*v');
define('LOGGED_IN_SALT',   '8@4d*L^lVC-l.v[B&ke{)`9@o[17bHvz&qKo,6=FWSwJ3q{`p/g71a:Q%iy|ZXXe');
define('NONCE_SALT',       'grl/ cKQz[^.CGmCS)|aOA*uzMyaPY#*UQig7%~,$I>!O~mjgT@&TGUg_4!vv4tq');

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
