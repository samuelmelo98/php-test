<?php include"conecao.php"; ?>

<?php


if(isset($_POST["numero"])){
    $d1= $_POST["modelo"];
     print_r($_POST);
   
   
    
    
}




    $sql = "select * ";
    $sql .= "from placas inner join tipo on placas.modeloid=tipo.id ";


    if(isset($_GET["codigo"])){
     $id = $_GET["codigo"] ;    

 
 

     $sql.= "where idp={$id} ";
    
 
  
        "<br>";
        echo $id;
         "<br>";
      }
else
    {
        $sql.="where idp=1 ";
    }




      



    
 

      $operacao_modificar = mysqli_query($conectar,$sql) ;
        if(!$operacao_modificar){
            die("ERRO no banco");
            }
    
 while( $dados = mysqli_fetch_assoc($operacao_modificar)){
     
     
      print_r($dados); 
            echo "<br>". $dados["modeloid"];
          
        echo    "<br>" . $dados["numero"];
        $modeloid= $dados["nomeid"];
    $numero= $dados["numero"];
     $idp = $dados["idp"];
       
     
 }


    
    
?>










<!DOCTYPE html>

<html>

<head>
    
    
</head>
    
<body>
 <form action="modificar.php" name="teste"  method="post">
    
  <label for="model">Modelo</label>  
  <input type="text" id="model" value="<?php echo $modeloid; ?>" >
  <label for="numero">número</label>  
  < input type="text"  "id="numero" value=" <?php echo $numero; ?>"  > 

  <input type="text"   value="<?php echo $id;?> " >
  <input type="submit">
    
                                          
                                          
                                          
                                   
                                                                              
                                          
                                          
                                          
                                          
                                          
                                            

    
    
    
    
    
    
</form>   
    
    
</body>














</html>