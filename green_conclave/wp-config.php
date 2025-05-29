<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'green_concalve' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'j=|;f?2JizlCFIJ%js`A0V6h?ND}V5[_3OFGrp2]}kwV=[P47jfNo`3JIy]4&5Y=' );
define( 'SECURE_AUTH_KEY',  '?G (oiTO$^TI^HJ^{I(nLii#siy[aI=V^mR52fm?K0WhO?em*E[>_wO<O(x_,QwY' );
define( 'LOGGED_IN_KEY',    '3QrYfUz/DBiNuU2S)p?k(3/8`#3CTXm(70}+><4%~?2]`qHcTAf_oFPkSrcfON]K' );
define( 'NONCE_KEY',        '|r@m<nT`!%$4m $Z_VR$XQcD_yN*9yt2?hW$n`hww?U6N[Dz0a1OBM[=%Bm:zUzP' );
define( 'AUTH_SALT',        'R0>Apny;ddR18h|#>m?J)%*V_7MaEyEU!fY<gPpmXi{.j<2E}U6T@irJmcXT?g@s' );
define( 'SECURE_AUTH_SALT', ',7gbnNu)AtAv)5%L5W*{njw%UxR_R9*$%>#{9zJj%dtnK,[=[zF{o E`8sZ76T+r' );
define( 'LOGGED_IN_SALT',   '~qZ,V)Viu@KqXT3 yla)XyQ1y9+7_wBoAh*m!$e6y}[=qq+u5&xEq)0*^oC`Da!>' );
define( 'NONCE_SALT',       '3}]UG&8Jwo*pFMYshiBIm#O%1FkiZB9r7OBi,#2N^p1+chJGx9|MDwUyaV}~i?v<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
