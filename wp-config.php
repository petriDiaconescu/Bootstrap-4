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
define('DB_NAME', 'carolina_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'QNg@}dD([roh6+4!m2TeD+#OfKce}&<|#u&Q #O@}]`5NEs>we3lz!=n)@43mQs{');
define('SECURE_AUTH_KEY',  'dR ;*YN$^!=zcW5.Q|:b.#L4f(+$%VGO|u}K.]t*-,n`kdPk//a.A(w)v;,5>hN6');
define('LOGGED_IN_KEY',    'p9lbXVnGQ)NA#1t5[S>lazGySRl/XTOvUjm8U5ZCAKKWC,zQ9VyF&;)Z<n9[gIJf');
define('NONCE_KEY',        'lOB1@R4cLvsO<dlFh9b6=,XUGjDA2<S+IrUgc(dZ.UlHOG4>#e3~r=1=Jb#m0~|-');
define('AUTH_SALT',        ']oLq,xBJ]$XIO&Y<nryx4F~raXsEI`dqgZaorHN!qo/[9WV&%##F.,7-5Ek(W&5)');
define('SECURE_AUTH_SALT', 'kI3Zq:syn,A(4GH:R1%PWglz:Be/o&H0|7T8WD}H8MC)jF-Z0c@1vY|OITAgoy:l');
define('LOGGED_IN_SALT',   'F=o%+CMKP1tShFNxulsDvz^nlJ%{[^qYC$N}oa3zS&Uq4FY}0;0`qbx?[;KT(p5;');
define('NONCE_SALT',       ']5no~]`v8^aJpZE^G3;KV4j<:ON[bq>VQb6s:N1VNA2BGGG%!<JkK.NnVbVLMB(l');

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
