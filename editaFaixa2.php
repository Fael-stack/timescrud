<?php

include 'db.php';

while ($linha = mysqli_fetch_array($consultaFaixas)) {
    $faixa=$linha['faixa2'];
}

$id=$_POST['id'];

$query= "update cadastros set faixa2qnt=faixa2qnt+1, faixa2total=faixa2total+$faixa where id= $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=producao');