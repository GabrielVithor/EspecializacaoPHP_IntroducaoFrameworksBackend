<?php
namespace Sessao1;
use Sessao2\Classe2 as Classe2;

    class Classe1{
        function __construct()
        {   
            new Classe2();
            echo "Classe instanciada";
        } 
    }
?>