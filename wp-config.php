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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_dev' );

/** Database username */
define( 'DB_USER', 'wp_dev_admin' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'd{0^D.yN^Q-,>3s3cLbbshU;I^xpYHZ?iXIkMs(eEO`R9^DWCv{FxhkNz7|#}O.T' );
define( 'SECURE_AUTH_KEY',  '2<1S|AP }Hvc=j !-u> *a-xSw%ad$A5br/N8ru[w:fb%%ZmwOMJTC4kD,K^*N#^' );
define( 'LOGGED_IN_KEY',    'e/g+KYC2I is{w5D4nn L}/Amr>+gJA0z;Jh90VkiYx*lX{u{AGGXxp|}@VKs*xE' );
define( 'NONCE_KEY',        's}B5C.z6nAzV)%D*@z6vcHRmi?%nIyb52x0q%w5m3^lrmU>#|0a@$K`.ed?-bb`6' );
define( 'AUTH_SALT',        '>)C:AzZ]!r|V^*3@_1`5_2>[j|Y>$NLA3A6t,N.,}47-imXK{sRBjMNnAo%?yYuX' );
define( 'SECURE_AUTH_SALT', 'll:LXP(LFPB)=[Z~*HB|ydE2a.Y9@.$d,swNT6O B/+{9g..(FG3N~=%xw05@c.h' );
define( 'LOGGED_IN_SALT',   'w6aNEF0Y;nAwr75,zRfCZiNl>,j:%5Q&mCO&(AOn/J:sO&;VQNTtlDjXB*z?hAaf' );
define( 'NONCE_SALT',       's?4eKNEUB}3V{geMC*5;6SGLik{/i=!|7!N[jH;!$zJti1oPBIaLS#ek=_VH3`<{' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
