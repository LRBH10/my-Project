<?php
/**
 * File containing the testClass.
 *
 * @version //autogentag//
 * @package ezcDemo
 * @copyright Copyright (c) 2011-2012 Guillaume Kulakowski and contributors
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0
 */

/**
 * The testClass.
 *
 * @version //autogentag//
 */
class Article 
{
    /**
     *
     * Attribute
     *  
     */
    public $id = null;
    public $titre = null;
    public $contenu = null;

    /**
     *
     * State
     * 
     * @return type 
     */
    public function getState()
    {
        $result = array();
        $result['id'] = $this->id;
        $result['titre'] = $this->titre;
        $result['contenu'] = $this->contenu;
        return $result;
    }

    public function setState( array $properties )
    {
        foreach( $properties as $key => $value )
        {
            $this->$key = $value;
        }
    }
}
?>
