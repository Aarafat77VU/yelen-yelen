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
define( 'DB_NAME', 'yemlen-yemlen' );

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
define( 'AUTH_KEY',         '-u9QP:$?a@S)[36@|Pfv./[QM/>md+mf(2(HB6dW7`UfpIB;?]6[Tez}%S/>7S^g' );
define( 'SECURE_AUTH_KEY',  'S4$|UllfzHsZ(5Q[YVsY*D.jsy*W@?Al8C@vflV8iUL|n*e}_.Uq >(?chS68/~2' );
define( 'LOGGED_IN_KEY',    '[_kl8w7Eg-7Ydebt3e3X*x!ZPeZy?nb#/LJ}F|VX1}zQqajH>/%wFg^xB-,g;PR ' );
define( 'NONCE_KEY',        'xmnH,Ih.6:6^nC(JUk{YLOg.bDx`S?T9SdC;5(;8Aly%$yNgDf>R1a&1-/>J^la$' );
define( 'AUTH_SALT',        '-d8/Ib&{XZ}W&3ckuE!=]ExSx;elW&[`S%E^JL<Ost;*;YHUYFfSw+mVo^(P@SL@' );
define( 'SECURE_AUTH_SALT', 'o(_y,xqMr_I|zVs#y54e3|ZhG`?zL4Khpdb&0m$_%i,C8r{z1j(DlhZ6].H)ge]5' );
define( 'LOGGED_IN_SALT',   'hmLW_sWM0kqC1cA(4hQ&`/fq}m#Z>KY/:dbpw v>$FKavxd={yT9Kt2g6EM#iFwF' );
define( 'NONCE_SALT',       'Psm%s3b{<x<8nyX2U4?D^_{~wd*gdpK.nO|`?hIp:$@cIMS8^BIGoOueg>Apv?rM' );

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
