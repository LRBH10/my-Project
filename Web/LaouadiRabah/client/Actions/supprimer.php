<?php
session_start();
include_once '../apicaller.php';

$apicaller = new ApiCaller('APP001', '28e336ac6c9423d946ba02d19c6a2632', 'http://localhost/LaouadiRabah/api/');

$new_item = $apicaller->sendRequest(array(
	'controller' => 'ApiRecive',
	'action' => 'supprimer',
	'element_id' => $_GET['element_id'],
	'username' => $_SESSION['username'],
	'userpass' => $_SESSION['userpass']
));

header('Location: ../actions.php');
exit();
?>