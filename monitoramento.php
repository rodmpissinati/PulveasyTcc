<?php

require 'conexao.php';

$dados = [];
$sql = $pdo->query("SELECT * FROM tb_tempoReal");

if ($sql->rowCount() > 0) {
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Monitoramento</title>
    <script>
        // Função para recarregar a página a cada 30 segundos (30.000 milissegundos)
        setInterval(function() {
            location.reload();
        }, 30000); // 30 segundos
    </script>
</head>
<body>
    <div id="webcrumbs"> 
        <div class="header">
            <h2>Localização</h2>
            <div class="mapBox">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14751.820937463192!2d-46.964560071380504!3d-22.430710667841716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1728078742028!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="content">
            <div class="card">
                <h3>Velocidade</h3>
                <div id="velocimetro">
                    <div id="velocidade"><?= $dados[0]['velocidade']; ?></div>
                    <div class="unit">Km/h</div>
                </div> 
            </div>

             <div class="card">
                <h3>Umidade</h3>
                <div class="container">
                    <svg class="circular-chart" viewBox="0 0 100 100">
                        <circle class="circle-bg" cx="50" cy="50" r="45"></circle>
                        <circle class="circle" cx="50" cy="50" r="45"></circle>
                        <text class="percentage" x="50%" y="50%" dominant-baseline="middle" text-anchor="middle">0%</text>
                    </svg>
                    <input type="number" id="progressInput" style="display:none" placeholder="Digite um valor (0-100)" value="<?= $dados[0]['umidade']; ?>" />
                    <button id="updateButton" style="display:none">Atualizar Progresso</button>
                </div>
            </div> 

            <div class="card">
                <h3>Temperatura</h3>
                <div id="weather-icon">
                    <img id="icon" src="imagens\sol.svg" alt="Ícone do tempo" />
                </div>
                
                <p class="temperature-value"><?= $dados[0]['temperatura']; ?>°C</p>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>