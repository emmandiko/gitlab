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
define( 'DB_NAME', 'competribunal' );

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
define( 'AUTH_KEY',         '9s[J%-Ni^ecjueNVB7JWoupDM0O,XmAQ!>E=<KR_vp^Zc>GGD{06;T/9KGx,+Ugt' );
define( 'SECURE_AUTH_KEY',  'b4L<lw_S%h#SL^Rjd2ev~^]gqwfwGMRw;%hojR!N8UDbL-wT$Gy,7KY*m<QYgRPr' );
define( 'LOGGED_IN_KEY',    '>9ekN.^3at?e4.!r$eYr^ai%3T!hfOwgSP{vFD,)2iY?v&m:0ly R2ZPt4iQ!E7]' );
define( 'NONCE_KEY',        'v{;E[Y3w@C8XkXt!gL91uV+m;K=q)Mc%su[;=:PO=~>C{=1PNC4Us_!<=61cc[Fx' );
define( 'AUTH_SALT',        '*Wvd-R{WGcltef ;0^6AJd4S$PD;EkV5`Va%8Fj%:(JiJESHMOFyYhWk=m{hlZO8' );
define( 'SECURE_AUTH_SALT', '-m_y{Tq0uU{6[Y$6oV@!! !51?EPDF6p%lbMe:$yi`E`JqZ &[|^M#&r9_zg,#2=' );
define( 'LOGGED_IN_SALT',   ';d1j9)8eps:6@g!2[FM 3.(&I&I-!!x/h>VXr/(LDZfTzymF4[FkPJ%_tY#}J+.S' );
define( 'NONCE_SALT',       'Qtmlgz[>;f;E8q`_:HTc+VD#AF&<qS&yx4o*| a>bP3PPPJknyI1*&mS#688rW1e' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tribunal_';

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
