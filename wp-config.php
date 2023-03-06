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

define('DB_NAME', 'baducvna_database_phulocphat');


/** MySQL database username */

define('DB_USER', 'baducvna_dbphulocphatvn');


/** MySQL database password */

define('DB_PASSWORD', 'phulocphat@789');


/** MySQL hostname */

define('DB_HOST', '112.213.89.59');

/** Database Charset to use in creating database tables. */

define('DB_CHARSET', 'utf8mb4');


/** The Database Collate type. Don't change this if in doubt. */

define('DB_COLLATE', '');

define('WP_ALLOW_REPAIR', true);
/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */
define( 'WP_MEMORY_LIMIT', '256M' );

define('AUTH_KEY',         '~:kOABm[UJ|9(//H[(jP)j/0%1]O@UIsP~DG%Kl12Tm@&0|F&p0Sr0zf_nCk5A%;');

define('SECURE_AUTH_KEY',  'phJl^szpj?{0GtZSu;I69l{8%}?*kzmdW$}Vg*%fI2JRL0+-=6f=x[ ;@N![I:6^');

define('LOGGED_IN_KEY',    '7=9uLfZN#b{MhrNcca9-D$;QaVv<Fb#.t+ w<H$kmrNPOY#{%q(_EKWWHqraThU}');

define('NONCE_KEY',        'VNCXxWkne|u[/~O0etTW*oxLYF^ n8tS)e*uezV.K1vYJGVdW+bRDKXGA#LHuC7?');

define('AUTH_SALT',        'k<X97l];} `iqF6_OF|0JAN68.wJQPv^e&8:3;E63_>glv6`zaG6gFP,4:Ql+PMj');

define('SECURE_AUTH_SALT', 'A9NX^09p{nq5#iZbr(-2qT;%yy$_,%r76aV*({t<HUUSS5UEg}5XPw^1:%S0ZcEF');

define('LOGGED_IN_SALT',   'EiFO+x`@F6aI-r,0%/X.v$o`jTao-{^ea[BqJJ:D8DKa ?]emKQXDjKVX# 7#O9h');

define('NONCE_SALT',       '{msf;w6tI(B6+TInw0poo-zXW#CL[3tSPTC9?QCakm}_-c%~GQL-P-h:*E{EK/Zm');


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'ntt_';


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

define('WP_DEBUG', true);


/* That's all, stop editing! Happy blogging. */


/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');


/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

