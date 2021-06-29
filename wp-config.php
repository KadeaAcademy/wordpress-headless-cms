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
define( 'DB_NAME', 'wp_kda' );

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
define( 'AUTH_KEY',         'v?>AFtbhUEaI?pL,^k8%kQ9qu1Xo*QBrVMPlJ1G!tpj$9tMs:++lBf)zaiAlnqlm' );
define( 'SECURE_AUTH_KEY',  '?O&M6|o_1bGHTb]I$hi8aQDnrDQe-yBrN?@5L=>LG{Dho=b@WM)W|FkBeRa!ZWJN' );
define( 'LOGGED_IN_KEY',    'BYi1CI*nQ>S]?UhDGC=)yij^%QR7fqMfU*B27wj+;WB(RLeF<ii1-Fn-q[c1L2^V' );
define( 'NONCE_KEY',        '=A%q,W<eR5pb~$G=IT$7V2jXj3*H*}[F{?^(u:kh~!fCQMkK7#~a!A;keYF8c>Cs' );
define( 'AUTH_SALT',        '*,P+[]*Gz~`]O4|FAB:rpxp{haeAJ8I*Y|&mh )v_Zh6qsd^LG[;ZV<Lg[{Zk)q^' );
define( 'SECURE_AUTH_SALT', '{IX=LK}:*!OC(E3Q-OI@t6b@139~~%B9~33&/|bcwyMd[Es~%~=@r pEa7n-43]8' );
define( 'LOGGED_IN_SALT',   'r jx&1yov,#qnX%udZyh$vYJ/xhOmf.$--+n[V}2MOsqMYsPEmq-1%d*XaQL(6C[' );
define( 'NONCE_SALT',       'wv|Bh2zX7YbV:XZqziOdIF)~b[7y@jkJYB`Y.l~]]G>#|Qg%UA^iP+<t<(%_azB=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'kda_';

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
