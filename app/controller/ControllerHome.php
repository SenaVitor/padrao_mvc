<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerHome extends ClassRender implements InterfaceView{
    public function __construct(){
        $this->setTitle("Página Inicial");
        $this->setDescription("Esse é o nosso site de MVC");
        $this->setKeywords("mvc completo, curso de mvc, Vitor Lucas");
        $this->setDir("home/");
        $this->renderLayout();
    }
}