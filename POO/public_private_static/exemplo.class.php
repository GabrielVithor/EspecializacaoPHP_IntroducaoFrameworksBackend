<?php

class Exemplo{

    private $var1;
    public $var2;
    static $var3;

    #Pode ser usado fora do objeto
    public function metodo1(){

    }
    #So pode ser usado dentro do objeto
    private function metodo2(){

    }

    public static function metodoestatico(){
        echo "Metodo estatico";
    }

    public function setVar1($var1){
        $this->var1 = $var1;
    }

    public function getVar1(){
        return $this->var1;
    }
}
?>