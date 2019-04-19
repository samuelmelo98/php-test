
<?php

 
    
    
$mensagem="teste3";
if(isset($_POST["email"])){
   
   
    $usuario = $_POST["email"];
     $senha = $_POST["senha"];
    //filtro no banco de dados 
    $login = "SELECT * ";
    $login .= "FROM usuarios ";
    $login .= "WHERE mail = '{$usuario}' and senha = '{$senha}' ";
    
    $acesso = mysqli_query($conectar,$login);
    
    if(!$acesso){
        
        die("Falha na conecão ");
        
    }
    
    $informacao = mysqli_fetch_assoc($acesso);
     $mensagem="teste";
    if(empty($informacao)){
        $mensagem = "Login sem Sucesso!";
      $_SESSION["verificar"] = $mensagem;
        
            // header("location:login_linhas.php");
       
    }else{
        $_SESSION["user_portal"] = $informacao["senha"];
        $_SESSION["user_portal2"] = $informacao["mail"];
        header("location:principal.php");
   
           


    }
    
    if(empty($_POST["email"])){
       
    }else{
     echo $mensagem; 
    }
 

}
 //echo $usuario . "<br>";
 //echo $senha;
?>

<!DOCTYPE html>
<html>
    
    <head>
        <script>var teste ="<?php echo $teste2.$teste;  ?>";
alert(teste);
      var caixa_email= "<?php $mesagem;?>";  
      var caixa_senha= senha.value;
        alert(caixa_email);    
         alert(caixa_senha);    
        
        </script>

    </head>
    
<body>
    
    

    
    
    

    

   

</body>

</html>