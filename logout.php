<?php

//para adicionar um logout colocar um link <a href="logout.php">Sair</a>
if (!isset($_SESSION)) {
    session_start();
}
session_destroy();

header("Location:index.php")
?>