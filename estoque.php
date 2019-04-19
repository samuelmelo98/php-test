<?php include"conecao.php"; ?>
<?php// session_start();?>


<?php
$estoque = "SELECT  idp,nomeid,numero,id,data,modeloid ";
$estoque .= "FROM placas inner join tipo on placas.modeloid=tipo.id ";
$estoque .= "order by modeloid ";
$acesso = mysqli_query($conectar,$estoque);
  if(!$acesso){
    die("Falha na conecão ");
  }
?>

<!DOCTYPE html>

<html>

<head>
 <link href="./BootStrap/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">  
 <script src="relogioo.js"></script> 
</head>
<body>
<div class="container">
   

      


  
</div>

  <div  class="table-responsive" >
     <h2>Tabela Estoque</h2> 
 <table class="table table-bordered">
<thead class="thead-dark">
  <tr>
          
    <!-- <th><h5><b>ID</b></h5></th> -->
   <!--  <th><h5><b>IDp</b></h5></th> -->
     <th><h5><b>Modelo</b></h5></th>
     <th><h5><b>Número</b></h5></th>
     <th><h5><b>Data</b></h5></th>
      <th><h5><b></b></h5></th>
        
  </tr>
</thead>
     <?php
   
     
 $nome1=array();
      while($linha=mysqli_fetch_assoc($acesso)){
        
           
              ?>
   
  <tr class="table-active">
     
      <td><?php echo $linha["nomeid"]; ?></td>
      <td><?php echo $linha["numero"];?></td>
       <td><?php echo date('d/m/Y',strtotime($linha["data"]));?></td>
      
      <td style="width:280px;">  
          
            <button  class="btn btn-secondary btn-sm" type="submit" name="excluir">
            <a style="text-decoretion:none"href="deletar.php?codigo=<?php  echo $linha["idp"];?>">Excluir</a> 
            </button> 

            <button class="btn btn-secondary btn-sm" type="submit">   
            <a style="text-decoretion:none;"href="modificar2.php?codigo=<?php echo $linha["idp"]?>">Modificar</a> 
            </button>  
            
            <button class="btn btn-secondary btn-sm" type="submit">   
            <a style="text-decoretion:none;"href="perdido.php?codigo=<?php echo $linha["idp"]?>" >Irrecuperavel</a> 
            </button> 
      
      
      </td> 
    
      
  </tr>
     
     <?php
               
      }

      ?>
</table>   
    
 </div>   
    

    <a href="frmcadastroplaca.php">Cadastro Placas</a>
    
    
    
  <main>
    
    
    <h1 class="text-danger"> <section  id="relogio"></section> 
    </h1>
    
    
    </main>






  </body>

</html>