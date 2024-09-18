<?php
session_start();
require 'conexao.php';

header('Content-Type: application/json'); // Garante que o conteúdo retornado seja JSON

if (isset($_POST['adicionar'])) {
    if (isset($_SESSION['inscest']) && isset($_SESSION['nomePropriedade'])) {
        $inscest = $_SESSION['inscest'];
        $nomePropriedade = $_SESSION['nomePropriedade'];

        // Insere uma nova linha com dados obrigatórios preenchidos e outros campos vazios
        $sql = $pdo->prepare("INSERT INTO tb_pulverizacao (fk_propriedade_nome, fk_propriedade_inscest, nomeOperador, numeroEquipamento, codigo, nome, ativo, tipo, carencia, dosagem, dataPulv, hora) VALUES (:nomePropriedade, :inscest, '', '', '', '', '', '', '', '', '', '')");
        $sql->bindValue(':nomePropriedade', $nomePropriedade);
        $sql->bindValue(':inscest', $inscest);
        $sql->execute();

        // Pega o último ID inserido
        $novoId = $pdo->lastInsertId();

        // Retorna os dados da nova linha como JSON
        echo json_encode([
            "id" => $novoId,
            "inscest" => $inscest,
            "nomePropriedade" => $nomePropriedade
        ]);
    } else {
        // Retorna uma mensagem de erro em JSON se a sessão não estiver definida
        echo json_encode(["error" => "Sessão não definida."]);
    }
} else {
    // Retorna uma mensagem de erro em JSON se o parâmetro 'adicionar' não estiver presente
    echo json_encode(["error" => "Parâmetro 'adicionar' não definido."]);
}
?>
