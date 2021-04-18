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

define( 'DB_NAME', "savealongdb" );


/** MySQL database username */

define( 'DB_USER', "mysavealon" );


/** MySQL database password */

define( 'DB_PASSWORD', "CLoxI7g2" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'f_p9eezsj84DW%4ulpBm7&U _OMG:bRtyim+R!17wGu:(DT.~*yS,eNNz/h_Z5xz' );

define( 'SECURE_AUTH_KEY',  '~E_THfp-u#b%K{mg[9s0;G0]?Jy}A[-,YEb0pl_cdlzz+_YwtL%nMu|Gy#k:5pB0' );

define( 'LOGGED_IN_KEY',    'ogUI.n75<*cN]MCc1b}~/(5q#GUV^-GG8d3pWE{S[B4cX+_<,~`-hDR/MDC+gA_*' );

define( 'NONCE_KEY',        'FV:n-oVG[p>YvQYmkb>m&xnAp32$/Ck!b/-!UMhecI4!Rb4#fQECO7@G[J:l3Z#{' );

define( 'AUTH_SALT',        'vi7j+&w.^}-^%_{-+[t%|y[hD/*+R!Y+{cq-*WP|&c*_Yj@a5l+w-+j=;u]@eX1T' );

define( 'SECURE_AUTH_SALT', '] ?6hF*sp<sB}hyq>IBGd8k<{_IJ<l9U ^ZjAKzV%lk+2:8zEUmU~`o/8;n^Wu!c' );

define( 'LOGGED_IN_SALT',   'h9qv1rhw>|Iq`jY0+O0H-kC)FNm ]<#It5~^oQ!&gPgNl44elQ8=9$ ,_AD+iXu5' );

define( 'NONCE_SALT',       'q0UIo]lMiN Ly!,N:F$9DaA_RSmM+WidNc23M0CsL!t[[ISE3sH3!||*-NVuj%4 );' );


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

define ('WPLANG', 'es_ES');
