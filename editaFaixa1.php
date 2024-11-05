<?php

include 'db.php';

while ($linha = mysqli_fetch_array($consultaFaixas)) {
    $faixa=$linha['faixa1'];
}

$id=$_POST['id'];

$query= "update cadastros set faixa1qnt=faixa1qnt+1, faixa1total=faixa1total+$faixa where id= $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=producao');