<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	public function __construct($application){
		parent::__construct($application);
	    $router = Zend_Controller_Front::getInstance()->getRouter();
	    $route = new Zend_Controller_Router_Route(':action', array(
	        'module'     => 'default',
	        'controller' => 'index',
	        'action'     => 'helloworld'
	    ));
	   
	    $router->addRoute('helloworld', $route);
	}
}
