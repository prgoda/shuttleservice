<?php
session_start();
require_once('vendor/autoload.php');

$FBObject = new \Facebook\Facebook([
	'app_id' => '415255975709893',
	'app_secret' => '0ee4ae6b8f2ab5dd2370ad2768c13a65',
	'default_graph_version' => 'v2.10'
]);


$handler = $FBObject -> getRedirectLoginHelper();

?>