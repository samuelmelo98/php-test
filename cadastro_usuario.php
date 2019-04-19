 <?php include"conecao.php"; ?>

<?php
/*
   
 $sucesso = "";


if(isset($_POST["email"])){
    
    $email = $_POST["email"];
   
    $senha = $_POST["senha"];
    
     
   
    
    
    $sql = "INSERT INTO usuarios VALUES ";
    $sql.= "('$email','$senha') ";
  

    $operacao_inserir = mysqli_query($conectar,$sql) ;
       
 $sucesso = "Cadastro Realizado com Sucesso!";
     
        if(!$operacao_inserir){
            die("ERRO no banco");
            }

    
   
}*/
?>

<!DOCTYPE >

<html>

<head>
    <link href="./BootStrap/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="./scripts/verificar_campos_cadastro_usuario.js"></script>
    
    
    
    
    <style>
        .central{
            
            background-color: #cccccc;
            
            
        }
        h2{
            font-family:serif;
            font-size: 50px;
            color: black;
            font-style:italic;
            margin-left: 15%;
            text-align: center;
        }
        h3{
            
            
            
            font-family: serif;
            color: black;
            font-style: italic;
            text-align: center;
        }
    
    
    
    </style>
    
</head>
    
<body class="central">
 <div class="container">
       
     
      <div style="padding:16%"> 
          <div class="form-group" id="fonte">
        <hr><h2>Adicionar Novo Usuário</h2><hr>
      </div>
           <form id="cadastro" name="cadastro" action="cadastro_usuario.php" method="post">
            <div class="form-group">
                <label for="email"><strong>E-mail</strong></label>
              <input  class="form-control" type="email" id="email" name="email" placeholder="E-mail"  onfocus="myFunction(this)"  >
            </div>
            <div  class="form-group">
                <label for="senha"><strong>Senha</strong></label>
               <input  class="form-control" type="password" id="senha"  name="senha" placeholder="senha" ">
            </div>
            <div>
                <input class="btn btn-success btn-block" type="submit" name="enviar" id="enviar"  value="Cadastrar">
            </div> 
            <div class="form-group">
                <h3><?php // echo $sucesso;?></h3>
            </div>
               <div id="mensagem"></div>
           </form>  
     </div>
  </div>
 
</body>


   <script>
function myFunction(x) {
  email.value="";
  senha.value="";
  senha.type="password";
  
 
}
</script>









</html>
