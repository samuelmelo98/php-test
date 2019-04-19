<?php


include"conecao.php";


$mail= "SELECT * FROM usuarios";
$dados= mysqli_query($conectar, $mail);

while($registro = mysqli_fetch_assoc($dados)){
    
//  print_r($registro);  
    echo "<BR>";
  //  echo $registro['mail'];
  //  echo $registro['senha'];
    if($registro['mail']==$_POST['email'] and $registro['senha']==$_POST['senha']){
        echo "pode entrar";
         header("location:principal.php");
    }else{
       // echo"usuario não existe";
     // header("location:usuarionaoexiste_db.php");
     echo '<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=usuarionaoexiste_db.php">';
    }
    
}






?>