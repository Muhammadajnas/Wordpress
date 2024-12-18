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
define( 'DB_NAME', 'wps' );

/** Database username */
define( 'DB_USER', 'test' );

/** Database password */
define( 'DB_PASSWORD', 'password@123' );

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
define( 'AUTH_KEY',         '^1^WxV+)@M4~&,DZzEyGe=iJ)DEHxUMIZ8S2qs]c5P4|qssN@`KMr2AWIm]z#{Il' );
define( 'SECURE_AUTH_KEY',  '[j&QNXj,*P^EiVFsnf)5ZjR{f$U}5C~~a5d9?SLeA(iiDR6aawJP~R2&>y049!+!' );
define( 'LOGGED_IN_KEY',    '!k>%c+E+G{s|&$~7A/%:IDv$sQA/%(4,zd=5T^Y-PRe8BBv_5p#ODXZ.~[yG-Bc>' );
define( 'NONCE_KEY',        'kAuwc}-u Oq i#kvZ0Vry+JV2ddwO3,MO*v`B1|lR>gp9^~CJ?GcFwU!U=3jK-Gb' );
define( 'AUTH_SALT',        'kg/G1TqK#WiBXXFKg7F:#aTdqO|P`&PJ>5J_NW{Wn5Buqzoet#8b0uVesZeGEq9k' );
define( 'SECURE_AUTH_SALT', '}CUM@v&? >BaE]quXYPg`7e$S8y(BxE0nW,EH1i m1`JRTN7*/i.q=>!x|Zy@,3Z' );
define( 'LOGGED_IN_SALT',   'EULKM2OP?.0c8ozVIW*Q)-R+*rX[:nMWNETZ>Q~VrrdBCZ=%L*i~i?c%^G>) [iF' );
define( 'NONCE_SALT',       '@q6_i/V]3Y0>X4ya?id}uvGxw:-$(X_@L$b*a+Qe|wY82J6u(}#!lIa4 p ?2{`7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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


define('FS_METHOD','direct');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
