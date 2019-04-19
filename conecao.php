<?php
$servidor ="localhost";
$usuario = "root";
$senha = "";
$banco = "db_dts";
$conectar = mysqli_connect($servidor,$usuario,$senha,$banco);

if(mysqli_connect_errno()){
    die("Conexao falou:". mysqli_connect_errno());
}
?>