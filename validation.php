<?php
    //cria uma sessão ou verificar se tem uma sessão
    session_start();

    $nome = filter_input(INPUT_POST, 'nome');

    if ( $nome ) {
        $_SESSION['nome'] = $nome;
        header("Location: index.php");
        exit;
    } else {
        header("Location: login.php");
    }
?>