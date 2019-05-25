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
define( 'DB_NAME', 'ampjobco_wp450' );

/** MySQL database username */
define( 'DB_USER', 'ampjobco_wp450' );

/** MySQL database password */
define( 'DB_PASSWORD', '9-X8pS(8WM' );

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
define( 'AUTH_KEY',         'xhdupcvepuuvtdztzyvqplbndhzy52qzlkah5z6eemvukuhiw0xbssbjapndf2f2' );
define( 'SECURE_AUTH_KEY',  'smwc4fthubr8hufgjiw3otfnmkszlfutcein4qlklo97jbyt85worg7lgutr68vp' );
define( 'LOGGED_IN_KEY',    'mvk373rxnb68fvxclycvy8cbnjk41vuicrgg93akp6dxtibhaelevk1h7wtfb944' );
define( 'NONCE_KEY',        'jidvwi6zx39jgu5t4emmt0vlvbwr6tkiwx4vw2rdkfme1joxohgeypqapk2cfyjv' );
define( 'AUTH_SALT',        'swiykqpxivwti3ln7azz6yciqiqrz812okth4tf5skskmpjl6nxbejv7z2etksz6' );
define( 'SECURE_AUTH_SALT', 'uc9zwrsm3wkjpe91b0apf2k4uhjxyey1vm6fsfsmq4id7ep1irlfbgfymxnjrmhq' );
define( 'LOGGED_IN_SALT',   'qhzfv51ezassyfbwinxq7p2xoig09epenyoqwjnezlkskgvrxi8j2cxyd9ug4ppo' );
define( 'NONCE_SALT',       '8nctgrrht9inzf84i1f6j0il8mmnux1ouqnkkvn1vgd9imkllwwers4f7alfnuwk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp56_';

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
define('FORCE_SSL_ADMIN', false);
define('WP_SITEURL','http://www.ampjob.com.np');
define('WP_HOME','http://www.ampjob.com.np');