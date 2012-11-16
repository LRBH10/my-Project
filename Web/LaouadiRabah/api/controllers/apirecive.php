<?php
class ApiRecive
{
	private $_params;
	
	public function __construct($params)
	{
		$this->_params = $params;
	}
	
	public function creer()
	{
		//Creer un nouveou element 
                $element            = new ApiElement();
		$element->_titre        = $this->_params['titre'];
		$element->_description  = $this->_params['description'];
		$element->_lieu         = $this->_params['lieu'];
		
		//sauvgarder dans  un fichier 
                $element->enregistrer($this->_params['username'], $this->_params['userpass']);
		
		//Mettre a jour le client
		return $element->toArray();
	}
	
	public function recuperer()
	{
		//recuperer tout les elements au mement de connexion de client 
		$elements = ApiElement::getAll($this->_params['username'], $this->_params['userpass']);
		return $elements;
	}
	
	public function modifier()
	{
		//recuperer l'element
                $element = ApiElement::getElementApi($this->_params['element_id'], $this->_params['username'], $this->_params['userpass']);
		
		//le modifier
		$element->_titre       = $this->_params['titre'];
		$element->_description = $this->_params['description'];
		$element->_lieu        = $this->_params['lieu'];
		
		//ecraser l'ancienne fichier 
		$element->enregistrer($this->_params['username'], $this->_params['userpass']);
		
		//mettre a jour le client
		return $element->toArray();
	}
	
	public function supprimer()
	{
		//recuperer l'element
		$element = ApiElement::getElementApi($this->_params['element_id'], $this->_params['username'], $this->_params['userpass']);
		
		//la supprission
                $element->supprimer($this->_params['username'], $this->_params['userpass']);
		
		//mettre a jour le client
		return $element->toArray();
	}
}