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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c/YRvSeHq4qyg3jTWQmrXEbdHqJe9o6NtwVOKbC2p07Y+VgOv19Z+1wE4s3+l6Q0WjhrCHGQeciTHS1X/bPBuA==');
define('SECURE_AUTH_KEY',  'bFrxNLlDPXGAOYTtwCLWQOxCmQUXr/ep8njk8+E1hzkuM8NPxMPA4EqHuJf01TwJL9MW2VsMZ/gvVwDLUhtOww==');
define('LOGGED_IN_KEY',    'vDXSnT+SjSSczAXOVjy78Zhn1ZPcDQo7sIo6O37LRcjulKEv5p95FftpNXOM7ziC+gFLyqvxwrCrACxoU0k1jQ==');
define('NONCE_KEY',        'l8YLweQK/stPM8ZYIZNpFs7hmeSJHX+cCh87lsYkbr/7VFSJxTJ8OHifosFtAiQt5nRGbr7VZgtoE6g4qYHRXQ==');
define('AUTH_SALT',        'yTNzeETv0rF0Qf8X8iaiTSPy1shbi2Ju8VFYQO5Drqy0usIutCB7OKUNXQaLdBi6/Pg3rtQWX8Av1ci/V+oeCg==');
define('SECURE_AUTH_SALT', 'a4rodFQSkK3zmt53/62jfHf68L5B8qKPPf3UDEELeaOJsRE1PmCoMVvrGRcQUyMkDhNfAEtjZMM4wJyDGxR0rQ==');
define('LOGGED_IN_SALT',   '7/G6nu7btNbs7pgEiYa+35cc6UPnrqvrYLypKf5ZvZvQJ2mPCSptWF8wgWZkjc5j4TE4skBcimzcM65pVGHM/Q==');
define('NONCE_SALT',       'BFsYp8qg7ctiVk0BJGGZINOkxs4yGOykorbu01yhJo3Pr5SFLHksUwakGN+0W15opYAy22AbztVUFRn9k/SOoA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
