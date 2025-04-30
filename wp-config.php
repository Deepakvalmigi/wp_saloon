<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '>MCs{&)ow?P?wdL&!pZ3Q4wc4!8^}:`MiHsg5|<qvXe^0G`oH7O6<sL8~g#}PlKf' );
define( 'SECURE_AUTH_KEY',   'WTw`W X1HY5z#7;yI:Mx$)Y+>&Usv(1]=UNoal4Ln,cVUbN@GGXuURGSI2$sFC^C' );
define( 'LOGGED_IN_KEY',     'e0S.-..i@,h:[D_FR`#tw{=rxvm#)CPNaY2-P)b]C-Nk}F>1+)d2oda@5|e0Gjqv' );
define( 'NONCE_KEY',         'YK},{9{X@bC[@.h$R>Z,o{Yz,5`pc-!*rq6CgF5qle!=Drxl;2ws;,e;1S6s>_]N' );
define( 'AUTH_SALT',         '[O;/^5Vj4rlJm|:gUlm-HI7u@-^Ot|D,qgd|4z{C8YU([&1t/l[+g xFK[I5Y?9v' );
define( 'SECURE_AUTH_SALT',  '[=27%s/?BXJodtiIJ_&^yX%P-%gEZcMdX,{l<Dr~k`^cs;rJu+hx(jWCTPY-Boj.' );
define( 'LOGGED_IN_SALT',    '>DZ|@k;),@ $D|<2,E?8![P!Rqe2?8b7LuuB#rSL.,M.*^VM6!rmf(5lIq8f8IJ?' );
define( 'NONCE_SALT',        'rtWP;_i%Ci]m-pZKcR?=n`doE+fE,>BzSe?4qW*xb<guhVZ97-cZ^@2xg3n]s1IS' );
define( 'WP_CACHE_KEY_SALT', 'IqUT14RyY.=7uXtV5sgf+;ygLqZ:R9DRdVe&:TB4O L:Ur+c:j%)^kcg61vC$Ohf' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
