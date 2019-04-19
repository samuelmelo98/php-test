<?php include"conecao.php"; ?>
<?php session_start();?>


<?php

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
    
    if(empty($informacao)){
        $mensagem = "Login sem Sucesso!";
          header("location:inicial.php");
       
    }else{
        $_SESSION["user_portal"] = $informacao["senha"];
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










<!doctype >
<html>
 
<head>
   
    <title>Tela de Login</title>
    <meta charset="utf-8">
    <link href="./BootStrap/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./_css/estilo.css" rel="stylesheet">
    <style>
        footer{
            padding-left:1000;
        }
    
    </style>
    <script>
    
    var nome="Usuário ou senha, Incorretos";
        alert(nome);
    
    </script>

</head>
      <div  class="container">
<body style="padding-top:300;">
    
  
         
        <form action="inicial.php" method="post"  >
            <h1 style="padding-center;padding-bottom:10px;">Tela de Login</h1>
            <label for="email"></label>
            <input class="form-control" type="email" name="email" placeholder="E-mail" >
            <label for="senha"></label>
            <input class="form-control" type="password"name="senha" placeholder="Senha" >
            <input style="margin-top:15px;color: azure;" class="btn btn-success btn-block" type="Submit" name="Submit" value="Entrar" >
        </form>
    

    
    

    
</body>
<footer>
    

</footer>
 </div>
<script src="./BootStrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>


</html>
