<?php

class OutputController extends Zend_Controller_Action
{

 
    public function indexAction()
    {
       $this->helloworldAction();
    }


    public function moveAction()
    {
        
    }
	public function helloworldAction()
	{
		echo "test";
	}

  
}

?>