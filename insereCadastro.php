<?php

include 'db.php';

$time = $_POST['time'];
$titulos = $_POST['titulos'];
$jogadores = $_POST['jogadores'];


$query= "insert into cadastros(time, titulos, jogadores) 
values('$time', '$titulos', '$jogadores')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');