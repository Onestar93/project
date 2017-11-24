<?php

define('WP_ALLOW_REPAIR', true);
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
define('DB_NAME', 'devcode');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aLlJwBg}$KRPrK`W)t>er6vx;1<)R31*T?T4nwNP!}*t Ae!Q22-8~sXX{@8F4~(');
define('SECURE_AUTH_KEY',  'qfcynP$K20f?y=`2,yWj^cE~>Ba&y4S-P6}k(!(;oE];^uM]v~#P*2Q/eVFV,mkB');
define('LOGGED_IN_KEY',    '0M=sd9~WdP]Jm!(iQ**Iiew:? M|v5G^7 O4NZ>tKHYAfJ^**j[K64p;B,dt,]4.');
define('NONCE_KEY',        'T?q!u7|i^{&$>lR0QWa[0yEg_N=_iq${Caso1H81$=B)bK]%_OoMOL:I:Q*HOZy7');
define('AUTH_SALT',        'Bz!%49^.RWjV2o6maT,JzRWL>i,l,*srQ`:9C$??*_[gG7=s<D+#ixl;mrU=b79t');
define('SECURE_AUTH_SALT', '?r.`KLmQ7SG^Eo1603q/<KCV%?O:MnlXAoF%}x)xR;V?_)iuF),2FO|41>xlHgkl');
define('LOGGED_IN_SALT',   'WmUq=~-@;& kJ`iA3ARU%V^}i%CLpDo8-S>jIeOe21rjFG~IIFHuH5jiW:KD<e{u');
define('NONCE_SALT',       '^xh1LY^b%+*e:UBy<*N@SMbkjqm_XG2!nsL(Q-$`1%7c6f.g25)-I%?<?uZ&.#R3');

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

/* Multisitio */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/devcode/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
