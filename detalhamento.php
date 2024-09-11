<?php
require 'conexao.php';

$dados = [];
$sql = $pdo->query("SELECT * FROM tb_propriedade");

if ($sql->rowCount() > 0) {
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>
<body>
    <div class="container-fluid container-md">

        <!-- <h2><?= $dado['inscest']; ?></h2> -->

        <table class="table">
            <thead>
                <tr>
                     <h4>Nome</h4>
                     <p> Inscrição EStadual</p>
                     <p>Nome Operador</p>
                     <p>Número Equipamento</p>


                    <th scope="col">Código Produto</th>
                    <th scope="col">Nome Produto</th>
                    <th scope="col">Ativo</th>
                    <th scope="col">Carência</th>
                    <th scope="col">Dosagem</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados as $dado): ?>
                <tr>
                    <td><?= $dado['nomePropriedade']; ?></td>
                    <td><?= $dado['inscest']; ?></td>
                    <td><?= $dado['']; ?></td>
                    <td><?= $dado['senha']; ?></td>
                    <td>
                        <a href="editar.php?id=<?= $dado['id']; ?>"><img src="icons8-editar-30.png" alt="Editar"></a>
                        <a href="excluir.php?id=<?= $dado['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')"><img src="icons8-x-30.png" alt="Excluir"></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
