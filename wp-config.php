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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'FhB|f#Gm~Lq|>8O0MXA_k>GRw~# (7J<#TB[9Iq2A1FCET44J69jrM-ZpTET*Eh0' );
define( 'SECURE_AUTH_KEY',  '[WU5o-{5$M-XGLb^a9+.@3c%tq#VDW~jZ,)I3YFpn%Q%D7mwu/|0CVVpqTQc~}YA' );
define( 'LOGGED_IN_KEY',    'x~Zev#-[-rMO|7pjSan_%@]Kl{-s=vQiJ?)#Wsa4Xl33exPz,YRdCuE,7?a|zc80' );
define( 'NONCE_KEY',        'N,bJwk.m?j+F};w&q{}Xy3juk,-BH>4B*lqYh.k`##MMXO|$wm>)jbYWVi)n)B}`' );
define( 'AUTH_SALT',        '@n3eY>tbpp0][.^D%;EkkRo%tQ vP,YeW|jv[% +ZW9o&iRt)Gv{rNV7ls98B{xu' );
define( 'SECURE_AUTH_SALT', ',XH[f@ aYp#i9%Cne<]|%OhB#Q#%VF%/ZQ@Wb}EjP<Yk~=Vbbs)-*fj}WsoIfE&^' );
define( 'LOGGED_IN_SALT',   '#7_7z13Y+`mu]AVcefvs3X[FUH+WI+o^^/OuBl~m<Ev6zV#mZPnimk}8=b!,</Nc' );
define( 'NONCE_SALT',       '!cd.c}UjfH}fhM2*89jZiv*~|1=$9}uy[?FhmwktR&itWKJBL~sXHrv_tDL%O;;2' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
