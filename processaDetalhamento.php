<?php
require 'conexao.php';

header('Content-Type: application/json');

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$response = [];

try {
    // Verifica se a inscrição estadual e o nome da propriedade foram recebidos
    if (empty($dados['fk_propriedade_inscest']) || empty($dados['fk_propriedade_nome'])) {
        throw new Exception('Os campos Inscrição Estadual e Nome da Propriedade são obrigatórios.');
    }

    // Verifica se há um ID fornecido para determinar se é uma atualização
    if (!empty($dados['id'])) {
        // Atualizar os dados se o ID for fornecido
        $sql = "UPDATE tb_pulverizacao SET 
                    nomeOperador = :nomeOperador,
                    numeroEquipamento = :numeroEquipamento,
                    codigo = :codigo,
                    nome = :nome,
                    ativo = :ativo,
                    tipo = :tipo,
                    carencia = :carencia,
                    dosagem = :dosagem,
                    dataPulv = :dataPulv,
                    hora = :hora
                WHERE id = :id";

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nomeOperador', $dados['nomeOperador']);
        $stmt->bindParam(':numeroEquipamento', $dados['numeroEquipamento']);
        $stmt->bindParam(':codigo', $dados['codigo']);
        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':ativo', $dados['ativo']);
        $stmt->bindParam(':tipo', $dados['tipo']);
        $stmt->bindParam(':carencia', $dados['carencia']);
        $stmt->bindParam(':dosagem', $dados['dosagem']);
        $stmt->bindParam(':dataPulv', $dados['dataPulv']);
        $stmt->bindParam(':hora', $dados['hora']);
        $stmt->bindParam(':id', $dados['id']);
        $stmt->execute();

        $response['status'] = 'success';
        $response['message'] = 'Dados atualizados com sucesso!';
    } else {
        // Verifica se já existe um registro com a Inscrição Estadual e o Nome da Propriedade
        $sql = "SELECT * FROM tb_pulverizacao WHERE fk_propriedade_inscest = :inscest AND fk_propriedade_nome = :nomePropriedade";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':inscest', $dados['fk_propriedade_inscest']);
        $stmt->bindParam(':nomePropriedade', $dados['fk_propriedade_nome']);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            // Se já existir um registro, atualize-o
            $pulverizacao = $stmt->fetch(PDO::FETCH_ASSOC);
            $sql = "UPDATE tb_pulverizacao SET 
                        nomeOperador = :nomeOperador,
                        numeroEquipamento = :numeroEquipamento,
                        codigo = :codigo,
                        nome = :nome,
                        ativo = :ativo,
                        tipo = :tipo,
                        carencia = :carencia,
                        dosagem = :dosagem,
                        dataPulv = :dataPulv,
                        hora = :hora
                    WHERE fk_propriedade_inscest = :inscest AND fk_propriedade_nome = :nomePropriedade";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':nomeOperador', $dados['nomeOperador']);
            $stmt->bindParam(':numeroEquipamento', $dados['numeroEquipamento']);
            $stmt->bindParam(':codigo', $dados['codigo']);
            $stmt->bindParam(':nome', $dados['nome']);
            $stmt->bindParam(':ativo', $dados['ativo']);
            $stmt->bindParam(':tipo', $dados['tipo']);
            $stmt->bindParam(':carencia', $dados['carencia']);
            $stmt->bindParam(':dosagem', $dados['dosagem']);
            $stmt->bindParam(':dataPulv', $dados['dataPulv']);
            $stmt->bindParam(':hora', $dados['hora']);
            $stmt->bindParam(':inscest', $dados['fk_propriedade_inscest']);
            $stmt->bindParam(':nomePropriedade', $dados['fk_propriedade_nome']);
            $stmt->execute();

            $response['status'] = 'success';
            $response['message'] = 'Dados atualizados com sucesso!';
        } else {
            // Se não existir, insira um novo registro
            $sql = "INSERT INTO tb_pulverizacao (
                        fk_propriedade_inscest,
                        fk_propriedade_nome,
                        nomeOperador,
                        numeroEquipamento,
                        codigo,
                        nome,
                        ativo,
                        tipo,
                        carencia,
                        dosagem,
                        dataPulv,
                        hora
                    ) VALUES (
                        :inscest,
                        :nomePropriedade,
                        :nomeOperador,
                        :numeroEquipamento,
                        :codigo,
                        :nome,
                        :ativo,
                        :tipo,
                        :carencia,
                        :dosagem,
                        :dataPulv,
                        :hora
                    )";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':inscest', $dados['fk_propriedade_inscest']);
            $stmt->bindParam(':nomePropriedade', $dados['fk_propriedade_nome']);
            $stmt->bindParam(':nomeOperador', $dados['nomeOperador']);
            $stmt->bindParam(':numeroEquipamento', $dados['numeroEquipamento']);
            $stmt->bindParam(':codigo', $dados['codigo']);
            $stmt->bindParam(':nome', $dados['nome']);
            $stmt->bindParam(':ativo', $dados['ativo']);
            $stmt->bindParam(':tipo', $dados['tipo']);
            $stmt->bindParam(':carencia', $dados['carencia']);
            $stmt->bindParam(':dosagem', $dados['dosagem']);
            $stmt->bindParam(':dataPulv', $dados['dataPulv']);
            $stmt->bindParam(':hora', $dados['hora']);
            $stmt->execute();

            $response['status'] = 'success';
            $response['message'] = 'Dados inseridos com sucesso!';
        }
    }
} catch (Exception $e) {
    $response['status'] = 'error';
    $response['message'] = $e->getMessage();
}

echo json_encode($response);

?>