<?php include"conecao.php"; ?>

<?php


if(isset($_POST["numero"])){

$idp = $_POST["idp"];
$numero = $_POST["numero"];

   
     print_r($_POST);
   $sql = "update placas  ";
    $sql.="set numero='{$numero}' ";
    $sql.= "where idp=$idp ";
    
$operacao_modificar = mysqli_query($conectar,$sql) ;
if(!$operacao_modificar){
die("ERRO no banco");
}
    
  if($operacao_modificar){
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
    <form action="modificar2.php" name="teste"  method="post">
    
      <label for="model">Modelo</label>  
      <input type="text" name="modelo" id="model" value="<?php echo $nomeid  ?>" >
      <label for="model">modeloid</label> 
      <input type="text" name="id" id="" value="<?php echo $modeloid  ?>" >
      <label for="numero">número</label> 
      <input type="text" name="numero"id="numero" value="<?php echo $numero  ?>">
      <label for="model">idp</label> 
      <input type="text" name="idp" value="<?php echo $idp  ?>">
      <input type="submit" name="enviar" id="enviar" value="Modificar">

    </form>   
    
    
</body>














</html>