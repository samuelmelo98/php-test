
<?php include"seguranca.php"; ?>
<?php

// inicia a variavel de sessao //
//session_start();




?>

<!DOCTYPE html>

<html>

<head>
    
    
</head>
    
<body>
    <a href="principal.php" >Pagina principal</a>
    <a href="pag1.php" >Pagina 1</a>
    <a href="pag2.php" >Pagina 2</a>
    
</body>


<?php
    
    
unset($_SESSION["user_portal"]);
 //session_destroy();
   header("location:login_linhas.php");
    
    
    

    
    
?>










</html>