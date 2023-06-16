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
define( 'DB_NAME', 'netlifyweb-4' );

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
define( 'AUTH_KEY',         ')j$>[-O^`vil6GUav_Xx|:!#81t2~=pYFIdfu`U)M[afi,Z2Kn51}Zx3(58Qa]7-' );
define( 'SECURE_AUTH_KEY',  'IO@tRg2a?x-E)Mh~5TA+$b&!grSC3ZP,YxA{.0igyafOq_eX1j%O1eq=Q+/#*eX#' );
define( 'LOGGED_IN_KEY',    'pc/??JO>>PIdm6mPc]N1Ge&lo6)4}}to*uorsglLsZibPKeSC=-0D5I)FB)X[pN|' );
define( 'NONCE_KEY',        'LD4,Q`VTeMJRF%Y@sCA&y`T,~w$X`dCwrB_3%b:` cnEmzD_T>PiX7qMR|*.{buJ' );
define( 'AUTH_SALT',        'hDdJiX?!cb[&SC~Ni@U49.x[%jB7}p;oD:Jq}?(ua.AdOdY[,]W= GT$v2;?0ohD' );
define( 'SECURE_AUTH_SALT', 'OR$Y&R1+i$MW<eY~ZNgGv,=3Cgf*eU0v`a,xU}jh8=<[@}<!ZB/w:WLPDWigz%c,' );
define( 'LOGGED_IN_SALT',   'L0BVUWUCC1?_=oQf(&B<@!wfb4pM}r0^p~]Ie1+LI@jQ)>7cGEty3HM`<_z8#0L2' );
define( 'NONCE_SALT',       'hcF=2EwsU07i>D.TRMr@4yz<,#$$Qtd*LI(amO=qx>u+fSixUjEg<]|->,?habOg' );

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
