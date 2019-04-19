 
<?php  include"seguranca.php";$teste=$_SESSION["user_portal"]; 
$teste2=$_SESSION["user_portal2"];
?>


<?php
include"acessar.php";



print_r($GLOBALS);
?>

<!DOCTYPE html>
<html>
    
    <head>
        <script>var teste ="<?php echo $teste2;  ?>";
alert(teste);</script>

    </head>
    
<body>
    
    
 <div class="container">
    
    
    
<a href="logout.php">Sair</a>
<a href="cadastro_usuario.php">Cadastro Novo Usuário</a>
<a href="estoque.php">Estoque</a>
<a href="frmcadastroplaca.php">Cadastrar Novo Modulo</a>

    
</div> 
   

</body>

</html>



