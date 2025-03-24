<?php

# Base de dados
include 'db.php';

# Funções
include 'funcao.php';

# Cabeçalho
include 'header.php';

# Auto-Recarregamento da página
header("refresh: 1800;");

# Conteúdo da página
if (isset($_GET['pagina'])) {
    $pagina = $_GET['pagina'];
} else {
    $pagina = 'cadastros';
}

switch ($pagina) {
    case 'cadastros':
        include 'views/cadastros.php';
        break;
    case 'novoCadastro':
        include 'views/novoCadastro.php';
        break;
    case 'editaCadastro':
        include 'views/editaCadastro.php';
        break;
    default:
        include 'views/cadastros.php';
        break;
}

# Rodapé
include 'footer.php';
