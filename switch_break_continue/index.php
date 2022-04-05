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

    $nome = 'Gabriel Vithor Conceição Mota';

    switch($nome){
            case "Gabriel Vithor Conceição Mota":
            echo "Minha variavel é Gabriel Vithor Conceição Mota";
            break;

            case "Mota":
            echo "Minha variavel é Mota";
    }

    echo '<hr>';

    for($i = 0;$i < 10;$i++){
        echo $i.'<hr>';

        if($i == 5){
            $i = 7;
            continue;
        }
        
        if($i == 5)
        break;
        
    }
    ?>
</body>
</html>