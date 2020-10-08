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
define( 'DB_NAME', 'wordpressTheme' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Maciekb081996' );

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
define( 'AUTH_KEY',         '1UPQ>^cD,RF$Ufdc5fVf2u64k)vHE{<&uOhS={n8?>7:bk7(3Vhtogss&_}d`_Qf' );
define( 'SECURE_AUTH_KEY',  'jEzbmm!<$3NTZ!7<: F|t$t`940PJQEJ5c8q!yQP-_]eY/>q!9yThlDXp(Y)Fq]*' );
define( 'LOGGED_IN_KEY',    '+n{ilnYmtULwauC>%Z>pb2J8T}YK0m &Ob/l?oZ]jvrv//J<N+T0Oo}8pFNtf?`:' );
define( 'NONCE_KEY',        ':kIeJcs+_A*h{,4!D%lg3&P`PSRIn-5(>xOqD{m5hJID=AE}mCBLl}R=P(ACt^uZ' );
define( 'AUTH_SALT',        'ba>]SAF.NXI+s;jcSr^Q<Y9*<W~Zi~|X9H}|SMv#_^>S&d3lA4Xd+Cmdd`zc>4 W' );
define( 'SECURE_AUTH_SALT', 'AJB/{<J;:#i4i -x%^g?1?LD(pwhYl`Yt6}#(@[o%uwO@g|p<r<C=Yx*|9}1!MLX' );
define( 'LOGGED_IN_SALT',   'G5bGi.Ou]Y9l%[WQ08CC=@<(g_[Lj$iFRE[*FPU!?BuZC)Ug+Sliv[>CPxg<OoQ+' );
define( 'NONCE_SALT',       '^oaY~Es-Su09JRdvmEK?>tC3AGR.[WytwjdmDFXa]=a:NI6twknS$FsF;#kxtm8i' );

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
