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
    <script src="verifica_campos_preenchidos.js"></script>
    
    <style>
        footer{
            padding-left:1000;
        }
        
        .hero-image {
  background-image: url("./img/test.jpg");
  background-color: #cccccc;
  height: 400px;
  background-position: center;
  background-repeat: no-repeat;
  background-size:cover;
  position: relative;
}
        
        h3 {
  
text-align: center;
color: firebrick;
text-align: center;
            font-style: italic;
            

            
}
    
    </style


</head>
    <div class="container">
    <body class="hero-image"  >
   
     <div style="margin:16%;" >
 
    
   
        
         
        <form id="inicial" name="inicial" action="inicial.php"  method="post"  >
            <div class="form-group">    
                <h1 style="color:white;"><strong>Entrar</strong></h1>
            </div>
         <div class="form-group">
           
            <label for="email"><strong>E-mail</strong></label>
            <input class="form-control" type="email" name="email" id="email" placeholder="E-mail" value="" >
             
        </div>
            
        <div class="form-group">
            <label for="senha"><strong>Senha</strong></label>
            <input class="form-control" type="password"name="senha" id="senha"  placeholder="Senha"  >
         </div>
            <div>  
                <input class="btn btn-success btn-block btn-lg" type="Submit" name="Submit" value="Entrar">
             </div> 
            
           <h3><div id="mensagem"></div></h3>
        </form>
    
 </div>
    
    

    
</body>
<footer>
    
  
</footer>
 </div>
<script src="./BootStrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>


</html>
