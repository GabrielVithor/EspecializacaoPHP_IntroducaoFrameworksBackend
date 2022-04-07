<?php
    if(file_exists('file.txt')){
    echo "Arquivo existe";
    $page_content = file_get_contents('file.txt'); # verifica se  arquivo existe
    echo nl2br($page_content);
    }
    else{
    $content =" Meu novo conteudo \r\n Inserido dinamicamente";
    file_put_contents("file.txt",$content); #Cria e insere conteudo no arquivo

        #unlink(nome_do_arquivo) = deleta o arquivo em questao
    }

  
?>