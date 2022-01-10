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
define( 'DB_NAME', 'wordpress_tablas' );

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
define( 'AUTH_KEY',         'uG&sEMIOR;^G<wd@F}q9S^{qmFG53pj-W#2g+G%vp6rX}?ye*<=C.zC*hgJ`uK>o' );
define( 'SECURE_AUTH_KEY',  '9q/1EqZ0m=Cx$b6h_eO(T})k=VOYt`rfStKDGSzj:ITX8hNc>w<%0k*pr,X!C_Ls' );
define( 'LOGGED_IN_KEY',    '(.$K!(~Ln@~~MUzjG4J;(H2Kf_|%iOWlOt~,H0REsi9mD:pm1_#[FvRZu])kC/Wx' );
define( 'NONCE_KEY',        'D0}[WB#-pY@r%h&#3B:~.j$;%(-A! ZSf}46 JG&l=TyIJS`^ zf,SGV6WzCwOcP' );
define( 'AUTH_SALT',        '9uZabM%Z[Em:02[mTh)Kts`hc% 5%oiS|insRh(6B<{ZrWkZ>[dHP(a9*@%)j0yV' );
define( 'SECURE_AUTH_SALT', '8_$_dkAl&V(}hvxX+X:m[`H=OVnl~b/.U 0)QDLvS7;w&@hB881`k56xd-|Ncyfj' );
define( 'LOGGED_IN_SALT',   '(iP3 L;3mX#hA@K(J/y3~[0I_P-<pHyU!4mEZS~|y=1X/A:Yq)t}-IJyA#lnsAI/' );
define( 'NONCE_SALT',       'QbkRM-#wWLsNY^LR[#3`P*bYm=9>;SkS!A;5qP}VvpVw^%HxOk hwe*|B#tm i4|' );

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
