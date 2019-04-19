<?php include"conecao.php"; ?>
<?php session_start();?>


<?php
$estoque = "SELECT id, modeloid,numero ";
$estoque .= "FROM placas ";
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
     <h2>Tabela Estoque</h2> 
 <table class="table table-bordered">
<thead class="thead-dark">
  <tr>
     <th><h5><b>#</b></h5></th> 
     <th><h5><b>Modelo</b></h5></th>
     <th><h5><b>Número</b></h5></th>
     <th><h5><b>Data</b></h5></th>
      <th><h5><b>Defeito</b></h5></th>
  </tr>
</thead>
     <?php
    
      while($linha = mysqli_fetch_assoc($acesso)){
       print_r($linha);
        asort($linha);
      ?>
  <tr class="table-active">
    <td><?php echo $linha["id"]; ?></td>
    <td><?php echo $linha["modeloid"]; ?></td>
    <td><?php echo $linha["numero"]?></td>
    
      
  </tr>
     <?php
      }
      ?>

</table>   
    
 </div>   
    

    
    
    
    







  </body>

</html>