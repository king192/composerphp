<?php

namespace app\controllers;
/**
* BaseController
*/
class BaseController
{
    protected $view;
  
  public function __construct()
  {
    echo 'base'.'<br>';
  }

  public function __destruct()

  {

    $view = $this->view;

    if ( $view instanceof \View ) {

      extract($view->data);

      require $view->view;

    }

  }

  public function test() {
    echo "test<br>";
  }
}