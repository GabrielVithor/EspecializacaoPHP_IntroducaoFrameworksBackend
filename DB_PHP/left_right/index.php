<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01</title>
</head>
<body>

    <?php
        $pdo = new PDO('mysql:host=localhost;dbname=db_php','php','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Retorne as informações somente do lado que esta sendo referenciado, mesmo que a validação nõa bata
        $sql = $pdo->prepare("SELECT * FROM clientes2 LEFT JOIN cargos ON `clientes2`.`cargo`=`cargos`.`id`");

        $sql->execute();
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach($info as $key => $value){
            echo $value['nome'];
            echo "<hr>";
        }
    ?>
</body>
</html>