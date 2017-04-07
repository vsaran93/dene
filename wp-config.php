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
 
define('RELOCATE',true);
 
define('WP_HOME','http://localhost/wordpress');
define('WP_SITEURL','http://localhost/wordpress');


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dene');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'K;mi-1=bs_E!#S80BN#e|Q?Bj9{G4miyxB1S{^BC8Z;;<-RZMOuTN}ch~vGIaN:6');
define('SECURE_AUTH_KEY',  '4KA) keJw(r4.pg1OsZP,&XbGYA7|mV]d 8ULMJg(d59Pqi}$- [>?3gj{^HX:ez');
define('LOGGED_IN_KEY',    '!u~AV:a$cP}dg51gJmls3g?M_8f?iw[zT=qV>r8L,u).z#4`w0Mg-|U%Re$1EIAi');
define('NONCE_KEY',        'iY#)w1=lZrF6yKCM(e#bCDq]l_y$eRvl^UmKrE{b/6^FTC>_J!7(m&~^|m>M1M3Y');
define('AUTH_SALT',        '&~*eNAj#`,OlKBa>kRj4Kd >4HSNKNz>&mZgz40#4E3*o7GvpH_f1ar^G6ky[gdY');
define('SECURE_AUTH_SALT', 'W8M]w<{FZvj!3m3H4hFs9QG?SKJn)uBio!ORL^}MQOs+1)8k[UY@eNm4NG?L=>T0');
define('LOGGED_IN_SALT',   '6vp/)_>4:?|wVo#wQZgiSyDEi5|G(Ui#?z,{^v(a/37H&EAq}:J~s&R8HFC2j-k(');
define('NONCE_SALT',       '`k(PWl)t%U{MEc.Vm>zdFH3SHf9wpeF)rFc[Oxkhf|`=r)IPj;s@J/H1hS]R8Dc0');

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
