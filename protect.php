<?php

//dar um include nas páginas que precisam de sesion include('protect.php');

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['nome'])){

    die("Você não pode acessar esta página, pois não está logado. <p><a href=\"login.php\"</a>Entar</p>");

}

?>