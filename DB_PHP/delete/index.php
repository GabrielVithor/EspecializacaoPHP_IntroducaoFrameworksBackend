<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="">
        <input type="text" name="nome">
        <input type="text" name="sobrenome">
    <input type="submit" name="action" value="Enviar">
    </form>
    <?php
    date_default_timezone_set('AMERICA/SAO_PAULO');
    if(isset($_POST['action'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $data = date("Y-m-d h:i:s");
        $id = 3;
        $pdo = new PDO("mysql:host=localhost;dbname=db_php", 'php', '');
        $sql = $pdo->prepare("DELETE FROM clientes  WHERE nome=? OR sobrenome=?");

        $sql->execute([$nome,$sobrenome]);
    }
    ?>
</body>

</html>