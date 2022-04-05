<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    #Abstract - classe que somente pode ser herdada
        abstract class Teste{
            function funcao(){
                echo "Estou chamando função 1";
            }
            abstract function funcao2(); #metodo abstrato precisa ser declarado na classe filha
        }

        class Principal extends Teste{
            public function funcao2(){
                echo "Estou declarando o meu metodo abstrato";
            }

            public static function metodoestatico(){
                echo "Metodo estático";
            }

            public function metodo(){
                self::metodoestatico();
                Secundaria::metodoestatico();
            }
        }

        class Secundaria{
            public static function metodoestatico(){
                echo "Metodo estatico da classe Secundaria";
            }
        }

        $abstrata = new Principal;
        $abstrata->funcao2();
        $abstrata->metodo();
    ?>
</body>
</html>