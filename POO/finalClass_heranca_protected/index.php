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
    //Final class= esta classe nao pode ser herdada(extends)
        final class filha{
            function mostrarOlaMundo(){
            echo "Ola mundo";
            }

    
        }

        class Pai{
            public function mostarTchauMundo(){
                echo "Tchau Mundo!";
            }

            protected function protegida(){
                echo "Testando protected";
            }
        }

        class avo extends Pai{
            function teste(){
            $this->protegida();
            }
            function mostrarOlaMundo(){
                echo "Estou mudando o mundo!";
            }
        }

        $pai = new Pai;

        $pai->mostarTchauMundo();

        $filha = new Filha;
        $filha->mostrarOlaMundo();

        $avo = new avo;
        $avo->teste();
        $avo->mostrarOlaMundo();

    ?>
</body>
</html>