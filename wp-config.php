<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('DB_NAME', 'creativelab');

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
define('AUTH_KEY',         '=p_iV?yYJ,t5*OmhWU:pqf`9X*N,e]L780yP~T/N6[]M$g(dt~.gfmpxXM#vd0Bq');
define('SECURE_AUTH_KEY',  'kiDDGhA6(m{:e.3~SMS]+@3 ys,~CSHl{~m147t]KqU<5O:mCR$6H+2aKZjyFa/Q');
define('LOGGED_IN_KEY',    '|=[.Ao~89fsp$]};/0^5oAl3#^5JxBFG.Ve>_a~`{V$ !bH3~x->(p7I|Ko0VsPA');
define('NONCE_KEY',        '=,-2HM dg&@Rx :|i9Uj*PW-m2&)j2(M7&DR7<(>w5>[h#$mlgcP$U2Va8FwMH5e');
define('AUTH_SALT',        'LoC?1V;0lDKtgMP6W7_zh(r6HVJMRCDoz,SEQi_b-V7#[o1b=+.b]P.Z^[K6.o^A');
define('SECURE_AUTH_SALT', '+;VsSw0tAcWZ,kW>B@ggKDTN:?QpU{;~;KT0u-|5+5w,OlWmWIp-. |Bf,6bjzla');
define('LOGGED_IN_SALT',   '|Vko.rd&UQ1R2^N3Ls(X!/#Lfl=YTi{C,1I{)&y-}/{P8jbNn=8o.[5VL;$$WrGq');
define('NONCE_SALT',       'Z]XS:F.vegjV2ypt!ov_iFF:=7s;+Y+`>SmI]-e__@q+g2Rjs|*<.ypq^E&xNfoq');

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
