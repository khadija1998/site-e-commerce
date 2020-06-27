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
define( 'DB_NAME', 'commerce' );

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
define( 'AUTH_KEY',         'gK@LoO}XROAF`v!&CI7G4x~s#YWiimY+,BESHx8  43LCGELT3Zd<EM-Ng%2>kGp' );
define( 'SECURE_AUTH_KEY',  'Le_<^UD`aL.&`7_3qA3t#0P)US49!mAqnxB^gYt`>K/a58ko8lJp]9^2uZ IhqY;' );
define( 'LOGGED_IN_KEY',    '@po351i![]-+i?HE{fsEn.XL2teIJlhxd 2m.ARFk]]sE+=P!_u$l}t1q`|5<Zwd' );
define( 'NONCE_KEY',        'AI|+pI])k+V,t&IqS3Do(m@FMZJ0n8{ox|RUm+&j-22v BAJOqI:6@)mHF`^kD)l' );
define( 'AUTH_SALT',        '%jNuq&jX:[U1Uu`eKo&^m$~1rtK-FM0Ug94tfgm><a >GZ#JaNjN}vFuH)Q|[.C>' );
define( 'SECURE_AUTH_SALT', 'No5s`U<>H|3zF7v_.XYOlo#89zd^%?xh]hQx(-#;c/2XS/{Tm~:EJ/7G xK[[+`[' );
define( 'LOGGED_IN_SALT',   '/?XU+i9:20r0<|.Mqo*~k^5th%)0kNAHbC>x50`F<E@*kC+*/t]=}iXw-t<_ol;K' );
define( 'NONCE_SALT',       ')w*MSwTx3jk5DR)t*/<Py3RxMX30wa/%U57[;`dYi!FGT9Pzz|&(,a.-wQckR4UK' );

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
