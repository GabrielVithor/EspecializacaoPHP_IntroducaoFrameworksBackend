<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1>Metodo Get</h1>
    <h3>Requisição fica visivevl na url</h3>
    <?php
    if (isset($_GET['action'])) {
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        echo $nome . "<hr>";
        echo $email . "<hr>";
    }


    ?>

    <form method="get">
        <input type="text" name="nome" placeholder="Insira o seu nome">
        <input type="email" name="email" placeholder="Insira o seu melhor email">
        <input type="submit" name="action" value="Enviar">
    </form>

    <h1>Metodo Post</h1>
    <h3>Requisição fica em oculto</h3>
    <?php
    if (isset($_POST['action'])) {
        foreach ($_POST['idade'] as $key => $value) {
            echo $value;
            echo "<hr>";
        }
    }


    ?>

    <form method="post">
        <select name="nomes" id="">
            <option value="Gabriel" name="nome">Gabriel</option>
            <option value="Vithor" name="nome">Vithor</option>
            <option value="Conceiçao" name="nome">Conceição</option>
            <option value="Mota" name="nome">Mota</option>
        </select>
        <input type="checkbox" name="idade[]" value="21">21
        <input type="checkbox" name="idade[]" value="22">22
        <input type="checkbox" name="idade[]" value="23">23
        <input type="checkbox" name="idade[]" value="24">24
        <input type="submit" name="action" value="Enviar">
    </form>
</body>

</html>