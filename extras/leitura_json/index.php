<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script>
    $(function(){
        $.ajax({
            url:"request.php",
            dataType: 'json'
        }).done(function(data){
            console.log(data.nome+"\n"+data.idade);
        })
    })
</script>
</body>
</html>
<?php
    $json = '{"a":1,"b":2,"c":3,"d":4}';

    #var_dump(json_decode($json));
    $obj = json_decode($json); # sem paramertro = objeto
    $arr = json_decode($json,true); #com parametro  = array

    foreach($arr as $key => $value){
        echo $value;
        echo "<hr>";
    }

  
?>