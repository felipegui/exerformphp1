<?php
    //cria uma sessão ou verificar se tem uma sessão
    session_start();

    //O isset verifica se a sessão foi declarada
    if(isset($_SESSION['nome'])) {
        //Se foi declarado, ele usa o valor contido dentro da sessão
        echo "Olá, ".$_SESSION['nome']." - <a href='exit.php'> Sair</a>";
    }
?>