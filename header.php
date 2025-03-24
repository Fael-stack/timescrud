<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!--Datatables-->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel='icon' href='./img/ball-icon.png'>
    <title>Cadastro de Times</title>
</head>
<style>
    
.linkMenu {
    color: #fff;
    text-decoration: none;
}

th,
td,
tr {
    text-align: center;
}


@media (max-width: 575px) {

    .caixa
     {
        width: 70%;
        margin-left: 15%;
    }

}

@media (min-width: 576px) {

    .caixa
     {
        width: 70%;
        margin-left: 15%;
    }
}

@media (min-width: 992px) {

    .caixa
     {
        width: 60%;
        margin-left: 20%;
    }
}


/* cadastrar Doença styles */

body{
    color: #1c3667;
    background-image: url('./img/soccer-wallpaper.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
}

.mainHeader{
    display: flex;
    justify-content: center;
    gap: 10px;
}

.mainHeader > h4{
    margin-top: 14px;

}

.medical-symbol{
    height: 64px;
    width: 64px;
}


.caixa {
    border-radius: 10px ;
    text-align: center;
    padding: 20px;
    background-color: #f7ede1;
}

.btn-primary {

    text-decoration: none;
    border-radius: 10px;
    padding: 6px;
    padding-right: 10px;
    border: none;
    background-color: #1c3667;
    transition: 0.5s;
}

.btn-cadastrarC{
    display:block;
    width: 20%;
    margin: 0 auto;
}

.btn-voltar {
    position: relative;
    right: 40%;
}

.btn-primary:hover {
    background-color: #11203d;
}

.btn-cadastrarNC {
    display: block;
    width: 100%;
    margin-top: 50px;
    margin-bottom: 20px;
}

#p{
    font-size: 511px;
}


/* novo Cadastro styles */

.form-label,
{
    color: #730202;
}

</style>
<body>