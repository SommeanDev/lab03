<?php 
namespace Company\Utility;
use Company\Utility\Controller\MainController;

class App{
    public static function init(){
        echo "Hi from App.php<br>";
        $controller = new MainController();
        $controller->show();
    }
}