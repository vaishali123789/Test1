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
define( 'DB_NAME', 'pathocare_laboratory_db' );

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
define( 'AUTH_KEY',         'bryvoeh_]4/<Qd]d<.13tNO7_UCp]WhvPxJNNuW~3vI|G93$T57shSxx#F7/RC1}' );
define( 'SECURE_AUTH_KEY',  '@#67i.-X*kob]jIMklS63EW3aVOUzLIp)[E=B&/`0&*kU7s1=+}[tQ)avn{XPXO5' );
define( 'LOGGED_IN_KEY',    'cxs/+j}R1fQ$+jhw=.` X;m]1<tLsb>iNb?042ux2L,*GLi NXY9~6X5Z*7$>E!>' );
define( 'NONCE_KEY',        '~tQ_s3w+H@liO0aie7O42A@pQC@tq*;Af(mF@8>65D8Jnn<a>[rY-R0cXQ6Kw-/K' );
define( 'AUTH_SALT',        '7_Inh7*wAJeRE:WI_P|@($!AhHEB1bwM=`:&?(JJM[M n[d;{W5dvWog/N8R6_[y' );
define( 'SECURE_AUTH_SALT', 'TVh;$J=F4eWwMt{:^;w565OfB!XWheu}3Ls7cst2kS>0|^sU{YN8!qfQrZN9?<4I' );
define( 'LOGGED_IN_SALT',   'nipmvlSKwX14KMYZ=9m*vfrlzZ)g(#]L[Ti,dbCqCczpb?nsT^3%%HjTSPj/e~+o' );
define( 'NONCE_SALT',       '5!WI%fB+DVQLx-!TAz:8/;0T&*%o[zP=Nc(irO*):nusjUvq1`c!d--jBpk#RxFl' );

/**#@-*/

/**
 * WordPress database table prefix.
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
