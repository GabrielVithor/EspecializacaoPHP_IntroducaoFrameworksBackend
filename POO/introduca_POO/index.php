<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Introdução a Orintação a Objetos</h1>
    <?php
        class Pessoa{
            //Objeto Pessoa

            private $nome = "Gabriel Mota";
            private $idade =23;
            private $peso = 66;

            public function crescer(){
                    echo "Estou crescendo";
                    $this->comer(); # $this -> utilizado quando estamos nos referindo ao mesmo obj
            }

            private function comer(){
                echo "Estou comendo";
            }
        }
    //Instanciar -> criar um novo objeto

    $pessoa  = new Pessoa;
    $pessoa->crescer();
    ?>
</body>
</html>