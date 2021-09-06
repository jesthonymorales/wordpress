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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '9ib6lpGXU+y^f*0}`q){5H>Bv} 2ULqXLmmFL89>bM|g)5vC^k%S;E-a_|F~{;cZ' );
define( 'SECURE_AUTH_KEY',  'wm#&PKeelZ_O1dRvy{}g4<5a`G b `4mYJ:FL:C[:$0_pZ07c~O;S0`>onl?&~d2' );
define( 'LOGGED_IN_KEY',    'fsj|VoKQmipz68NKUM@*^C&izK)(T{3YHs>|#ST.Ac8t-w^;d}9#t[Ia=-$TR4tL' );
define( 'NONCE_KEY',        '#BalIS:tjU+tPyOqA#  l&Z=f/&gMb?bhR!(,+M?8=]fK>MP!|e_Nc<` :udN2Gg' );
define( 'AUTH_SALT',        'bt1Wv O^kuL6X}otm(IkeWVOOMcMsdwzMwK F1YAQpYINVJnuKzDGA;<Q|p]5:wI' );
define( 'SECURE_AUTH_SALT', 'Nxxx XvON/ .$@2(xw}G6&fV[Qj3qxrgWiYO2rQoTV4`f.4r>CcStYIf58`<BIt*' );
define( 'LOGGED_IN_SALT',   'a},iOr:)lNJ~/A10FbfMHY_`ia>A:| `>mdSPk2%i/ox4j&w_yVS{ptiZG/SEhLN' );
define( 'NONCE_SALT',       'zbW_z>0%Njt3yFc+j8V}Y<5%YqvG*nsXSg]fmu.G^4ZKQw$QhezFOF^0SQpM.<IL' );

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
