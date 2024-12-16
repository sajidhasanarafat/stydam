<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'stydam' );

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
define( 'AUTH_KEY',         'E_uCt^0A]v`1EG&:-zY!bf8:EG3Wqou499CDmk/&7~F2{)Tql30=.3p}H1+~` S|' );
define( 'SECURE_AUTH_KEY',  '0`yC2)~i8kdh?c]KP1iB<r~3D>wL@W(i3u}y~L$W{W[~x`o#&jSW!SPTQ!#f#xR@' );
define( 'LOGGED_IN_KEY',    '0?ECn,40+^N[+m @AuQ`Nxsuj/_%Hy+7/$$eQr01IfM+;.wm*sYeQ/VC27k}/35i' );
define( 'NONCE_KEY',        'drdVKOWl+K3iipvhaj|%pbnLgqE&Av280Ic/oaKJmOB.~5Wb<J|S7V7&q`QG`MeT' );
define( 'AUTH_SALT',        '/sQgJVWUL(il#PnA6>L3E|kUki(-%X{.Q:AYE}-:Q,921?x/%Nc4a;./fP}VE>s0' );
define( 'SECURE_AUTH_SALT', '<0v3uVQgxUD4K0suFX7p<he=`U3m}.{1__=Q(u&e}wYMh=b;{E:cPaQOL`)pN|A]' );
define( 'LOGGED_IN_SALT',   '8eOk}GkJC*N>##inV[j{h7}*YTlEiIR 3R-Y[<#>T1YGg]?yHZe6+jQL6Q~1{lyL' );
define( 'NONCE_SALT',       '(%R/[xT0Sc2_xl/*{t%2pT![4}V@!k{_nrn##(*[OADAbr1~K}-}BDfZn{4<p>4W' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
