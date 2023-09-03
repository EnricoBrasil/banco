<?php
if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])) {
    die("<h1> Não é possivel acessar essa pagina <p><a href="\../index.php\">Voltar para Login</p></h1>");
}
?>