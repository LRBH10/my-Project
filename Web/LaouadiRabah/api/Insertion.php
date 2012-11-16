

<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 http://localhost/LaouadiRabah/api/?controller=ApiRecive&action=creer&titre=facebook&description=fuckfacebook&lieu=ALGER&username=bibouh&userpass=rabah123
 */

// Define path to data folder
define('DATA_PATH', realpath(dirname(__FILE__).'/data'));
 
//include our models
include_once 'models/ApiElement.php';
 
//wrap the whole thing in a try-catch block to catch any wayward exceptions!
try {
   //recuper tout les parametre POST/GET request
   $params = $_REQUEST;
 
   //recuperer le controleur apartir de son nom
   $controller = ucfirst(strtolower($params['controller']));
 
   //de meme pour la function de l'action
   $action = strtolower($params['action']);
 
   
   //check if the controller exists. if not, throw an exception
   if( file_exists("controllers/{$controller}.php") ) {
      include_once "controllers/{$controller}.php";
   } else {
      throw new Exception('Controller is invalid.');
   }
 
   //instancié le controller
   $controller = new $controller($params);
 
   //l'existance de la methode
   if( method_exists($controller, $action) === false ) {
      throw new Exception('Action is invalid.');
   }
 
   //execute
   $result['data'] = $controller->$action();
   $result['success'] = true;
 
} catch( Exception $e ) {
   //catch any exceptions and report the problem
   $result = array();
   $result['success'] = false;
   $result['errormsg'] = $e->getMessage();
}
 
//le resultat
echo json_encode($result);
exit();
?>
