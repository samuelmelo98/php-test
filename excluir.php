<!DOCTYPE html>

<html>

<head>
    
    
</head>
    
<body>
    
    
    
</body>


<?php
    
 if(isset($_GET["codigo"])){
     $id = $_GET["codigo"] ;    
    }
    else
        
    {
        
    $sql.="where idp = 1 " ;
        
    }
 

   echo $id; 
    
    $sql = "select * ";
    $sql .="from placa ";
    $sql .=" where idp={$id}";  
    
      $operacao_modificar = mysqli_query($conectar,$sql) ;
        if(!$operacao_modificar){
            die("ERRO no banco");
            }
    
    
?>










</html>