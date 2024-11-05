<?php

include 'db.php';

while ($linha = mysqli_fetch_array($consultaFaixas)) {
    $faixa=$linha['faixa4'];
}

$id=$_POST['id'];

$query= "update cadastros set faixa4qnt=faixa4qnt+1, faixa4total=faixa4total+$faixa where id= $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=producao');