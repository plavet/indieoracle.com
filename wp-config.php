<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'indieoracle');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'GVtF)|lHCz}/V;Znu=(WsbI> #`8]fiPT tk|Gc-wVvO6Lig:5QVn^l(cN8[OfF_');
define('SECURE_AUTH_KEY',  ';6YlsH7N?|{|&+u^y5N&lXR#T+pC3/!$PZl/d0iI:}]bwg1~!3USA]i~cbFM[<#l');
define('LOGGED_IN_KEY',    'eUb&UbSWmu~Cw]i[-NF^h6&:&Y-)fn2txGc&t3iJyDJHx@A~gROhm}[Zg*DFMzTe');
define('NONCE_KEY',        'iQ@@$rdv(:f5AM3nP+5 4Y|B{Ew]BCQw`<s.cg@CN-enwalT6`~x;Hxdy`lX&^a/');
define('AUTH_SALT',        '_JuO2~*m*K{/5qN~w}NzNph9_XXWgyDQz^cGwOYIv`W_;q)w6UkM 6sHulyH#.Tz');
define('SECURE_AUTH_SALT', 'CVh4qT)JOoE-0.,$M}wWy.P[[$9+<->deSU`J#.E(jfa=4A%X#5u=K0~C:a*rYTe');
define('LOGGED_IN_SALT',   '|jzUj+0}}$OJT3]ab )d2AFc]7Y5aBm|x]s&&W_M2LoEW6Tq!!13ofe?wy ,IMH4');
define('NONCE_SALT',       'zyBT|<q*8^D`di$b5w^P74O(|7f[|a;3KnkY=H)1L[*LW$VCI{A;qOGK~?s922mb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('WP_ALLOW_MULTISITE', true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
$base = '/';
define( 'DOMAIN_CURRENT_SITE', 'indieoracle.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
