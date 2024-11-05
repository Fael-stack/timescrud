<?php

session_start();

unset($_SESSION['login']);
unset($_SESSION['usuarios']);

header('location:index.php');