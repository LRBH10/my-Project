<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */

$def = new ezcPersistentObjectDefinition();
$def->table = "articles";
$def->class = "Article";

$def->idProperty = new ezcPersistentObjectIdProperty;
$def->idProperty->columnName = 'id';
$def->idProperty->propertyName = 'id';
$def->idProperty->generator = new ezcPersistentGeneratorDefinition( 'ezcPersistentNativeGenerator' );

$def->properties['titre'] = new ezcPersistentObjectProperty;
$def->properties['titre']->columnName = 'titre';
$def->properties['titre']->propertyName = 'titre';
$def->properties['titre']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

$def->properties['contenu'] = new ezcPersistentObjectProperty;
$def->properties['contenu']->columnName = 'contenu';
$def->properties['contenu']->propertyName = 'contenu';
$def->properties['contenu']->propertyType = ezcPersistentObjectProperty::PHP_TYPE_STRING;

return $def;

?>
