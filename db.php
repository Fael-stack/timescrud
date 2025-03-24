<?php

//Local

$servidor = "localhost";
$usuario = "root";
$senha ="";
$db="timesDB";


$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query="select * from cadastros order by time";
$consultaCadastros= mysqli_query($conexao, $query);

