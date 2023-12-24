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
define( 'DB_NAME', 'wptheme' );

/** Database username */
define( 'DB_USER', 'mizo' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'O[bjhP52Xx8#E^QTw!fKo%@%Rle`-Ew0p(A^T-m`n727ShPyzh^`V}!(AHLOyki2' );
define( 'SECURE_AUTH_KEY',  '<dO97xp^*J:PUEvlJvf4Ur(C~$bXe@g$q^MnFXcdBOg{/])mthGT.v6~$OT`2TGq' );
define( 'LOGGED_IN_KEY',    'eZ;k~z>>ic5/sZ/UhK(,[Fw4&$q1l1TE}SyhP8i$8B_~u#`&74N!0D]1t923SDRj' );
define( 'NONCE_KEY',        'kH+Zrbx5tSngflod{X/>]qQ8w (WFPIz7:!NwY:6il8L`%fB,LtL4uhhtz%!Gd8=' );
define( 'AUTH_SALT',        'CiqM%G)!P6J%</M>v/v$B?Ns%Q`[KIROpc1E{_J%H}uB#^+X&&[:-94o9w/@3f.p' );
define( 'SECURE_AUTH_SALT', '+^<}k5Meu8IpnU7ee}GI7N%wB=eo*=$}al-U1_ur3v]3`~qg)VV @lt:;Ru^nEk3' );
define( 'LOGGED_IN_SALT',   '1x6T]VGu.@AbTIv[*nxscp)>@/![0joYYjG^LA!hx&C?(|p=`tJkR ,,:UtWm]aN' );
define( 'NONCE_SALT',       ';DwS9aVEnMz%A4v~+tfbJ8{nkMA|2t~Xad._vO8`h/i<V|{)k?q<3yV`#dQqsgdk' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
