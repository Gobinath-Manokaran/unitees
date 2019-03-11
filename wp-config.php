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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'payoda@123' );

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
define( 'AUTH_KEY',         'w*mt%WffcpK08sN/ok7x^WSk&3(;lNlBdZt)g_fq$aw^=vz&ydMK~)Dy{V64D6Sh' );
define( 'SECURE_AUTH_KEY',  '60.%aE@%;n8(6lJ%@(Fd{R&E~d*ZCbIuiUkUY, DW#uo2/u7]5!A#xP.z7k,lA`_' );
define( 'LOGGED_IN_KEY',    '=z/%e{OZ5#9  O2fNw!bsZ|B]x~8)I(L2TS[~OseeN(GZ/Xc)cD{e-p~&~qI~/mt' );
define( 'NONCE_KEY',        'o?Zv.nA^0&&D6l8V!r%]/a38Uc8cD[mv5Lmv(grD`]|08JF1Deq0Y#_[S>e%N:$C' );
define( 'AUTH_SALT',        '^,tK&>==X`29xDpqvjZb&{<:sHZd99+J,~P6X#hAls1C:~:A:W?.~&SO!tZxe#AB' );
define( 'SECURE_AUTH_SALT', 'VbZMSmZIkbB$_[.W(=m$-Ry*1d9.Nc=m+@F(oJ23vCR-46[:#%.zU?<R&E(e/gHC' );
define( 'LOGGED_IN_SALT',   'q!DMFVYz`Yz~/}OE]X-/QPD,5(SDT{mWveiXg|KBfL.:n:>0H*k`NmO{K}b|xyoQ' );
define( 'NONCE_SALT',       ';/l)(mm!F%WH:WO!vC-%i{;I%842c[=j.~ROwrt]1U@.j|ABBdFiRb4`.y{?Io_8' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

@ini_set('upload_max_size' , '256M' );
