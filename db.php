<?php

//Local

$servidor = "localhost";
$usuario = "root";
$senha ="";
$db="contador";


$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query="select * from cadastros order by nome";
$consultaCadastros= mysqli_query($conexao, $query);

$query="select * from faixas";
$consultaFaixas= mysqli_query($conexao, $query);

