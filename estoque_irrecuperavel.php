<?php include"conecao.php"; ?>
<?php// session_start();?>


<?php
$estoque = "SELECT   nomeid,numero,defeito2,data ";
$estoque .= "FROM perdido inner join tipo on perdido.modeloid=tipo.id ";
$estoque.="order by modeloid ";

$acesso = mysqli_query($conectar,$estoque);
  if(!$acesso){
    die("Falha na conecão ");
  }

?>

<!DOCTYPE html>

<html>

<head>
 <link href="./BootStrap/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">   
</head>
<body>
<div class="container">
   

      


  
</div>

  <div class="table-responsive" >
     <h3 style="padding-left:450px;">Tabela Irrecuperavel</h3> 
 <table class="table table-bordered table-sm">
<thead class="thead-dark" >
  <tr>
          
     
     <!-- <th><h5><b>ID</b></h5></th> -->
     <th><h5><b>Modelo</b></h5></th>
     <th><h5><b>Número</b></h5></th>
     <th><h5><b>Defeito</b></h5></th>
      <th><h5><b>Data</b></h5></th>
        
  </tr>
</thead>
     <?php
     
     
      $data = date("d-m-y");
   
      while($linha = mysqli_fetch_assoc($acesso)){
  
        
      ?>
      
  <tr>
      
      
    <td><?php echo $linha["nomeid"] ?></td>
    <td><?php echo $linha["numero"]?></td>
     <td><?php echo $linha["defeito2"]?></td>  
       <td><?php echo date('d/m/Y',strtotime($linha["data"]));?></td>
      
  </tr>
     
     <?php
      }
      ?>

</table>   
    
 </div>   
    

    <a href="frmcadastroplaca.php">Cadastro Placas</a>
    
    
    







  </body>

</html>