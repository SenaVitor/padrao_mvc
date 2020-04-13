<?php
namespace Src\Classes;

use Src\Traits\TraitUrlParser;

class ClassRoutes{
    
    use TraitUrlParser;

    private $Rota;

    #Método de retorno da rota
    public function getRota(){
        $Url=$this->parseUrl();
        $i=$Url[0];

        $this->Rota=array(
            ""=>"ControllerHome",
            "home"=>"ControllerHome",
            "sitemap"=>"ControllerSitemap",
            "carro"=>"ControllerCarros"
        );
        
        if(array_key_exists($i,$this->Rota)){
            if(file_exists(DIRREQ."/app/controller/{$this->Rota[$i]}.php")){
                return $this->Rota[$i];
            }else{
                return "ControllerHome";
            }
        }else{
            return "Controller404";
        }
    }
}
?>