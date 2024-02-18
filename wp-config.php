<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q8LC+M A>OFt6Y(yB-l0@np@AFgK]02S?A+){oiKth@;=8xdu( vbBTiqI<E:<NE' );
define( 'SECURE_AUTH_KEY',  'N6GC%eJ_2Rzi}z[KvySeW@_GQ}{z([w=N3$:^uukCis};^WdHAwzwg|NL4VqnP8/' );
define( 'LOGGED_IN_KEY',    'C,S2!`RH38`dP8_U|}Pus|m?Oo3df$nvBSYMoBx>Jti6SDTaTe8DmP(O`+5A{e8%' );
define( 'NONCE_KEY',        '`kB~-qi6?5ro#h/BIo&W_g<DHUBy#gjR6?s6$67~9/-+!rw(mj0hsJL}]O#jOohD' );
define( 'AUTH_SALT',        '5v-)@0xy4kRs}u[uc|u.w@7S*7E]}+MVk15//O_,,{=d+1au/Ma;lp>Jm,!X.g)`' );
define( 'SECURE_AUTH_SALT', 'VJ+I3HF2!.>Q5u/2 Eo*&E5kcTAZkY]Q2VeB$Z99xnT/Pl.Yo|XRLf&]qgg1kRuA' );
define( 'LOGGED_IN_SALT',   '=Nf^+m_hw!SFe5ljnOwL,Zv2V8o7PyR5~9PM?1YD/P!Yc+IU2NHYStX|X:?y2lqR' );
define( 'NONCE_SALT',       '_hy,Byl,0HEmaqQ|HktH(<Y~Uke/X6Xd4=D[:%&Xh=v}OSxX7ukz7]G%2MdpAj=_' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
