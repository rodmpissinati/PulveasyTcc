<?php
require 'conexao.php';

$cidade = filter_input(INPUT_POST, 'cidade');
$bairro = filter_input(INPUT_POST, 'bairro');
$rua = filter_input(INPUT_POST, 'rua');
$numero = filter_input(INPUT_POST, 'numero');
$estado = filter_input(INPUT_POST, 'estado');
$inscest = filter_input(INPUT_POST, 'inscest');
$nomePropriedade = filter_input(INPUT_POST, 'nomePropriedade');

if ($nomePropriedade && $numero) {
    $sql = $pdo->prepare("SELECT * FROM tb_propriedade WHERE inscest  = :inscest");
    $sql->bindValue(':inscest', $inscest);
    $sql->execute();

    if ($sql->rowCount() === 0) {
        $sql = $pdo->prepare("INSERT INTO tb_propriedade (cidade, bairro, rua, numero, estado, inscest, nomePropriedade) VALUES (:cidade,:bairro,:rua, :numero, :estado, :inscest, :nomePropriedade)");
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':bairro', $bairro);
        $sql->bindValue(':rua', $rua);
        $sql->bindValue(':numero', $numero);
        $sql->bindValue(':estado', $estado);
        $sql->bindValue(':inscest', $inscest);
        $sql->bindValue(':nomePropriedade', $nomePropriedade);
        $sql->execute();


        header('Location: historicoPulv.php'); //corrigir essa linha (estava antes Location: index.php)
        exit;
     } else {
        header('Location: cadastroPropriedade.php');
        exit;
    }
} else {
    header('Location: cadastroPropriedade.php');
    exit;
}







