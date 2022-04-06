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
        $sql = $pdo->prepare("SELECT * FROM clientes2 GROUP BY cargo LIMIT 1");

        $sql->execute();
        $info = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach($info as $key => $value){
            echo $value['nome'];
            echo "<hr>";
        }


    ?>
</body>
</html>