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
define( 'DB_NAME', 'cybernex_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'SHY7%]h+zMEGCkop96g|bB`+3~ FoJJf3<RvpP&+}tZaq>k-6kIHU]{jT_6 p7h:' );
define( 'SECURE_AUTH_KEY',  'ye@(z$93:~+*Fv,XX(96q+!RT#E18Yy6>.1R~B/BIATba}bX*:;[C4!HISp<o*fG' );
define( 'LOGGED_IN_KEY',    ' =g-_z7~8```;(=EcXK3!JeZyLvCnw2/inqtOGX.hO=,n>9YJR-Rh#Z/3wvHaALh' );
define( 'NONCE_KEY',        '9Sc2}gXwV],m^z:<1s3?TT^5k`dS=d7t{#s_@)z5kXzub0O.GI:{,}<L^5}er<(c' );
define( 'AUTH_SALT',        'm7<skX*jUCj;6.Zm~/TVtPw.{}WI?ecx2&.Q$#ja3Vz@1]J:WvpSF=>)sm(p-X&N' );
define( 'SECURE_AUTH_SALT', '.I|p?OyIP%^R5!Wx]]cgLioF+ipzcv7OZ3&%J p}No<m>cXe&b%s9WJ#]2KvK#wt' );
define( 'LOGGED_IN_SALT',   'yy,elQh(I <.~@gyUPUF+D)OE-5RqMZ#ki;lZ#dA F>b3l_fX_cp!ds!2s$OBwZA' );
define( 'NONCE_SALT',       'XU/VQQp*V;#+Sv<;rr%-CospR;Zm0</u%+]jrep?i/O|6!ANMx1fb,+>Z2]X{r;L' );

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
