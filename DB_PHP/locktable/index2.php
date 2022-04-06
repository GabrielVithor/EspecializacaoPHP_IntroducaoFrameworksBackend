<?php
    $pdo = new PDO('mysql:host=localhost;dbname=db_php', 'php', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("LOCK TABLES clientes WRITE");
    sleep(10);
?>
