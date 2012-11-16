<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_REQUEST['app_id'])) {
    include 'indexCrep.php';
} else {
    include ('FormuleInsertion.php');
}
?>
