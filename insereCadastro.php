<?php

include 'db.php';

$nome = $_POST['nome'];
$obs = $_POST['obs'];

$query= "insert into cadastros(nome, obs) 
values('$nome', '$obs')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');