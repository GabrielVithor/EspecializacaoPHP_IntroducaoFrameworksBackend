<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      echo "<h1>Utilizando foreach</h1>";
        $nomes = ['Gabriel','Vithor','Conceição','Mota'];
        foreach($nomes as $key => $value){
            echo "$key => $value <hr>";
        }
        
        echo "<h1>Utilizando a função count do php</h1>";
        $total = count($nomes);

        for($i = 0; $i < $total;$i++)
        echo "$nomes[$i] - ";
    ?>
</body>
</html>