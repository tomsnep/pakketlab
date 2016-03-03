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
define('DB_NAME', 'pakketlab');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'VS>QGEbZyrH8F|1vu`(#+RV<iB~})Zu@3SwJ&1!e~fW|-jzmcC_hA_ggJG6=*5rj');
define('SECURE_AUTH_KEY',  'qF =3ndT_W3{WY[@vG3^O6Nr{|G<>c~!`wy}CUJD1.*d^BD%L>8gc8x1H|C l;U#');
define('LOGGED_IN_KEY',    '$+G~Lkce:tvy(6}MX?(+#Ss_ZO|>&(yOEj[*LoWcY`<p=?+a?J.a=(L|G)DsFs&4');
define('NONCE_KEY',        '6S-W-<[NtM(/BDS-Zkc}>85vJw@Fse~EQ,$eujtC`/Y?B~2}Brun7R6x?U1Xz>Q@');
define('AUTH_SALT',        'BO%l7w=9sa9i:(R6r(GqoD<z_J+U3vY;|J-W?Qn|G2wxxte~)KzD0~jGTTX41V*z');
define('SECURE_AUTH_SALT', 'a OUCLr+k0}} 2=%:R<j>LFDYwT _z*Ks0+[9({mQ*},+++;K-_4ctNdYa=wO6>T');
define('LOGGED_IN_SALT',   '@UJ.6dAU3)lN>q(SuI@1f-xVrvaLq.73F>D-w?&aTj,YLM3`c$0Lx6@Q%>$PE]3A');
define('NONCE_SALT',       'b]v39*K8bY6}w+}=R&u(v:sr,c9,P$>2&9 wyW-hdhv+VIo}R!]=A,XI)I!M#-O<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
