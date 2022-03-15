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
define( 'DB_NAME', 'wordpress_lks' );

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
define( 'AUTH_KEY',         'JRKK(4  WB+7-%R9x9=[-dXu(bgD*~vhJT)chJEpQ,E~^J?xa5By4<V%|s.ECm=L' );
define( 'SECURE_AUTH_KEY',  'xOzvH6(sc&U SI.)3UP)EwAowHmDu2=P2Bq)j5fk=Gl07cwuHfA`;]T/QQ9[aQc,' );
define( 'LOGGED_IN_KEY',    '13L8Uj0|V19_0Vh${H;&cA.g#_<{Om(u$wD(*2LA(L6Y[xwAjZ/z#NdQiE!^CrUs' );
define( 'NONCE_KEY',        'Bh4gMS57=on{/%>X(Tm>/M9zsZ4N`a=7/~ji; *KpgheW0woWB06pT[+xuvUp)Jz' );
define( 'AUTH_SALT',        '[R2P4Lg6^e$yb5)e1i^Ke_@vU9Ib[b&n/@vq9{O7>xDG*FX|?W/`>L(,973to(`/' );
define( 'SECURE_AUTH_SALT', 'Fo2#}CZIL^H<?g*d[o)I0?=IxZTR?C!R]+!7zd`_6o2HK>bh/&%QqBTNL5`m-CEv' );
define( 'LOGGED_IN_SALT',   'zk L`.A3V+eGGyrMPHFXD@|4JG<Ct(j NxkH+uakDX,KLr!X<$bk5Iw~uKt#7kq2' );
define( 'NONCE_SALT',       'SNFm5{9&3.HT%<%Mdi2EkV3y1YsSW}9,QxOR&}G4EZXDoOC_qOp8Y,i@2GB}!0`.' );

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
