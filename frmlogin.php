  
<?php
include"conecao.php";
include"consulta_banco.php";   
$nome = $_POST['email'];
$senha = $_POST['senha'];
    
    
    echo $nome,"<BR>",$senha;
   // echo"pagina inicial"
        
 
?>
