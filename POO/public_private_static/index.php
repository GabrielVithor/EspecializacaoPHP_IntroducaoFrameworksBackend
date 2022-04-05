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
    include("exemplo.class.php");
    echo "<hr>";
    $exemplo1 = new Exemplo();
    $exemplo1->var2 = "Var 1 - Exemplo 1";
   

    $exemplo2 = new Exemplo();
    $exemplo2->var2 = "Var 2 - Exemplo 2";
  


    echo $exemplo1->var2;
    echo "<hr>";
    echo $exemplo2->var2;
    echo "<hr>";

    Exemplo::$var3 = "Outra variavel"; // nao pode assumir um valor para cada objeto, é statico
    Exemplo::metodoestatico();
    echo "<hr>";
    echo Exemplo::$var3;



    $exemplo2->setVar1(10);
    echo "<hr>";
    $setVar1 = $exemplo2->getVar1();
    echo $setVar1;
    echo "<hr>";
    ?>
</body>
</html>