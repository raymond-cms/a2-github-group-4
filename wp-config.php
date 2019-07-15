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
define( 'DB_NAME', 'raunakd5_wp503' );

/** MySQL database username */
define( 'DB_USER', 'raunakd5_wp503' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p7mu41S])n' );

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
define( 'AUTH_KEY',         's5oezxaephhvcwhib8ws00rvs9eletkhuehlvmklfclp832iuerm1mc5odlgnzix' );
define( 'SECURE_AUTH_KEY',  'jnwqfyb5vodghz4ashhijffbzqqvhgfan0si9bhjurarfckgjk8axadxgm1q0ez3' );
define( 'LOGGED_IN_KEY',    'acf7qfmemitasrzfjldfybb3zgeypaob9pdrn0qbfvgnnddvytcusfdfk8urklkx' );
define( 'NONCE_KEY',        '4vzbyd2oqgnpw8cijorx9mvva9vukonir8r9hgxotnnec6qomjunl1bqegpvuse6' );
define( 'AUTH_SALT',        'ldwnfcvjvtlmhk3b0kwb9mzautp8ws4brhyhc65xgl5lrnqbfommze5fg87xknmp' );
define( 'SECURE_AUTH_SALT', 'ltuvp7ecltxjhkg1pjbc8ihiqywwpjji4mhho7urvqolck0c6vfka0gvs3idhqoj' );
define( 'LOGGED_IN_SALT',   's1smhldpplcnykz1yjhz8cxxwipgijxxsnjcavu8fckc7omywughdjgeeodt5gkd' );
define( 'NONCE_SALT',       'va43mpiefrwkn9ofhs9qyzo87gfvwd7zfmgbt38o3pfwsglzjfcr0qcttmn39l7g' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp4y_';

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

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

