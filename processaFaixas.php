<?php

include 'db.php';

$faixa1=$_POST['faixa1'];
$faixa2 = $_POST['faixa2'];
$faixa3 = $_POST['faixa3'];
$faixa4 = $_POST['faixa4'];

$query= "update faixas set faixa1='$faixa1', faixa2='$faixa2', faixa3='$faixa3', faixa4='$faixa4' where id= 1";

mysqli_query($conexao, $query);

?>

<br><br>
<center>
    <h3>SALVO COM SUCESSO!</h3> 
    <br><br>
    <a href="index.php">Clique aqui</a> para voltar.
</center>