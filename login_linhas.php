<?php session_start();?>
<?php include"conecao.php";?>
<?php include"acessar.php";?>

<?php

 $a= $_SESSION["verificar"]=$mensagem;
 echo $a;
?>

<!DOCTYPE html>

<html>
<meta charset="UTF-8">
<head>
  <link href="login.css" rel="stylesheet">
    <script src="verifica_campos_preenchidos2.js"></script>
    <script>
        var test = "<?php echo $a; ?>";

        if(test=="teste2"){
            alert("Erro");
        }
        if(test=="Login sem Sucesso!"){
            alert("Login sem Sucesso!");
        }
        
        if(test=="teste"){
            
        }
    </script>
</head>
    
<body>
    <div class="box">
        <h2>Entrar</h2>
        <form id="" action="login_linhas.php" method="post">
            <div class="inputBox">

                <input type="email" id="email" name="email" >
                <label for="email">E-mail</label>
               
        
            </div>
        
            <div class="inputBox">
                 
                <input id="senha" type="password" name="senha" >
                <label for="senha">Senha</label>
               
            </div>
            <input type="submit" name="submit" value="Entrar">
        </form>
    
    </div>
    
</body>

</html>
