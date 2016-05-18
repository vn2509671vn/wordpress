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
define('DB_NAME', 'mtwing');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**Debug bar*/
define( 'SAVEQUERIES', true );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '(}4+L=y`+C_1WoAkt?`(jPP?[SF89(wU}zfAt$Ge{t}jQt3]%dgV6skB],Y_Dojr');
define('SECURE_AUTH_KEY',  'Y6^|U,75J+;I]C(z?=5{d1h^nF0SVH@ aS[K/?0Wmy[Lz hAM_HPm+pR<YTLM;^D');
define('LOGGED_IN_KEY',    'B8G;?3rN9HonVQEF~hCn-p 4w:WP?$Ghzy])n#11aA#xu%0AvX.Ujpx`>OZ,3X5m');
define('NONCE_KEY',        'Vf_U5YZrDWT]l9#D;5{W=:U{t(PEUe[`3-[uDFT20lW>-Af/Pw$YgKU7@JoAPv?/');
define('AUTH_SALT',        'aucx(kN.~,Z_,Yg$q76p}S[p,.Gl,m&lDdTy4gHir*VFN#JjtYK6WL_ 34r!YzY_');
define('SECURE_AUTH_SALT', 'AK!fx2O&;[rSg A<P)L__H)nGJf-N_71.7Us@+ZMSZ*CxGrarpb4iFJ!wc@>^v1G');
define('LOGGED_IN_SALT',   'ZX0Xt1/N52^*O~mXp61$nivbY+}A,mnQ}w Fg9ec,[zZJR(S!g +=U6_ ]`]^|Bm');
define('NONCE_SALT',       ':E5lLPNhYPY@0JeH~]jX_KN:b`GgYrLu?1nfRY,#h2f)H.[%ulyu*%0/e2)(&hs~');

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
