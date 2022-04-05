    <?php
        //Introdução as datas em PHP
    

        include('header.php');

        date_default_timezone_set('America/Sao_Paulo'); # => set timezone
        $data = date('d/m/Y H:i:s',time()+(60*5)); #=> time() = permite acrescentar ou subtrair 
        echo $data;
        
        
        echo "<h1>Meu conteudo</h1>";
   
        include('footer.php');
    ?>

