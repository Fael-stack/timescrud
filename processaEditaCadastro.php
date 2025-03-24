<?php

include 'db.php';

$id = $_POST['id'];
$time = $_POST['time'];
$titulos = $_POST['titulos'];
$jogadores = $_POST['jogadores'];

$query= "update cadastros set time='$time', titulos='$titulos', jogadores='$jogadores' where id= $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');