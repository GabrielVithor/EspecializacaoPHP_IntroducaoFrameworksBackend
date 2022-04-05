<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Sessoes</h1>
    <h3>
        Fica valido ate o usuario fechar o navegador
    </h3>
    <?php
    session_start(); # inicia sessao
    setcookie("meucookie","Meu cookie personalizado",time()+15,'/'); # para destruir um cookie é recomendado que coloque um valor negativo equivalente ao utilizado ao setar o cookie
    if(isset($_COOKIE['meucookie']))
    echo $_COOKIE["meucookie"];
    
    $_SESSION['nome'] = "Gabriel";
    $_SESSION['idade'] = 22;
    $_SESSION['país'] = "Brasil";
    ?>
</body>

</html>