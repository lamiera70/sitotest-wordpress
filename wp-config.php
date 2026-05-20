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
define( 'AUTH_KEY',          '(0#}i_HjHNM|RD{I9~SLNy/15{05W5x.IRGonLqEG%5eRE&(3thCwo>1O8Ov8Lw4' );
define( 'SECURE_AUTH_KEY',   'm)@J?$p&x.jV99YG[@?**f6|x<Xy9tZq~5t0vDyKl,/)c0z+m({)l}(dCwJrHX P' );
define( 'LOGGED_IN_KEY',     '0pn/)XaVwJr &1r$z4/&Qrfg]EV@a;Ag0J_)=2:O}U9~Vlgw*P?e.)XselG}oOYM' );
define( 'NONCE_KEY',         ')7A-.qoK*|G(jf[|8.8*#8m<f2OLdSe=50lt;JNrx]~:xK2t0Y*)$Sv/<l4=KsHj' );
define( 'AUTH_SALT',         'WkoG:<7P3J#g#2X@jIaD&.|7zF2tY0>~9pW|c/[)WH%uf SPSNkF%Z&;,c8BB/ t' );
define( 'SECURE_AUTH_SALT',  'i+lo<EQaO)WaA;B-G=7t^xNmwOq<Fd=69Ti/s7[*D3,er6bzDBloh{?E+ornq]ce' );
define( 'LOGGED_IN_SALT',    'Z8aq38dgV#Y+*kU=a.3 MR5@UGg{H77bJy=m@&q*6^SV$=eL;uyL%5_qKM0Wy^L|' );
define( 'NONCE_SALT',        '>BD$?Gb;-t15_e~w f<dsVQ8k>g]yDq!{Q^4?2Di@,kn<=_`M~6He#^taLl%<l1S' );
define( 'WP_CACHE_KEY_SALT', '(4ksj@G[u7C_nc*`.**R+=j:veH_~^:v>|i6_?ho??)MG{EZ)!<>w6(Rcu#T[x[X' );


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
