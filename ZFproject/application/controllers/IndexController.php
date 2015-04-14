<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
      $this->helloworld();
    }

    public function indexAction()
    {
	  $this->goodbyeworld();
    }
     public function helloworld()
    {
       echo "hello world! <br>";
    }
      public function goodbyeworld()
    {

       echo "goodbye world!";
    }


}

