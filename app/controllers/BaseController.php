<?php

namespace app\controllers;
/**
* BaseController
*/
class BaseController
{
  
  public function __construct()
  {
    echo 'base'.'<br>';
  }

  public function test() {
    echo "test<br>";
  }
}