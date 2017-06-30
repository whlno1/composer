<?php
namespace core;

class Bootstrap
{

    public function run() {
        if(isset($_GET['s'])) {
           $info = explode('/',$_GET['s']);
           $class = 'web\controller\\' . ucfirst($info[0]);
           $action = $info[1];
        }else {
            $class = 'web\controller\Index';
            $action = 'show';
        }
        //dd($_SERVER);
        echo (new $class)->$action();
    }
}