<?php
$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db = 'galaxie';

$galaxie = mysql_pconnect($db_server, $db_user, $db_pass) or trigger_error(mysql_error(),E_USER_ERROR);
?>