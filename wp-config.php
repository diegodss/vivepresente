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
define('DB_NAME', 'vp');

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
define('AUTH_KEY',         'P[<Ga$hJIt8S`7*IKjjKh<q/jh&fn1^fF&H&HDYiDpxJ.llUVsCZb@z#FV[]NtpT');
define('SECURE_AUTH_KEY',  'h6G$sU:sVcnDJ^y6<BfK6K_c}|m}%VnI{!Q+%y7F2r}3Xr ,XiGqARYOMKBFLri ');
define('LOGGED_IN_KEY',    'c;3~,;#<[._r1QguGW>q)n00{10xmbjr<q.$}w|.Yrb01d57i&pWl6YkHpAM$u_r');
define('NONCE_KEY',        'N2uBh r]iiW{8SDq^/v.M-r5AJCai*D&#32c& E[#_FR-;J^^1`yq:D9z@&1F?#P');
define('AUTH_SALT',        'qz8XI]xXVcv1y`^!~+FPI^BuZx]iJ(O25]RjFV_L{(O}[`+m&J}wqV>Qh|2#K)y%');
define('SECURE_AUTH_SALT', '8#h4g5^Wtmgy.wY7w3XwYm6f~=eO+f*c/)*pK!RIt..g.I vZC:f~[C],A`+tbB~');
define('LOGGED_IN_SALT',   'tVM8y)I#!;!mr:]/`d-#C<$m<urx`&toRrL}P=Q?-},q~DJCt<,g@X<BTTAW$.`k');
define('NONCE_SALT',       'm7p#Aso=6N:Vj.m]pxR?x>7rU2*PQ7*^`D@.&QY06LJC$&3FO 7p5#(mci).A_{#');

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
