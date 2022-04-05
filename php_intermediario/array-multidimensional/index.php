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
    $array = [['primeiro_nome'=>'Gabriel',"Vithor",'Conceição','Mota'],[21,22,'idade'=>23,24]];
    echo "Meu nome é ".$array[0]['primeiro_nome']." e tenho ".$array[1]['idade'].'anos de idade';
    ?>
</body>
</html>