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
define( 'DB_NAME', 'BLOG' );

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
define( 'AUTH_KEY',         '~a~H3Geij_Kws*FO>Z`xu=PDk9i<[By1[l.@[ c=F4tclIFM>,Lb-4FNG$A ,5e}' );
define( 'SECURE_AUTH_KEY',  '7vsH]/;2R?}mD)rYn[rHOAv:nT*uh.q:?M$O=6q6l#6Nr3M8CE9,}:X .!dtOu-*' );
define( 'LOGGED_IN_KEY',    'nb]fXx|HY7QX>5CL=*fFx]Tf##oAfpHYs#8q)^hrS~g,o|r%A)>n4D:.XSY%KxIJ' );
define( 'NONCE_KEY',        '9&&P(D7+5Y0^C;l/+[B[=nMn)o`<YGfkTFLtW:81h,7U-Wl,`O>#R^%A/h2 D5^A' );
define( 'AUTH_SALT',        'pR}xHSa:[xFo&Fqvb*_A?Ndw=`vR[m6ZBa 1P$$- F#NBH}d:Or$.xBuYd@jKFS$' );
define( 'SECURE_AUTH_SALT', '7/{4ny`z9QF+y<$?qZsKiy}uqDCxBMzC@SDG[*d;9@F<OGUvz+KF8S?(2a=j>6%w' );
define( 'LOGGED_IN_SALT',   'pkZpQ(0UGb#MN`#kr89Cf3}(4A:84TsF)k#U_FJB0C<{5Io!HT6v9Y(x*xV&lz{q' );
define( 'NONCE_SALT',       'kk(`-b<]DKK{mNu${^)V1fI>~i,A6cLSv-Pz&_9.Icx+8LqHQJDv*2(29n7hEY:l' );

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
