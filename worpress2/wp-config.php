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
define('DB_NAME', 'local-theme');

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
define('AUTH_KEY',         'AAXfZD6@N ,x4+24S5PoqX>N!4G}nvcl:!^+&!]ul|Degg(mA*z2l@b%o_iE?JIX');
define('SECURE_AUTH_KEY',  'yA]GpVs0j-o<7-?$DO,bG6PW-^r;JLy0nPXD+p,L*gNs(D2*c2)ekx4DV9M9ndiQ');
define('LOGGED_IN_KEY',    'tw,3xlu11n;)QD|!mh;73-9F,s?`<mT{Y53I32MCAM_cAuHpsgT|;]xgB&JM78`_');
define('NONCE_KEY',        'P&KjV0|;d;X>glQyRP${A/3|dm!`Rq(Xhr9$2(/>e|6+Dol}*Q=(70z_aH3A81YT');
define('AUTH_SALT',        'wSr7iWiNY*l<cdAVC6Mu[|Qf6t8x$eH&hu{at^D BOb@A{Mw)105^m}0=geV^in|');
define('SECURE_AUTH_SALT', 'x,C$R>g2JGTLB:k=O)F!|.-xes(^NuJ;@Pz1I:j+1%zC|8a~2p~+8$V)`O>WG9tI');
define('LOGGED_IN_SALT',   '<4P?ldp+v(]p+%KEv0^z8#D$.|q/haP-]g6Ue~>Db2<>7#Ve?-xtM.] }1_e/G=#');
define('NONCE_SALT',       'r-+fP/<7UdL`~_^N4j^]iF=O/08&W/#R+BAsP`$Fs&:x|K:e}d(Y+)oWeV_bN6ch');

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
