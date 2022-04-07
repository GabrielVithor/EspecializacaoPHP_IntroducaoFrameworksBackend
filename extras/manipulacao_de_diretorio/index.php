<?php
    //rmdir("testes");#remover pastas
    //mkdir("testes"); #criar pastas

    if(is_dir("testes")) #verifica pasta
    echo"É uma pasta valida";
        if($handle = opendir("testes")){ //abre diretorio e atribui o valor ao handle
            while($file = readdir(($handle))){ #lê o  diretorio atraves da variavel handle
                if($file == "." || $file == ".."){
                    echo "<br>";
                    continue;
                }
            echo "$file \n";
            echo "<hr>";
            }
            closedir($handle);
        }

       
    else
    echo "Não existe, ou nao é uma pasta";
