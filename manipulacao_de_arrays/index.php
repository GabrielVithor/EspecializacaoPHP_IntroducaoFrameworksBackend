<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Array merge</h1>
    <h3>Serve para unir 2 ou mais arrays</h3>
    <?php
    $array1 = array("valor1" => "vermelho", "valor2" => 2, "valor3" => 4);
    $array2 = array("valor4" => "a", "valor5" => "b", "valor6" => "verde", "valor7" => "trapezoide", "valor8" => 4);
    $result = array_merge($array1, $array2);
    print_r($result);
    ?>

    <h1>Array intercect key</h1>
    <h3>Intercepta os arrays com chaves iguais</h3>
    <?php
    $array1 = array('azul'  => 1, 'vermelho' => 2, 'verde'   => 3, 'roxo'  => 4);
    $array2 = array('verde' => 5, 'azul'     => 6, 'amarelo' => 7, 'ciano' => 8);

    var_dump(array_intersect_key($array1, $array2));
    ?>

    <h1>Array map</h1>
    <h3>Permite a aplicação de uma função em todos os valores em um array</h3>
    <?php
    function cubo($n)
    {
        return ($n * $n * $n);
    }

    $a = [1, 2, 3, 4, 5];
    $b = array_map('cubo', $a);
    print_r($b);
    ?>
</body>

</html>