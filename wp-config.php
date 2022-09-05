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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'site_bd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'r2BAwa| Kq=j,J>8)>TK>l1%*.7qzmMhx6rW)KoFI8lLzjuSOu{]`fC#F-1!Tg0c' );
define( 'SECURE_AUTH_KEY',  'HeZZ|kE=Hrgk+3~[90x{bS-#z:,?t9wEmO~>6K6fh> <A9}_S-a[lcev4T0][Tre' );
define( 'LOGGED_IN_KEY',    'n2pm&VllN_p>tr>t|F}-.z3$?c;+;{Z(5{}>VD.P`<V%;>1WHNr$nz*5k)[!DO]h' );
define( 'NONCE_KEY',        'Ce),cFpA|Z-xn&6,0+JJ;*3)V#mv)qibR[<%:$e@L}Hy]LXXfI/s|:V0bZF&J{(p' );
define( 'AUTH_SALT',        '%HH(zzL/Tb5Pru.kgEn#r^nbIm>#2mKX-iP_:=[n3Xy_<,5<)>;PI6qZA_rzX-nC' );
define( 'SECURE_AUTH_SALT', 'PU])=yhL_YtF/P~@Z9(:sDAJ^!W>8{?PwEJ.tR]Ns)!/IK<5Au =z=r#F$?dG3JU' );
define( 'LOGGED_IN_SALT',   'w?aQTjLkX}f&9]_p]Acg;~qM?ss]U8!!w=9fPF]xWTECe1e EJ(xBx8<q3gK!JhO' );
define( 'NONCE_SALT',       'B}6xGZ,j;?DBB*fdW4Y>fgcD|IKwA*SNIR|hI#V)C|Jq>[BCOvV|CG?Rac%wiu<i' );

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
