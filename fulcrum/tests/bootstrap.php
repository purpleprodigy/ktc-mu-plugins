<?php

define( 'FULCRUM_TESTS_DIR', __DIR__ . '/' );
define( 'FULCRUM_MOCKS_DIR', FULCRUM_TESTS_DIR . 'mocks/' );
define( 'FULCRUM_CONFIGS_DIR', FULCRUM_MOCKS_DIR . 'config/' );


$_tests_dir = getenv( 'WP_TESTS_DIR' );
if ( ! $_tests_dir ) {
	$_tests_dir = '/tmp/wordpress-tests-lib';
}

require_once $_tests_dir . '/includes/functions.php';

function _manually_load_plugin() {
	require dirname( dirname( __FILE__ ) ) . '/bootstrap.php';
}
tests_add_filter( 'muplugins_loaded', '_manually_load_plugin' );

require $_tests_dir . '/includes/bootstrap.php';
