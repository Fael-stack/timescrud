<?php

include 'db.php';

$id=$_POST['id'];

$query= "update cadastros set faixa1qnt=faixa1qnt-faixa1qnt, faixa1total=faixa1total-faixa1total,
faixa2qnt=faixa2qnt-faixa2qnt, faixa2total=faixa2total-faixa2total, 
faixa3qnt=faixa3qnt-faixa3qnt, faixa3total=faixa3total-faixa3total,
faixa4qnt=faixa4qnt-faixa4qnt, faixa4total=faixa4total-faixa4total
where id= $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=producao');