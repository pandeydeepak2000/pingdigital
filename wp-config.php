<?php
/**
 * The base configuration for WordPress for pingdigitalmarketing.com
 */

// If local configuration exists, load it
if ( file_exists( __DIR__ . '/wp-config-local.php' ) ) {
    include __DIR__ . '/wp-config-local.php';
} else {
    // Production cPanel Database Configuration
    define( 'DB_NAME', 'earningin_pingdigital' );
    define( 'DB_USER', 'earningin_pingdigital' );
    define( 'DB_PASSWORD', '(d0,+Cdod_JL8ie0' );
    define( 'DB_HOST', 'localhost' );
}

define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         'pdm_9x8@v#42!wKz_p9011933#@mjsdpq_' );
define( 'SECURE_AUTH_KEY',  'pdm_99v_q8@11#4Lzx_mj450911_pdmpq!#' );
define( 'LOGGED_IN_KEY',    'pdm_Lz9011_mjsdpq#4!x@99v#42_pdm!#@' );
define( 'NONCE_KEY',        'pdm_pq#4!xKz_q9011933#@mjsd@99v#42_!' );
define( 'AUTH_SALT',        'pdm_4!xKz_q9011933#@mjsdpq_@99v#42!#' );
define( 'SECURE_AUTH_SALT', 'pdm_q9011933#@mjsdpq_@99v#42!4!xKz_!#' );
define( 'LOGGED_IN_SALT',   'pdm_mjsdpq_@99v#42!4!xKz_q9011933#@!' );
define( 'NONCE_SALT',       'pdm_@99v#42!4!xKz_q9011933#@mjsdpq_!' );

$table_prefix = 'pdm_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
