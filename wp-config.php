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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '8R,Gm-ZDaAVN.PY&v+L3-G*4}Fz%U$3Ta=nU}{x1}}CRkq{n/[v/kN<).aZol@%}' );
define( 'SECURE_AUTH_KEY',   'ZFp~sY(s&7o~}ROhl{]8e~a*c8ljU$blaPMu;<TfCg:gE!JPx8EL~#Ar!c3eo$Om' );
define( 'LOGGED_IN_KEY',     '$U!3A/6`m _xG+x1xX4a)Hi[5wH;gNa_m;J{1AG9(`@NS~%3.u{v,7k~t?vFd{x7' );
define( 'NONCE_KEY',         '4V8KFaM9^Y=d&8%3O<^u*_b/Cf~%y)$/1iiaQay auKcj(^OEI#*/HH5p34m~L|*' );
define( 'AUTH_SALT',         '!R~p !OjQK6N:+FHkfSv0LHT()4!PJm;z/U)*m:X ;7GQ1{>z2j2W!&#^hM-A3F$' );
define( 'SECURE_AUTH_SALT',  '`y<wNYrKpJu,-<tt/exF9TmC=2w-2~_ea$.uk8&@aq{e_tJVyX:uc><uAQx:Sg<`' );
define( 'LOGGED_IN_SALT',    '56XxTE:VQ0R.+$KI(`u8M^be`br/UBN)-cY8t)ST~v.s$.~k}j()e>8eZAd(bHgg' );
define( 'NONCE_SALT',        '}d|(4X`oOK@kZ:V,/hAwU5fhd;{8[xYk[ZTUsB!]WqmY7cy/y/WZ9#}J#m;<,TYx' );
define( 'WP_CACHE_KEY_SALT', 'c#(b4FcicD{1,2%T|+d4sMy@;SvGHb`w)!&]CLTUZNHNS6+0^S7O)^{zrQXn1,+l' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
