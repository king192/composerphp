<?php

use NoahBuscher\Macaw\Macaw;

Macaw::get('', 'app\controllers\BaseController@test');

Macaw::get('/home', 'app\controllers\HomeController@home');

Macaw::get('/model', 'app\controllers\HomeController@model');

Macaw::get('/view', 'app\controllers\HomeController@view');

Macaw::get('/mail', 'app\controllers\HomeController@mail');

Macaw::get('/', function() {
  echo "root";
});

Macaw::get('/fuck', function() {
  echo "成功！";
});

Macaw::get('(:all)', function($fu) {
  // echo '未匹配到路由<br>'.$fu;
  // Macaw::$error_callback = function() {

  throw new Exception("路由无匹配项 404 Not Found");

// };
});

Macaw::dispatch();
