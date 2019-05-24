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
define( 'DB_NAME', 'ClientPortfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'I_WwOZVxd #qB}aK5eZgCpl?s!GMT{4nQ *-2uX}GZYbf]3[>jI=8*M+{_Xi:)},' );
define( 'SECURE_AUTH_KEY',  'v%MWAJ(04`whV&QcYyd0Fs]gi[~=:<oU;`EpEWc!pitc[DU<B!==Vw>fX fXy-Al' );
define( 'LOGGED_IN_KEY',    'd?:ATcMdD2=p?bQadbHS{Vo /t ^bC=zO0WSt~NDoT ]zdZh7>9;b3e?41)+q|Bv' );
define( 'NONCE_KEY',        '2`{p30!pXlv%mndTlC-&$E2GRlPKF$_3$3Yr1ATotXG;Cp5tt>77^]E*6$pa;]CG' );
define( 'AUTH_SALT',        'tF R $9D;c?lEoDBz(,9kouYsp+Dmz-FM?]J@[^)3bIfh_>b<gMzW>Lb]-g}|>dv' );
define( 'SECURE_AUTH_SALT', 'upqBs4[wFIvyG5NSjCPEI>H=H58m.z0bdM>z,2q8a$.. V@(y+|A!y`rN!UtOSDz' );
define( 'LOGGED_IN_SALT',   '(UF&?h~7I,5Bkq(|ukvCv,xGOKf=H0v164mU^1,V,v]!EuO^,6{-:MgO!7xFy/1e' );
define( 'NONCE_SALT',       'JogR5aiFor_1xJk*bT-#Wi]vQSU2|3I>A.KPA-N)CvGTMaoCanFv*[0!0eP<QeA>' );

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
