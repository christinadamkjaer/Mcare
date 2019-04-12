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
define( 'DB_NAME', 'mcare' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '}rfkM~01&~RJ.KZi$|0]+0~`:zLe6p#(`=[)>dt}CX$f1O}11G]0<EX;K~*XClM=' );
define( 'SECURE_AUTH_KEY',  'e]F)oom(=]m 9A 2g,Vc-g+_R:n[AWu)k.GCf39r*?PW<4/3zc&qs@AVtM+0X Vz' );
define( 'LOGGED_IN_KEY',    'IGgm#3aT)V7tufNY/@h]U-~qAJewB^I^ead^2R*fGqZnL]YYDVPIMp.Nxl,P@Jn.' );
define( 'NONCE_KEY',        '6oX?Z=ZWa~0Tv<7H-0M.XgOiR^7:54agLVB9^}%#!7oYmM6m8^7zLs9MGrGT&xD2' );
define( 'AUTH_SALT',        'b;`hshw4P-)?C5Nr~#k=WLWp,uOSiO+W^BoZITNCAJTwE:LTAA|s(zs{Y)r>jsyd' );
define( 'SECURE_AUTH_SALT', 'a2)Ksj4zV+#pkcs69uXJ%[ev5Qn2%`VtEFx3mUKC?o[unge Rr$z J:H=]9xz]=Q' );
define( 'LOGGED_IN_SALT',   'XI5w$x!&xU-}[cBW@b&t56Ca)K:/iex?eb?Mp%^1+n)&%;KEX76pM1TUsNe*#{]<' );
define( 'NONCE_SALT',       ' #TGlzqWgB/+M}#^b+>.V5/FZvIJ.2-*04VWfs]C|e57=a9@V_ki* SXt6iO/ /Q' );

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
