<?php
session_start();
require 'conexao.php';

if (isset($_SESSION['inscest']) && isset($_SESSION['nomePropriedade'])) {
    $inscest = $_SESSION['inscest'];
    $nomePropriedade = $_SESSION['nomePropriedade'];

    // Verifica se inscest e nomePropriedade já existem em tb_propriedade
    $sql = $pdo->prepare("SELECT * FROM tb_propriedade WHERE inscest = :inscest AND nomePropriedade = :nomePropriedade");
    $sql->bindValue(':inscest', $inscest);
    $sql->bindValue(':nomePropriedade', $nomePropriedade);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        // Se a propriedade já existe, verifica se já foi inserida na tb_pulverizacao
        $sql = $pdo->prepare("SELECT * FROM tb_pulverizacao WHERE fk_propriedade_inscest = :inscest AND fk_propriedade_nome = :nomePropriedade");
        $sql->bindValue(':inscest', $inscest);
        $sql->bindValue(':nomePropriedade', $nomePropriedade);
        $sql->execute();

        if ($sql->rowCount() === 0) {
        // Insere na tabela tb_pulverizacao apenas se a propriedade existir
            $sql = $pdo->prepare("INSERT INTO tb_pulverizacao (fk_propriedade_nome, fk_propriedade_inscest) VALUES (:nomePropriedade, :inscest)");
            $sql->bindValue(':nomePropriedade', $nomePropriedade);
            $sql->bindValue(':inscest', $inscest);
            $sql->execute();

            header ('Location: detalhamento.php');
            exit;

            }

    } 
  
}


$dados = [];
$sql = $pdo->query("SELECT * FROM tb_pulverizacao");

if ($sql->rowCount() > 0) {
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Pulv</title>
</head>
<body>
    <div class="container-fluid container-md">
        <form id="formDetalhamento" method="post" action="processaDetalhamento.php">
            <table class="table">
                <thead>

                
    


                <tr>
                <?php foreach ($dados as $dado): ?>
                     <h4>Nome:<?= $dado['fk_propriedade_nome']; ?>
                     <input type="hidden" name="fk_propriedade_nome" value="<?= $_SESSION['nomePropriedade']; ?>">
                    </h4>

                     <h5 id="inscest"> Inscrição Estadual:<?= $dado['fk_propriedade_inscest']; ?>
                     <input type="hidden" name="fk_propriedade_inscest" value="<?= $_SESSION['inscest']; ?>">    
                    
                    </h5>

                    <h5 class="tdDetalhamento" id="nomeOperador">
                     <span class="texto">Nome do Operador:<?= $dado['nomeOperador']; ?></span>    
                     <input class="input" type="text" name="nomeOperador" id="i9" placeholder="Nome do Operador" value="<?= $dado['nomeOperador']; ?>">
            
                    </h5>
                
                     <h5 class="tdDetalhamento" id="numEquipamento">
                     <span class="texto">Numero do Equipamento:<?= $dado['numeroEquipamento']; ?></span>    
                     <input class="input" type="text" name="numeroEquipamento" id="i10" placeholder="Numero do Equipamento"  value="<?= $dado['numeroEquipamento']; ?>">
                    
                    </h5>
                     

                    <?php endforeach; ?>

                    <tr>
                        <th scope="col">Código Produto</th>
                        <th scope="col">Nome Produto</th>
                        <th scope="col">Ativo</th>
                        <th scope="col">tipo</th>
                        <th scope="col">Carência</th>
                        <th scope="col">Dosagem</th>
                        <th scope="col">Data</th>
                        <th scope="col">Hora</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dados as $dado): ?>
                    <tr>
                    <td class="tdDetalhamento" id="1">
                        <span class="texto"><?= $dado['codigo']; ?></span>
                        <input class="input" type="text" name="codigo" id="i1" value="<?= $dado['codigo']; ?>">
                    </td>

                    <td class="tdDetalhamento" id="2">
                        <span class="texto"><?= $dado['nome']; ?></span>
                        <input class="input" type="text" name="nome" id="i2" value="<?= $dado['nome']; ?>">
                    </td>

                    <td class="tdDetalhamento" id="3">
                        <span class="texto"><?= $dado['ativo']; ?></span>
                        <input class="input" type="text" name="ativo" id="i3" value="<?= $dado['ativo']; ?>">
                    </td>

                        
                    <td class="tdDetalhamento" id="4">
                        <span class="texto"><?= $dado['tipo']; ?></span>
                        <input class="input" type="text" name="tipo" id="i4" value="<?= $dado['tipo']; ?>">
                    </td>

                    <td class="tdDetalhamento" id="5">
                        <span class="texto"><?= $dado['carencia']; ?></span>
                        <input class="input" type="text" name="carencia" id="i5" value="<?= $dado['carencia']; ?>">
                    </td>

                    <td class="tdDetalhamento" id="6">
                        <span class="texto"><?= $dado['dosagem']; ?></span>
                        <input class="input" type="text" name="dosagem" id="i6" value="<?= $dado['dosagem']; ?>">
                    </td>
                    <td class="tdDetalhamento" id="7">
                        <span class="texto"><?= $dado['dataPulv']; ?></span>
                        <input class="input" type="date" name="dataPulv" id="i7" value="<?=$dado['dataPulv']; ?>">
                    </td>

                    <td class="tdDetalhamento" id="8">
                        <span class="texto"><?= $dado['hora']; ?></span>
                        <input class="input" type="time" name="hora" id="i8" value="<?=$dado['hora']; ?>">
                    </td>
                        
                    
                    </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <button id="salvarAlteracoes" type="submit" class="btn btn-primary">Salvar Alterações</button>
            <!-- <input type="text" id="idPropriedade" placeholder="ID da Propriedade">
<button onclick="adicionarRegistro()">Adicionar Registro</button>
<div id="resultado"></div> -->

<a id="adicionarRegistro" class="btn btn-primary return false;">Adicionar</a>






    
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
