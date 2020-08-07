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
define( 'DB_NAME', 'testwebsite_db' );

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
define( 'AUTH_KEY',         '5sP02!)Oa,V~e3[Xl<4Mb?SNiA,eaDxJ1)`jSR<7Z!0XUo`(v;~/RC%X]s$Aej8y' );
define( 'SECURE_AUTH_KEY',  '?W,p)4;t:Esd(JV[GffPO;Q9T:Y0vz&0+CV#Uy=ee)P>bR`q9%3+SA!r-OootYL?' );
define( 'LOGGED_IN_KEY',    'I|dql)^4TMcUJE{WHtvq/~q[[c6{oPyiN*vNlBzE*_2np@wv4&d^;)bT2)_D7S:(' );
define( 'NONCE_KEY',        '~(8orZt#bkDaW:>o>A@TB{HU 7aX<l!{w*<Q/aDry@Y:q4MY#j.:S@t)t#,LF1V!' );
define( 'AUTH_SALT',        '_1mxk11`I9 yoBx^j>eG+fse<y)Q|rn,oi4Ql>*w5_@bXlHBRs7^e%mSii<U)/eU' );
define( 'SECURE_AUTH_SALT', '>VR1vd<4gz|L)pR=xib>,&[g[v~8{OcN)r^Qe_B=!NiT-0]9 U:L-#P{61U6V}1]' );
define( 'LOGGED_IN_SALT',   'l!ZS-qaxsfF@bGs7:PR3|X*&#eb :QMm3qz36 sK6B,S)Ih`^^B$kT2+G.{;Rk20' );
define( 'NONCE_SALT',       'i@y/82Ia~*o7eh US~^G:96Xas*j3}vK(`b#j`k32(9r3;UnP1:*}.1[Kc%}bHqO' );

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
