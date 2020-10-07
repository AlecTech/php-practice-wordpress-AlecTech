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
define( 'DB_NAME', 'olegs_blog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':o3k2W>4s&@/+X9hF&bryaU!uKF>3fvXD#K<yZ:Z9JKB&h4SHsf;Y&;NshJ-1nju' );
define( 'SECURE_AUTH_KEY',  'm+$~a|f[Nh3=HC^cG ,0q|U5m,b1I+K%V,:a-!>Ervn>@XTwjIrczSSHw~@Miw?!' );
define( 'LOGGED_IN_KEY',    'VDjf#20pi_fP=H1PCu*:!-khteg7f:F1=i;IlDlYk2VbZXAK z){r}e`*TOu[,Ls' );
define( 'NONCE_KEY',        '#HT0,Y2I:aZaj=8W|lmv[At1nl.z2GsJ!P@2R}Mk.)S_5bu!<+x;5]chBU8A7=g1' );
define( 'AUTH_SALT',        ';+zOnSHhr[/h]VLw#8t$JDj6~o@f_lfIIP,HxbhU,dLvi3=Vgn*CC^-x8BugE)~+' );
define( 'SECURE_AUTH_SALT', 'N?G*JP)edgpQgH7=e&9P4_PnXj|FR49<Y!_qm.uJ6emlH$S0zb^f/f~Q!Y`<2j_[' );
define( 'LOGGED_IN_SALT',   'ckmkA;g%Lx/Z~s-0?2$ bB=,db|uX8A:U8SH;2JQyk9mX(bAF7_Twx(!GLXz$LId' );
define( 'NONCE_SALT',       'k.*KUL5(}0}](#,Xq^zhyhjA[d,6A3pa&tS~&8Rg3B<E;F/|K5%)1f48WiB=NJ$V' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
