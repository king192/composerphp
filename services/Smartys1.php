<?php

require '../vendor/smarty/smarty/libs/Smarty.class.php';

class Smartys1 extends Smarty
{
    public function __construct() {
        parent::__construct();
        $this->debugging = true;
        $this->caching = true;
        $this->cache_lifetime = 120;
    }
}