<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
       
    }


    public function moveAction()
    {
        
    }
	public function helloworldAction()
	{
		$this->render('helloworld');
	}

    public function goodbyeworldAction()
    {
        $this->render('goodbyeworld');
    }
}
