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


    $pdo = new PDO("mysql:host=localhost;dbname=db_php", 'php', '');
    /*
        $sql = $pdo->prepare("SELECT * FROM categorias");
        $sql->execute();
        $info = $sql->fetchAll();

        foreach($info as $key => $value){
           $categoria_id = $value['id'];
           echo "<h1>Exibindo posts de: ".$value['nome']."</h1><hr>";
            

           $sql = $pdo->prepare("SELECT * FROM post WHERE categoria_id = ?");
           $sql->execute([$categoria_id]);
           $info_post = $sql->fetchAll();
           
           
          
          
   
           foreach($info_post as $key => $value){
               echo "<h2>Titulo: ".$value['titulo']."</h2>";
               echo "<p>Noticia: ".$value['conteudo']."</p><hr>";
           }
        }
         */

    $sql = $pdo->prepare("SELECT `post`.*,`categorias`.*,`post`.`id`AS `post_id` FROM post INNER JOIN categorias ON `post`.`categoria_id` = `categorias`.`id` ORDER BY categoria_id ASC");
    $sql->execute();
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    /*
    echo "<pre>";
    print_r($info);
    echo "</pre>";
    */

    foreach ($info as $key => $valor) {
        if($key == 0)
        echo "<h1>Noticias de: ".$valor['nome']."</h1><hr>";
        else if($info[$key]['id'] != $info[($key-1)]['id']){
        echo "<h1>".$valor['nome']."</h1>";
        } 
        echo "<h2>Titulo: " . $valor['titulo'] . "</h2>";
        echo "<p>Noticia: " . $valor['conteudo'] . "</p><hr>";
    }

    ?>
</body>

</html>