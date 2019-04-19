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

</head>
      <div  class="container">
<body style="padding-top:300;">
    
  
         
        <form name="fmrteste" method="post" action="frmlogin.php" >
            <h1 style="padding-center;padding-bottom:10px;"> Entrar</h1>
            <label for="email"></label>
            <input class="form-control" type="text" name="email" placeholder="Email" value="">
            <label for="senha"></label>
            <input class="form-control" type="password"name="senha" placeholder="Senha" value="">
            <input style="margin-top:15px;color: azure;" class="btn btn-success btn-block" type="Submit" name="Submit" value="Entrar">
        </form>
    

    
    <p>
    Usuario não existe no banco de dados!!!
    </p>

    
</body>
<footer>
     <?php
   
include'data.php';
     ?>  
    
</footer>
 </div>
<script src="./BootStrap/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>


</html>
