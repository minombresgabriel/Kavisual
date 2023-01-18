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
define( 'DB_NAME', 'mibasededatos' );

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
define( 'AUTH_KEY',         '+/#%|Z9r[+j|?-F(@yi5XKuvsucv$#P&*!iE*-bWuw|Wp]T+}L{ZTmlDZ[B)Tz(Q' );
define( 'SECURE_AUTH_KEY',  'n.>$[AY{SrozV5;(l2t55BDc^UJtK#Cnp} %2y2.?I@?C9Pw*~+kG_wvKmD(JNGy' );
define( 'LOGGED_IN_KEY',    'U(?fYE0T+Y~(GuUQFHKsIRi#!T4/Zv9}ly&Nc]xwx=8F>1B_V<Xm[fV8X4d1$QUy' );
define( 'NONCE_KEY',        '|LP8c-h7 70+$Kva,A^N6S1$oZgZpo;LuI%Xk!f<Gdtu4D~6%O%<&{FS,V!?>@ x' );
define( 'AUTH_SALT',        '&Ml3^ 7Kc-l<YaH]qzzkU,LsM~|b-<[<HNs%v W{CJ6!)~4(Q*yc(J_4fRb{8Nu}' );
define( 'SECURE_AUTH_SALT', '0d?`0o{q52{|KNv2eH>e!6[[Vs*4t$YhMhz?;-TE^*C08c9^:?*Jnw;Wz@DYwJK<' );
define( 'LOGGED_IN_SALT',   '%kc,q1x=|R*H@(JDlBB[fe=;lOd==:qmH=ML`yM<JcT=xX~8[lV*aeNPzov9NdvQ' );
define( 'NONCE_SALT',       '>/|LSYUxX#RLG ]{I326NRT(_wF};^:Om0H,8BDDltxxEh<}sM1/c]^g5D@[hl?t' );

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
