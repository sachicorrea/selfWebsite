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
define( 'DB_NAME', 'selfDb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'eight8einstein&' );

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
define( 'AUTH_KEY',         'q$$ODy:7t~o0.hI*AMf!L<C3aPp_OfzY##04I)3zi0B-H;lFdJ2 ?uERr@&LBKO,' );
define( 'SECURE_AUTH_KEY',  'bJ2f*=G&+CPh47rHpt?dJw%Hy[-=b^a1s8zq]v2U6Pn2P~<lw):5h`[LeNlDdgY{' );
define( 'LOGGED_IN_KEY',    '/c^+*E$(p9C?vbwwK$1o@,xW92l7<u>}8|F^0pw#mx&_{QIL|ascya0JW4x2^{jy' );
define( 'NONCE_KEY',        'of!P=MiBlf2&^<% NrqI@%$9/5fAFzqfy?h^t?649JljYlx,UuY;lR9-/5*GdAg^' );
define( 'AUTH_SALT',        'qI$&~5j:^(,lNE1U<O%adNd=z0npMYr71ymsgjUahkHi=yM$$Y8~2<X1~S%`<P[/' );
define( 'SECURE_AUTH_SALT', '(ky]c[r0v@7u3!%y86P`2l9@<[wtghsyy69^jf%w$c8]@yg)`f^TEOi:q8ar&kx4' );
define( 'LOGGED_IN_SALT',   '41%>Ae0]u(nQtGArTx@I:D]?9j1*8GqCm>at[DTL-XR 2#y36d$=;`bl?F:qB*vd' );
define( 'NONCE_SALT',       '???Rzr3(`t40A+*nxf-=2/Xy=r3w%uqY.]uS4@?nf54N&x^+wV0g%{Wh#oLnugcS' );

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
