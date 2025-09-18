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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pearlxct_pearl_fertility' );

/** Database username */
define( 'DB_USER', 'pearlxct_pearl_fertility' );

/** Database password */
define( 'DB_PASSWORD', '#Nl83l!by6yG' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'TaEOs#Hn7R2$(]V5TfHM717Q2)6r:L$anPx4l=_D!f <>_suD)g3%fwdvm5c=<Pj' );
define( 'SECURE_AUTH_KEY',  'RU*Fe$cnUF73t$l1kKDhEs,/ yQwZ/gi3.ZU`Wcv0cP,+hr#vNN!IEF:.-U2vG@.' );
define( 'LOGGED_IN_KEY',    'YvmBWtP%W@K;==Mg%RHLG}g87z{P{*TZE,Fit_9xcG>x~1**%u/KQ (I-E3Ymj;t' );
define( 'NONCE_KEY',        'NE7bkV&TcJmxP`q}T_v!8z@Upv`9luBfhpuhqW&~:OLvce::i0hPMJo,*C|__!EU' );
define( 'AUTH_SALT',        '7:PH5]:p;8K^-N_<GW%}(#]1zQ}CeA0I@i%7yoN:9Mdr=f7%ycz_7fk:00ciQnc#' );
define( 'SECURE_AUTH_SALT', '`6YvL1*^QiDGJrO{2k)V;l>MJ2jLKbEo8IC7YF);nf@6Pw#<% :2.G~mDe#^FBM{' );
define( 'LOGGED_IN_SALT',   'yl6mARn|Eejb`hn7KAS6ik!=!V0A^X0E(^:Bft1r>f;gPv@NiVu[V7/vWE$lEfLA' );
define( 'NONCE_SALT',       'FMTSrTUxZ|1!a1 ;bYvxS18I9.ac 5k1h*Tie[5l2qyFWc{4#_:!$4:Q,K18SzNl' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_pearl_fertility';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
