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
define( 'AUTH_KEY',          'oPwA$rs)_FHlqmjMZuQ7[AI)$~$m6Q;j_E1+bV>OLA;c8hn&,[qd{?2#L!2rE[j7' );
define( 'SECURE_AUTH_KEY',   'j=xT=JU7/{g|.+{^<rKL$~7R:QpF9KZ4`EDEmPB1;1s0sNl0:2.{!|lH qvXFKl^' );
define( 'LOGGED_IN_KEY',     '<NEk$h$hpe%&t4xm42eGFCc/:RsYdN$Vt&bo4n@BfM?_0] !X qCs|jTA9qF4YkN' );
define( 'NONCE_KEY',         'FA@IZXwI-[$>,UBuVb}siUn)dTv{gD1_Lo~?HrI.t 57DDHup}|Y+CM!Fh~s1.6`' );
define( 'AUTH_SALT',         ')L`w8JWZqYX,.#@Bc`~0(@hMY1Xi|A{c-9oe3n>=qb&?4uNlVZw*4Uam/z6XM:B/' );
define( 'SECURE_AUTH_SALT',  'jg_`Spp,/IW7w2d>ziQ6>1;cuf[7v..-0!b^MNde]Y*!u#GqhA]jt@g8d>R)&>4]' );
define( 'LOGGED_IN_SALT',    'e?JgJ=f,s:vhgN-}RPt)umK9{D5tS=%i:cR]Fk?21urW$=m]W#h#1:Qf+QC0~.N2' );
define( 'NONCE_SALT',        '1S4o&}J*Is_ tX@*Iq)pZk_l3tH>c*[z#`HKBM!mm5Br`O8;XMp>jBYz_.@kd;uf' );
define( 'WP_CACHE_KEY_SALT', 'b1YC<{9O)N^d)el7Xdx:~jck`n1x|v4jIz~ffX?#J5]tDde,sz/R)Cg|8^XBj=WL' );


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
