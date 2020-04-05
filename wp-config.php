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
define( 'DB_NAME', 'piroll' );

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
define( 'AUTH_KEY',         ']6ffd`tAsxGyduWDN?a+`b,i~=WG T!+_/GDiQuB0ZHvgFc6@8zOu|%i&~M/T fH' );
define( 'SECURE_AUTH_KEY',  '%0sD.RU19(W4Vah@DIhvW,P(jnzj,jhW,?RUNy@hPrGpH}@tgdE$p]a:ztD-zy$|' );
define( 'LOGGED_IN_KEY',    '#umAc{-4x:<PFFIiDepU!bm]fcUBsID!q6Zgr RN JY;-iW%8{2cR,P4CJ_BX^n?' );
define( 'NONCE_KEY',        'M:Se1,RMZYn+_}yJb*bd#$Y(y^FC@Gd9Q{)(ZSh$sz (BGiQ9]P?Vv |_/Uzqr:A' );
define( 'AUTH_SALT',        '`zr`jdj$uiBV$I(9Lp^)-7~HPjS7S!t&gWs}KtARu[3|R<?1PuaEvU^b3&|(ZwW5' );
define( 'SECURE_AUTH_SALT', '>Zq-.?#%1$@y2wz~0De5R`L<7IX~J2JdYIYRL>kRi> !l{BOAbJ.N;x>CR:xT_/x' );
define( 'LOGGED_IN_SALT',   '3hx!Q;FUfA%<Mu@&vPlV8K.IA`sJn7tHU#$$}YC/(/DD[6IGQw!c-#dB31Ex6RWU' );
define( 'NONCE_SALT',       'dV_3>zSO@]DbU43[&Wpk1>88I<&hIlb&w$g(akDCb(y8$,NwQs_Qnj5(,kXa>r@L' );

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
