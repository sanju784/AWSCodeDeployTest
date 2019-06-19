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
define( 'DB_NAME', 'ningendock' );

/** MySQL database username */
define( 'DB_USER', 'sanjeev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ningendock' );

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
define( 'AUTH_KEY',         'Its0xp:yoD NK:d`V/mCOLnp3A<YU{Y+/QcFtdtpw3rkbLSrNZ6B{kS^ eV`L]5&' );
define( 'SECURE_AUTH_KEY',  'p!^j*>)=WYF{(Ako&$8:WF}&@tn`]M!q]X]Y|^I@2W,gkOnu[=T3qeiIE^E:P3EL' );
define( 'LOGGED_IN_KEY',    '&%Z|T)0YlyCx1MkDwl}TOKO;#l]i4=BL^O8T?cB}5Btf,[7/If9[q#4keT>o&h2k' );
define( 'NONCE_KEY',        '4wd}`&]>QIIx[9<K>C9DTk.#D+:=UC{}/|J5sdc0EPpCqG2W<`!fKkz2#6THxuAA' );
define( 'AUTH_SALT',        '8N@P[=xZPaf`i2V[Wi)z7f^wO+FG=RZ11tr-hSd}7qmBz s)=v}8`)=pBpUIS3;j' );
define( 'SECURE_AUTH_SALT', '`E`}SRY&zE0ANe5+ElXW%<w~<dn^%F JWSd{N,4iRCT&enGzXz_OBC[8%z~Nk}`A' );
define( 'LOGGED_IN_SALT',   '#|=thkz#aSX)-dDG:>2rerBO_idh3SjAw{Z:pI:#Ek#4rsGiDgg!x{~Jfrh![*5a' );
define( 'NONCE_SALT',       'j+;(c[Y}B9)D{;gAW,e{;LOecs-E^Tmq$A,wIr[mEx3gKTa@S&X*L5s`2)qk:ZXf' );

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
