<?php
/**
 * File containing the index.php.
 *
 * @version //autogentag//
 * @package ezcDemo
 * @copyright Copyright (c) 2011-2012 Guillaume Kulakowski and contributors
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */

require '../config.php';

// Instantiate the dispatcher configuration object.
$config = new helloMvcConfiguration();

// Send the configuration to the dispatcher, and run it.
$dispatcher = new ezcMvcConfigurableDispatcher( $config );
$dispatcher->run();


/*
 * Use DB connection
 */

//$db = ezcDbInstance::get(); 
/*
 * Use PErsistentObject
 */
// Create and configure default persistent session
//$db = ezcPersistentSessionInstance::get();

/*
$object = new Article();
$object->titre = "Guybrush Threepwood";
$object->contenu = "blabla";
$db->save($object);
*/
?>
