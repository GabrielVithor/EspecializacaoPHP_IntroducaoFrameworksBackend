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
        //Recorte de string
        $conteudo = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates praesentium inventore ea magnam labore quae, unde minima in eligendi sit et, fugiat id mollitia quaerat ullam eos delectus beatae nobis.<hr>';
        echo substr($conteudo,0,20) ;#(variavel,caracter inicial,carectere final)

        #Retorne um array com os indices obtidos
        $nome = "Gabriel Vithor Conceição Mota";
        
        $nomes = explode(" ",$nome);

        print_r($nomes);
        echo"<hr>";

        #Renorne uma string com os valores do array
        $nomes = implode(" ",$nomes);

        echo $nomes;
        echo"<hr>";


        $conteudo2 = "<h2>Gabriel Vithor</h2>Conceição Mota";

        echo strip_tags($conteudo2); # retira codigo html

        echo"<hr>";

        echo htmlentities($conteudo2);# mostra codigo html

    ?>
</body>

</html>