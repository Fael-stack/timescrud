<?php

include 'db.php';

$id=$_POST['id'];
$nome = $_POST['nome'];
$obs = $_POST['obs'];

$query= "update cadastros set nome='$nome', obs='$obs' where id= $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');