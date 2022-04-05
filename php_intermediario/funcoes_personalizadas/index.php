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
    
    //Inserção de parametros em funções.
    function mostrarNome($nome,$idade){
        echo "Meu nome é ".$nome.'<hr>';
        echo"Minha idade é $idade anos de idade.<hr>";
    }

    mostrarNome("Gabriel Vithor Conceição Mota",23);

    //Inserção de valores padrao em funções
    function calculadora($valor1 = 0,$valor2 = 0){
        echo ($valor1*$valor2)."<hr>";
    }

    calculadora(12,12);

    //Retorno de informações atraves de funções

    function verdade(){
        return true;
    }
    echo verdade()

    ?>
</body>
</html>