<?php include"conecao.php"; ?>

<?php


if(isset($_POST["idp"])){

$idp = $_POST["idp"];
echo $idp;

   
     print_r($_POST);
   $sql_excluir = "delete from placas  ";
  
    $sql_excluir.= "where idp={$idp} ";
    
$operacao_modificar = mysqli_query($conectar,$sql_excluir) ;
if(!$operacao_modificar){
die("ERRO no banco");
}
    
 if($operacao_modificar) {
     
     header("location:estoque.php");
 } 
    
    
}
   



if(isset($_GET["codigo"])){
$id = $_GET["codigo"] ;    
$sq= "where idp={$id} ";
"<br>";
echo $id;
"<br>";
}
else
    {
        $sq="where idp=33 ";
    }




$sql = "select * ";
$sql .= "from placas inner join tipo on placas.modeloid=tipo.id ";
$sql.="$sq ";





$operacao_modificar = mysqli_query($conectar,$sql) ;
if(!$operacao_modificar){
die("ERRO no banco");
}

$modificar = mysqli_fetch_assoc($operacao_modificar);
print_r($modificar);
$idp = $modificar["idp"];
$numero = $modificar["numero"];
$nomeid = $modificar["nomeid"];
$modeloid = $modificar["modeloid"];
echo $numero;
echo $nomeid;
echo $idp;
echo $modeloid;
?>


<!DOCTYPE html>

<html>

<head>
    
    
</head>
    
<body>
    <form action="deletar.php" name="teste"  method="post">
    
      <label for="model">Modelo</label>  
      <input type="text" name="modelo" id="model" value="<?php echo $nomeid  ?>" >
      <label for="model">modeloid</label> 
      <input type="text" name="id" id="" value="<?php echo $modeloid  ?>" >
      <label for="numero">número</label> 
      <input type="text" name="numero"id="numero" value="<?php echo $numero  ?>">
      <label for="model">idp</label> 
      <input type="text" name="idp" value="<?php echo $idp  ?>">
      <input type="submit" name="enviar" id="enviar" value="Apagar!">

    </form>   
    
    
</body>














</html>