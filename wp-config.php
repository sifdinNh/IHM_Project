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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '[H}*]/,->qLr%NV;ZXCLu^(87c>uAg.nM)r_VW(LXXan[JUB3dgd7x$O].BB,<Ku' );
define( 'SECURE_AUTH_KEY',  'WY>@XC`3egLoXOGSvZ,JTG0./Zo#gk;1!l|vYn.%u)`KrlNN+&f|m9LBU&?TJptY' );
define( 'LOGGED_IN_KEY',    'yq_)4cQy)ZM]OrUZ:.E tx8w&M3g!_/`_5rKO(cHMGyy{7+,PiA5qVym-cp=M`/m' );
define( 'NONCE_KEY',        '#Bc#@.z!F:&VJM8c>Wm:`.r$)}e$VKY bTkQ$ID>/L5TnV6nziCE<;6mK}ujv%zs' );
define( 'AUTH_SALT',        'w8-cU8X4S{@8Sz?[&IQN6d{wUc<+<-A{WZMDoS!jwhMdp<7_Pp 0@Xk)(>fty=d2' );
define( 'SECURE_AUTH_SALT', '&@7{3cOulVgvuusd zH[x7wXO%i_Rm.<rUiCT%8>0*4I8(o1QAPDX_nl3MOdf(VA' );
define( 'LOGGED_IN_SALT',   '{g^HnOoErd|!1f%|]KgN9|Z_oE%`,|BZVx}0awot?TBqP(0Q V=PIP<BE+Gk(^{G' );
define( 'NONCE_SALT',       'd;cZZEua@%MpKhS_7meiAuL%evahyD0U9Mfr27/Q39^<{Nodkv&RKlAl?&E(05f}' );

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
