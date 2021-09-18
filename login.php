<?php
    //cria uma sessão ou verificar se tem uma sessão
    session_start();
?>

<form method="POST" action="validation.php">

    <label>
        Qual seu nome?
        </br>
        <input type="text" name="nome"/>
        </br>
        </br>

        <input type="submit" value="Salvar"/>
    </label>
</form>