<?php

namespace app\controllers;

use Article;
use Mail;
use Redis;
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

  public function view() {
    $this->view = \View::make('home')->with('article',Article::first())

                                    ->withTitle('MFFC :-D')

                                    ->withFuckMe('OK!');
  }

  public function mail() {
        $this->mail = Mail::to(['1434970057@qq.com', 'u@iyouths.org'])

                    ->from('forevervas <15626519209@163.com>')

                    ->title('Fuck!')

                    ->content('<h1>Hello~~</h1>');
  }

  public function setRedis() {
    Redis::set('key','value',5,'s');
  }

  public function getRedis() {
    echo '<br>';
    echo Redis::get('key');
  }

  public function smarty() {
    $smarty = new \Smartys();
    $smarty->api()->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);
    $smarty->api()->assign("FirstName", array("John", "Mary", "James", "Henry"));
    $smarty->api()->assign("LastName", array("Doe", "Smith", "Johnson", "Case"));
    $smarty->api()->assign("Class", array(array("A", "B", "C", "D"), array("E", "F", "G", "H"), array("I", "J", "K", "L"),
                                   array("M", "N", "O", "P")));

    $smarty->api()->assign("contacts", array(array("phone" => "1", "fax" => "2", "cell" => "3"),
                                      array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));

    $smarty->api()->assign("option_values", array("NY", "NE", "KS", "IA", "OK", "TX"));
    $smarty->api()->assign("option_output", array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas"));
    $smarty->api()->assign("option_selected", "NE");

    // print_r($smarty->api()->getTemplateDir());
    $smarty->api()->display('index.tpl');
  }
  public function smarty1() {
    $smarty = new \Smartys1();
    $smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);
    $smarty->assign("FirstName", array("John", "Mary", "James", "Henry"));
    $smarty->assign("LastName", array("Doe", "Smith", "Johnson", "Case"));
    $smarty->assign("Class", array(array("A", "B", "C", "D"), array("E", "F", "G", "H"), array("I", "J", "K", "L"),
                                   array("M", "N", "O", "P")));

    $smarty->assign("contacts", array(array("phone" => "1", "fax" => "2", "cell" => "3"),
                                      array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));

    $smarty->assign("option_values", array("NY", "NE", "KS", "IA", "OK", "TX"));
    $smarty->assign("option_output", array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas"));
    $smarty->assign("option_selected", "NE");

    // print_r($smarty->getTemplateDir());
    $smarty->display('index.tpl');
  }
}