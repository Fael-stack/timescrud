<?php

include 'db.php';

while ($linha = mysqli_fetch_array($consultaFaixas)) {
    $faixa=$linha['faixa3'];
}

$id=$_POST['id'];

$query= "update cadastros set faixa3qnt=faixa3qnt+1, faixa3total=faixa3total+$faixa where id= $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=producao');