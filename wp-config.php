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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'iuj7byx3cy;;Pnvwup#cd~AOJjJU,[|zLrqsG<q;xtXB}i!#<iBVOFn4(vh5yFRB' );
define( 'SECURE_AUTH_KEY',  ']^p+27lQXM3?PmaVsaE5N1[cFM4klqaPW[o1jY4Hmw>fTZ;G~+.ol]XzgXjt8I=:' );
define( 'LOGGED_IN_KEY',    'lM<V+noMT=E0.:(,+Stw|8Y9:}m.B!J>LE&V`47m%_Ib.dFP [K^(fO^wjF;,xt7' );
define( 'NONCE_KEY',        'YwMMsnIkwVj?4;|&-p ^a)kPdNjWJseW-hHl1*F>~(8Y dcF{QMxMk]sbbZeZPN3' );
define( 'AUTH_SALT',        '~(Z?b#!o^;E`eRkCB#N9}U1*EYhg/i4Bf,c-Clw7LYdb5dLp2=3!A}gvpAt%7S[A' );
define( 'SECURE_AUTH_SALT', 'Kwd+`c4fx:9.Bv?wF7f9Io`hB!Ran}(C`)}<s+l2%)oa}Zgt2I|gmgVaiU}G}zy8' );
define( 'LOGGED_IN_SALT',   '@;7.(8~kz.gP`m]7kiTS>xpI8|C-&J&E.-}nQ>L*=8Ee:]/B7P]jk^Tjd}OXLpSw' );
define( 'NONCE_SALT',       '#HR187s~fxme$#, g4Y?Y}l0}Dg?:#lSA,=BC*G5Mrv|D|{,(:{M=P5 1{fxeR%,' );

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
