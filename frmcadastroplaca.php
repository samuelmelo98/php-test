<?php include"conecao.php"; ?>

<?php
$teste="";

   


if(isset($_POST["modelo"])){
   
    $modelo = $_POST["modelo"];
    $numero = $_POST["numero"];
    $data = $_POST["data"];
    
    

    
    
    $sql = "INSERT INTO placas VALUES ";
    $sql.= "('','$numero','$data','$modelo') ";

    $operacao_inserir = mysqli_query($conectar,$sql) ;
        if(!$operacao_inserir){
            die("ERRO no banco");
            }
    
    $teste="Cadastrado com sucesso";
   
 
  ?>
<a href="frmcadastroplaca.php">Cadastrar Nova Placa</a>
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
  
<body  >
 <div >    
  <div class="container" id="cadastro_placas">
    
    <form action="frmcadastroplaca.php" method="post" >
        <hr>
           
      
                 <h3 style="padding-left:450px;font-famyly:arial;color:red;"> <strong> Cadastro Placas   </strong> </h3> 
                <a href="estoque.php">EStoque</a>
           
          
        <hr>
      
       <label>Modelo da placa </label>
        <select style="margin-bottom:15px;" name="modelo"  class="form-control" required >
              
                <option value=""></option>
                <option value="1">MTFT  </option>
                <option value="2">MTCX  </option>  
                <option value="3">MTCP  </option>  
                <option value="4">MTPT  </option>
                <option value="5">MTPP  </option>
                <option value="6">MTRPS </option>  
                <option value="7">MTCRS </option>  
                <option value="8">MTPT  </option>
                <option value="9">MTCRS </option>  
                <option value="10">RT </option>
        </select>
      <label for="numero">Número</label>
      <input  style="margin-bottom:15px;" type="text" class="form-control" name="numero"    placeholder="Número da Placa" id="numero">
      <input style="margin-bottom:15px;" type="date"  class="form-control" name="data"  placeholder="Data" > 
      <label for="texto">Texto </label> 
      <input style="margin-bottom:15px;padding-bottom:150px" type="textarea"  class="form-control" name="obs" placeholder="Observação" id="texto">
             

      <input style="margin-bottom:15px;" type="submit" class="btn btn-success btn-block" name="Cadastrar"  value="Cadastrar" >
        
    </form>  
    
    

    <h2> <?php echo $teste;   ?>     </h2>
     
   
       
    </div>
     </div>
</body>












</html>
