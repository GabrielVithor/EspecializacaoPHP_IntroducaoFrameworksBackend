<?php
    $pdo = new PDO('mysql:host=localhost;dbname=db_php', 'php', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare("SELECT * FROM clientes");

    $sql->execute();

    $clientes = $sql->fetchAll();

    foreach($clientes as $key => $value){
        echo $value['nome']."<hr>";
    }
?>
