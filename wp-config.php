<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Education Site' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*|:r%ae<]HjQ5iE8c+W7E.X]xueBtA5Pd@k{8d3~CEj1NXVAwDNt!@fh& }9#6%K' );
define( 'SECURE_AUTH_KEY',  'O*<:pylK!3kf~J=9^a-yo8ygBH{w?`raq!c7>M|l,nJ3QMCY].kTA$Pf`0c7pA;q' );
define( 'LOGGED_IN_KEY',    'nKmvDR2;jq-A/U&rTDLN_@uI+wOEa]%GndBCc^N[NfIb m/5E]e>!?uY5d6$y-LQ' );
define( 'NONCE_KEY',        'g#r/5%Ar*PIzyK-/]x^-QN^[?e&2)K@m8i~Ew^gf9umbzHMAgfh@}<+|@Akj67RV' );
define( 'AUTH_SALT',        'Pchd5jg0Owj/.<5 _!5e!gW@iJj}3l!xp*YRkcR%~|u+D<9J26,(jrO%J|J3G;H6' );
define( 'SECURE_AUTH_SALT', ']s_T`{9#aSe9?(fERY0ovmVBZs;8Vg4J%~At?Lo)uUpbI?&hXd8FxKbW *HVZ|| ' );
define( 'LOGGED_IN_SALT',   'yqg@9#CP~)X+)Ny!:DY]+a3YrX 3_u4:>o_Yf<+2~jw~q/4E:sj]dg6z|^xy>O[7' );
define( 'NONCE_SALT',       'P,+60yR3}Wo)zFJZLj?}7:Tcz#%kcy,I)$yppe_r}(p{U15[A SW,wl`BJ_,^`)d' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
