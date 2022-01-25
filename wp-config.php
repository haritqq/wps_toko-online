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
define( 'DB_NAME', 'wps_toko-online' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '<`uzL~!L47hSB=QopXE`d~n>;-3IvNf$soI%`cUnau&:l6}8mn+7K$Pm_DDoGV0Z' );
define( 'SECURE_AUTH_KEY',  ';w[YHIITD+_#3<:Qq{i!v=b!Sx4H{><^wEL+azUcY)>+tA 5[$AF_7MF|-t;Xl7K' );
define( 'LOGGED_IN_KEY',    'R_aJ&(=4[[(_$qT-^+hnA9u9c?)2AGRr@0^Nk0uZ,Vw-W{jGdFX8{mR%ZaWWWVcw' );
define( 'NONCE_KEY',        '}~o?/ESY{AZbI{5k?>8R)>+QyVG05WPRxqW7^t8maSf@r06/:vF_^3H:+$Asa!S?' );
define( 'AUTH_SALT',        'pHT1V%39D$Rzhv$g/xO+~#1D2pC~<JsRO@#%@3/kE<1n!sbVlSkW~`R1^$Kh]>$X' );
define( 'SECURE_AUTH_SALT', 'T)ZSJk-@k ARmIUuVeYd6%P{*+$LM(JL}fG2oC- O?Z5Z.jhMoh4Zi+WgC9;}=v|' );
define( 'LOGGED_IN_SALT',   '`6*-W y|YGjc`(h>lAS=-M?`W9i`}V<%A49YSIIXlVF$23u$YO/idVG(2BR,(zU/' );
define( 'NONCE_SALT',       's6IRR $P}T$ZoO|>49 &z+>6j0P!w1 NpaP3j`FGQ3EC58Q:~c1_wYfR!vg2z<18' );

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
