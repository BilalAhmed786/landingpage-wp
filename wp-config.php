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
define( 'DB_NAME', 'landingpage' );

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
define( 'AUTH_KEY',         'AQ|*]cu0gmj9vUnjERGS!Ne<%EK.EQm[l%~JCne;UFt&;2D>,&wp-H@$xv.=/`Fa' );
define( 'SECURE_AUTH_KEY',  'VC2^g~u0!-c?NTI$%x&:1GCoNg}@NejbUqh|x2u5iN(WY@g):&lr<GSu2ya~<SuJ' );
define( 'LOGGED_IN_KEY',    '/$NPYr{}8%&Mxc<#,pa[eEs4*eMJ~Sf6.V^U*uRH)|fY(?PU0UR%@7X}+Gn;Tl/:' );
define( 'NONCE_KEY',        'L+UByk-v v^RaNxWpins~5S}|9./ORa .u QD&([i~q!$YS/r3Kw)@`-yLL]L~,Q' );
define( 'AUTH_SALT',        'p!_@`#AvZVDOd7::=5?wa{xy]I1q]KO;=XxwbFxZ959oFgwo*<4E*A;].I~_P6jm' );
define( 'SECURE_AUTH_SALT', '#&G6-o{nGtDX8_D5;Oh-Gj!khw@Ev]x|>?{OyOu7C1]72/77tfC{k%]T9){D5|>s' );
define( 'LOGGED_IN_SALT',   'VrPS]C2~z`i.zE{Kl:w(9fx1aM-C*(4Jbqn@:!JI$1{2H>H|w2FvuhWNmX}YE#{,' );
define( 'NONCE_SALT',       'W)XbWin<MsE.2H/VkO5~:Y L]}RNxe}iCjr09CP7pR:G6 W/U&Qn-bK0fTO+f[B^' );

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
