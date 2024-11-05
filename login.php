<?php

include 'db.php';

$usu_login = addslashes($_POST['usu_login']);
$usu_senha = md5($_POST['usu_senha']);

$query = "select * from usuarios
where usu_login = '$usu_login'
and usu_senha = '$usu_senha' ";

$consulta = mysqli_query($conexao, $query);

if (mysqli_num_rows($consulta) == 1){
    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuarios']=$usu_login;
    header('location:index.php');
}
else{
    header('location:index.php?erroLogin');
}