<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'atl' );

/** MySQL database username */
define( 'DB_USER', 'atltech06' );

/** MySQL database password */
define( 'DB_PASSWORD', 'XXVI.sk.2006' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8=!=zmVf6]Bc>(1v~<Hv{e%S$]e,gSWReeS:}^PWxSH2+[:7u>.SuZ$nL%gC[1Qh' );
define( 'SECURE_AUTH_KEY',  '$5[rQ;8_*7&BZH$<luVfu>lBTO>OQio7G=GF_J=F.wUi3ewvZLA dn`I8`Zt52&&' );
define( 'LOGGED_IN_KEY',    '`av22cl>ileJzbKhJ/FZD@Xv3Y6@2>)<0`0>)G][-;AR.ibfInc=|NYj#Y2cYSSW' );
define( 'NONCE_KEY',        'zVb7yWAfgDE:c5>AFS;4Z2V _, ,P/edx ![R+L{g{#n]+fjr$-pOtC,qL3Is5$-' );
define( 'AUTH_SALT',        '.IJK~w,T^w5q[wULS<u& WblUYX9[,ni8/OM)]e0XuTUIQUak1b:+4f^k}| sQgW' );
define( 'SECURE_AUTH_SALT', 'Fp$Rq7}>V_N7gbt@:_oLbm.}@JY>;-ZWdc8V#5Oztc]eY6GYn[C]kGy&dd_pj:~M' );
define( 'LOGGED_IN_SALT',   'Fkf]:Pc_5X&XaO>S!}G2/bdotV<d5x^Y9gHZRsM.nX }mm-33Fsz#LYn6,?V&tFL' );
define( 'NONCE_SALT',       'Z.Vz~30nKon(iaVvj%q0H!lk%eq|$nrcot+l?2uwQq+N)`0XH4u6rX/GyvxTWz=.' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
