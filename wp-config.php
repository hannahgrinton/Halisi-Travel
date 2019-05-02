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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', '172.16.144.171' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/*this is a change to use as a text */
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4x8itFi.Nbrfu_Ql$020$eMm^2Rx$k-sX1XUk,* *&|eG^eS^koNq)e<&6)yTZ30' );
define( 'SECURE_AUTH_KEY',  '.r@yhmO9?^d7ls$`ILb[fz9mx_@4*:^CS$K,U1mqg WWn08H+UzfQH^5;)XZ.@UA' );
define( 'LOGGED_IN_KEY',    '#L$0Evgu>~0vGLI,?Qt]eG#AS;YM!iWnk+%!l-&&E2VG!Tiw7~GAb`V=4zO..&Lo' );
define( 'NONCE_KEY',        'G6Rl6nhwmP{K:QZs!<(1hy{;mkGvBOR@Q)c.gx5nEpX^dMC4bS.>lu9n(2 HSqP;' );
define( 'AUTH_SALT',        'qdOX%IVzVG3K>9ptlSo[b?h2OIy{**!xqj3~.Ytg=0xGFam{0A!0#E?Z;iNi16no' );
define( 'SECURE_AUTH_SALT', 'H7t}E1P ex#IqoB}zoR%~[P}p.+:6wJ$lb{g#yDeg%!L{w?7pw<MSL.yi[Tz>@h:' );
define( 'LOGGED_IN_SALT',   ']k!`7>o93utiQ/GD<VKS2%gge_)p^_zP_runa8tlDRc2}zBs+iCaR,`st5?9zrM[' );
define( 'NONCE_SALT',       'RZ362cl}r4UP#a|??S91,HzWekjEY|TBI#J3,szK:Y+Sa`nF/_7AC8M*qXqTU=SR' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
