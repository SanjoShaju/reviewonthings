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
define( 'DB_NAME', 'reviewonthings_db' );

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
define( 'AUTH_KEY',         '@tb6s57&RDSO^ttkwDe1({Jv>y3/F;R Qvs^|{en>Ch^i~R|wV9#pum4jNNk}2qk' );
define( 'SECURE_AUTH_KEY',  'r_swiIF}ST^1kv9}EV>Sv+YzAsn0/BN[631EQkIu%elWK(f/5xU~d?Q`dtY^K@D<' );
define( 'LOGGED_IN_KEY',    'aD)yyzv>;h9#d1j[LjvTje@(Lz:S;}&H9uIyQkq`t^u~@ws%$>CF,jD5Vw|>wkVa' );
define( 'NONCE_KEY',        '*NI5]<}MhfHrh_V<bLND}=b=MxY{:!a,fTQ%lKnBJ|Ul|,G5@AM_d1lp&Lq;9FS$' );
define( 'AUTH_SALT',        '(2C0kor:]P:^45jx#,<0GW7lv?,|RweA-%.]5:aCl.(nO=>]j!hbT2+9iu^-dok[' );
define( 'SECURE_AUTH_SALT', 'OHt<X6C,=U(,-mxn[jV:b+l!yhnalO@sP_2/sD([bWCXs?(&7@=f5kkGF[/%)(kq' );
define( 'LOGGED_IN_SALT',   '@[iup)q6.V*szyx6J6GIT8<4fQK}]EHWtVI1D:vhjDSB)>n4Z=|.PTWLn|6 9&}S' );
define( 'NONCE_SALT',       'X+z84%%cn$=KTV]tR)S9B+I^<77cOHQ`qb^LEtf[(6urZ@of3>E[Xv[,Z1JV+bhL' );

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
