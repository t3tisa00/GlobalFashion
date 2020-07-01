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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fancy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*wv-<&)Hx-Yo_]_VQ@lwSG`itk`h}&`!sc;D_nRe|JY*x)5N~Wf<gl ohnt-$W0z' );
define( 'SECURE_AUTH_KEY',  'WJ)b7/y}P{nj&`*>p?+pT%A;]OYi.ztC#k2;*a=:w)Gi>czV,=k9r2[W%%Z!BOl!' );
define( 'LOGGED_IN_KEY',    '/KVx4=E4zebNLCK=G6L-W:P(4/UJiG+Gs| QFudIP~Y)t_5Mcj.{cTy>$fO7r|*f' );
define( 'NONCE_KEY',        'C9!R;Wr2OKo2c_jKh7QRo]+ULX:;FO+y3y+Is{pW_FtoogI0P :,Fl)<>e.::da}' );
define( 'AUTH_SALT',        '7xJ&@-wbjw!#_)^|W%zMc1e% :,cq`QpsYCuhu#Up$vvnS!y&C*n<@}ew,aR5=LG' );
define( 'SECURE_AUTH_SALT', 'WxN:u{V[g[P)N:H/^*NYSTmP:1~1}}lSpe& nmF5 MEy_$6dTb]C$8La322Q^%rf' );
define( 'LOGGED_IN_SALT',   'H*|SV#0>v*2G0T/:{u|| [J<J1BN43([=@lFg`(q$q(AJ^uOM5yo!B4XQY|P.<kR' );
define( 'NONCE_SALT',       'yYq~D^DDD@R6G;LsZ]yTOABBl_6lzne)RRqB*CO[V/_%,%60$I%m):a{ s17rH^_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
