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
define( 'DB_NAME', 'breef13' );

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
define( 'AUTH_KEY',         '+4.KDvceJ&fWJ_*FH&XGTkzYz yy9ACr:h%6{NGUkadGx!V^|VIA*L@x|*YB7+^F' );
define( 'SECURE_AUTH_KEY',  'HfWLf6J&V$EpyiGBys 79gN~>r]VGBh;(s{lH+{k+uRBY]Ci]:W^:G&4W+_kB`=!' );
define( 'LOGGED_IN_KEY',    'kq98Tx@:H7,B_|?ei=3+ oiNCu}6e+lyu:Q,?59Yp`)Q5sHca8PWxv.Zt]4]`&]U' );
define( 'NONCE_KEY',        ')^38:B8A#-}42<~z7vVsMzzP|Io2cdvMSlc((UW{J]AE!K0rn:G0a-skYG4t [l%' );
define( 'AUTH_SALT',        '0{iA4.tAhd*cjlhmr!;3DmYmr*U@F!fH{]nL&@)]mBK|=_@TYEuRY/8sg3M]MEbW' );
define( 'SECURE_AUTH_SALT', '!$CCxd+]Kcb,LS@vOnvDD}JbOcrNSQ8j^RPj^<!D-4<erT_U7.r_5Pj3.oC;ttSg' );
define( 'LOGGED_IN_SALT',   'u~}i*c4Dv)Pw@rdpy#(UhRK1sUL=t4F.5P*cb4_eT6vEtJ-P}4fEV1(2G#{jUBx_' );
define( 'NONCE_SALT',       '^5TCV`bEZt-v0M=5^X0cbjudqCaF5x@?.YF;erE!dDv=j{Cs&wE~Ja($?cU;Pe~U' );

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
