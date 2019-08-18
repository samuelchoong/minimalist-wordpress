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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'hyNG41MZ' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '5xFsG-Mm[Ne1vy63Kv| Th|oc[{.b|V*,xY&xZKTK+v)_a47-m`e#/:`Vz+}S(`Z' );
define( 'SECURE_AUTH_KEY',   'Oxk5aIwF.((Bj2f|+v>Wq?!bSb_q=UhWs/!%+lYzFGVy9E[!E9E3TQAHXo4dK_l%' );
define( 'LOGGED_IN_KEY',     'e(Oh#dW%?p]Ctwe%O_~<*Ka-8*y$n@OI}^CK|5LTAiIri<T&}^Oy>r-b-]ZWUp)$' );
define( 'NONCE_KEY',         'rvP|RVt0<,y(0Z9~sD!clE&$SRP63O`hL5czkupyQ/LFQ8-QLsOP&9b&7KNM,eP;' );
define( 'AUTH_SALT',         '|**%*i3GL!ije4%*xcjr>fxW_?mQzxn@?C#(MXTCkQ#A a;AQJJ-=# M[U{i*|2U' );
define( 'SECURE_AUTH_SALT',  'M/OA)qf=U(>%!9^&;}]*UJ&$1D0lcwQN`d~2 5-)5lCvjijcguNE <a2>PFVXS+$' );
define( 'LOGGED_IN_SALT',    '::$haCh{r5WJr<kqBl%SY/[~ApoQgw%|qK4xRG._6b3q#}2I^VkC]:XR&|D-oEJ-' );
define( 'NONCE_SALT',        '1-)y6FpL]Q{i%)rHw% Z%EGK!RN }EUr|[8|<<Q*6}bMRz8hOOI2tz05^L!i&iB|' );
define( 'WP_CACHE_KEY_SALT', 'bgb<8[a~X8qzRl]zj?f0a0jlx`T&,w~3 ~#+NV&SHt!0HQyz(=B*+JFmz2|kF}]&' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
