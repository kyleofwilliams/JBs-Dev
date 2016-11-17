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
define('DB_NAME', 'jbsonthebeach_wp');

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
define('AUTH_KEY',         ']=YBUiij)?@N7KGk#8KaEQ.f`s P|i1K=]!z+ictTqr@9ts|y-nKz*52 gVqb<Uc');
define('SECURE_AUTH_KEY',  '<p6WE?1FMpz8K`9q. f2Ko/p1971waL^oi$iZ$}]$&;8ra=Hf#CqpzZh`d<J$vg$');
define('LOGGED_IN_KEY',    '30wMTo2}A:q=5a]W#d3Ly4nDZZJ<m![,kya!&[$2<%H[J`+m4qI]N=]L,?9v0)~|');
define('NONCE_KEY',        'ippe6pbx/d}]H9OB2BXjGJsu:F[bs#|6@lF-Jo>] a8c,KED*#XHQKcyox@0o]+w');
define('AUTH_SALT',        '1:vhD%ydicKkVM~{iT{J6:f;zh?@O3NW`8X7?5HT.E[g+wcvIuW]q[Ea]Pnzd^%p');
define('SECURE_AUTH_SALT', 'Vu<<+r*?JNcH^v6gTmE#Ak!JH^/RQ% Gm5~&B_BV+-x8tDNYC.()6%g1C=PQ)$5n');
define('LOGGED_IN_SALT',   'cO;a&M42Np=Nk*3eJI;;31B)VqRy]8%p|! fvOpA_x.HyWp]vBp_^}8Rxr.zKxj ');
define('NONCE_SALT',       '<Wz7%L]X OxKTi^H&Xl#(-l~0}PARk,!?qVBi?7(OG95w-3;*M/m%Qq.jr1]qV$4');

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
