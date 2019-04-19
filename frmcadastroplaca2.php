<?php include"conecao.php"; ?>

<?php
$teste="";
   


if(isset($_POST["modelo"])){
    
    $modelo = $_POST["modelo"];
    $numero = $_POST["numero"];
    $data = $_POST["data"];
    $obs = $_POST["obs"];
    
    $sql = "INSERT INTO placas VALUES ";
    $sql.= "('','$modelo','','$numero','$data','$obs') ";

    $operacao_inserir = mysqli_query($conectar,$sql) ;
        if(!$operacao_inserir){
            die("ERRO no banco");
            }
    
    $teste="Cadastrado com sucesso";
 
  ?>

<?php  
}
?>

<!DOCTYPE html>

<html>

<head>
  
    <title>Cadastro</title>
    <meta charset="utf-8">
    <link href="./BootStrap/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./_css/estilo.css" rel="stylesheet">
    
</head>
  
<body>
  <div class="container" id="cadastro_placas">
    
    <form action="frmcadastroplaca.php" method="post" >
        <hr>
           
      
                 <h2 style="padding-right;"> <strong> Cadastro Placas   </strong> </h2> 
      
           
          
        <hr>
      
       <label>Modelo da placa </label>
        <select name="modelo"  class="form-control" required >
            <option value=""></option>
            <option value="MTCX">MTCX </option>
            <option value="MTPT">MTPT</option>  
            <option value="MTPP">MTPP</option>  
            <option value="MTCP">MTCP</option> 
        </select>
      
      <input type="text" class="form-control" name="numero"    placeholder="Número da Placa" >
      <input type="date"  class="form-control" name="data"  placeholder="Data" > 
      <input type="text"  class="form-control" name="obs" placeholder="Observação">
     <!--<input type="submit" class="btn btn-success btn-block" name="Cadastrar"  value="Cadastrar" > -->
    </form>  
    
    

    <h2> <?php echo $teste;   ?>     </h2>
      <button class="btn btn-success btn-block "><a href="frmcadastroplaca.php"style="text-decoration: none;color:white;">Cadastrar Nova Placa</a></button> 
       
    </div>
</body>












</html>
