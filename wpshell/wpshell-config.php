<?php

$_SERVER['HTTP_HOST']       = 'booyah.caseproof.com';
$_SERVER['SERVER_SOFTWARE'] = 'apache';
$_SERVER['REQUEST_URI']     = '/';
$_SERVER['SERVER_ADDR']     = gethostbyname( $_SERVER['HTTP_HOST'] );
$_SERVER['HTTP_USER_AGENT'] = 'wpshell/1.0';
$_SERVER['REMOTE_ADDR']     = '127.0.0.1';
$_SERVER['REMOTE_PORT']     = '0';
$_SERVER['QUERY_STRING']    = '';

define('ADMIN_PLUGINS', true);

require dirname( __FILE__ ) . '/module-wpdb.php';
require dirname( __FILE__ ) . '/module-fshell.php';
require dirname( __FILE__ ) . '/module-hello.php';
require dirname( __FILE__ ) . '/module-wpreference.php';

require '../../../wp-config.php';
