<?php
require 'conexao.php';

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $sql = $pdo->prepare("DELETE FROM tb_pulverizacao WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
}

header('Location: historicoPulv.php');
exit;
?>