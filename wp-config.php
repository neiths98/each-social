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
define( 'DB_NAME', 'each-social' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'b 9lYB[XF9#HEM=u~.:V>5xg3a>uOwbn I}S%RzNi|vgEe@uuj]{1ti,|h5Z=0?$' );
define( 'SECURE_AUTH_KEY',  'B[<qUaU|*aS?mMikR:i`<[-9>=DUlC$sa?I25{n:%SMwR,N0A_CkUW4XX*d?~}-7' );
define( 'LOGGED_IN_KEY',    'Z}0IIDhIYW=l w@W+?XwutYCqB/*ZLxskmbx>pMYm_18:(&zRZGyY6GxDDa7<!RD' );
define( 'NONCE_KEY',        'Ix9W_kC.[WBG5;5mw.w:s}snC`gu {:lZyj6~BL,1{~m5>n1;B9U!N)i~NT6To(]' );
define( 'AUTH_SALT',        'oAOZC=/ln bV<EYuicqZ7<ce7*2{_M-+MkK7YM6FxK-JydQ,i[O4_(Uu.1u!OV67' );
define( 'SECURE_AUTH_SALT', 'H7tka#Fwt:L{$N+bEf_V-]J9/>b_7+4HQ[HS6!!>v6hLZUU]ZwH]8Hq-241&d5{0' );
define( 'LOGGED_IN_SALT',   'Z)=v&[U)X2sL}.qq<o:=c0>GoA)wQc0,~.s@iVI^<YRB4>G6T@r[A?XOcf7?}x#N' );
define( 'NONCE_SALT',       '`2je%falF.z>/G.98)Il&D&guO$ZtMxrX+XRDCJqC.K-5auMB??3kJ*Z>>?D<v@-' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
