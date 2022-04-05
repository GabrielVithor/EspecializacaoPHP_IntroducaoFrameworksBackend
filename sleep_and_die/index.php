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

    $death = true;
    if($death == false){
        echo 'O codigo deve continuar';
    }else
    die("O script parou de ser executado");

    sleep(3);

    echo 'Olá';

    sleep(3);
    echo 'olá numero 2';


    ?>

</body>
</html>