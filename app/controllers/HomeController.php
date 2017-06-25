<?php

namespace app\controllers;

use Article;
/**
* \HomeController
*/
class HomeController extends BaseController
{
  
  public function home()
  {
    echo "<h1>控制器成功！</h1>";
  }

  public function model() {
    $res = Article::first();
    print_r($res);
  }
}