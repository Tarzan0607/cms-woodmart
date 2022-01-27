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
define('DB_NAME', 'woodmart_theme');

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
define('AUTH_KEY',         'UdKu(uyrTkKLq_9D5>]P3~k~7x@Du)1[*&]RvIkxk58}fT{-kH`DeW{~*724i(B$');
define('SECURE_AUTH_KEY',  'V#>}a(+xGPMkxf[5egZ~D>UID)R35*09j J>iCSKmNnKu*6:I[3frh_4c;:8(>n8');
define('LOGGED_IN_KEY',    'MP>ueb)DXrI!yY-rJEE8ecq6RgBm$Qf3.cRz0q/hq8|fA!hY|RIA9pPJ#s4^Ga6j');
define('NONCE_KEY',        '_wUzr;M2UL9gLB^AY3&Th?&ZT2[$SIgS,JwlY8Ht-cZ@C7r`]FvAJyYuZ{kEy]y*');
define('AUTH_SALT',        '^,zV@=pu^T@LPZ.sG=$I[iN#N`UgJOU-M#wf !PqxsR/X%N.bD5u;#a~2gI@DA.q');
define('SECURE_AUTH_SALT', 'n`^kSf2Ak%wlq%X[)&rbz^xLm>V,J7h]JlmwCf:B4QW%3mU xY<w*dEMUzm0*Cb$');
define('LOGGED_IN_SALT',   's*u:4C1.~bY%L}pWm1C5aUV/NaxUY~K%ybeq(Gv0QIY{RxB>SH-r#D2j[o_@#]?x');
define('NONCE_SALT',       '@$}nKu;p#Fmk=XoDNDylmbLM`Ln=1in*>0DvoJ;c#czo>s(tKF@{10ns_>Bdys+4');

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
define('WP_DEBUG', false);
define('WP_HOME', 'http://localhost:8888/woodmart-theme/');
define('WP_SITEURL', 'http://localhost:8888/woodmart-theme/');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
