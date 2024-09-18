<!-- <?php
//require 'conexao.php';

//$dados = [];
//$sql = $pdo->query("SELECT * FROM tb_tempoReal");

// if ($sql->rowCount() > 0) {
//     $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
//}
?> -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Pulverização</title>
</head>
<body>

<nav>
    <div id="logo">
      <a href="index.html"> <img id="logo" src="imagens/nav4.png"></a>
    </div>

      

      <ul class="menu">
          <li class="liNav"><a href="home.html">Home</a></li>
          <li class="liNav"><a href="pulverizacao.html">Pulverização</a></li>
          <li class="liNav"><a href="monitoramento.html">Monitoramento</a></li>
          <li class="liNav"><a href="sobre.html">Sobre</a></li>
          <li class="liNav"><a href="login.php">Entrar</a></li>
          <!-- <li id="imgLog"><a href="login.html"><img id="imgLog" src="imagens/icons8-pessoa-24.png"></a></li>                -->
      </ul>

      <button id="imgAbrir" onclick="abrirMenu()"><span class="material-symbols-outlined">
        menu
        </span></button>

      <ul class="sidebar">
        <li><button id="imgFechar" onclick="fecharMenu()"><span class="material-symbols-outlined">
          close</button></li>
        <li class="liNav"><a href="home.html">Home</a></li>
        <li class="liNav"><a href="pulverizacao.html">Pulverização</a></li>
        <li class="liNav"><a href="monitoramento.html">Monitoramento</a></li>
        <li class="liNav"><a href="sobre.html">Sobre</a></li>
        <li class="liNav"><a href="login.php">Entrar</a></li>
        
        <!-- <div id="imgAbrir" onclick="abrirMenu()" ><img  src="imagens/openMenu.svg" alt=""></div> -->
        <!-- <li id="imgLog"><a href="login.html"><img id="imgLog" src="imagens/icons8-pessoa-24.png"></a></li>                -->
    </ul>
        
  </nav>
  <section>
    


            <div>
            <ul id="ulHistorico">
                <div><img id="imgListHistorico" src="" alt=""></div>

                <div>
                    <ul>
                        <li class="liHistorico"><h4>Nome:</h4></li>
                        <li class="liHistorico">Local:</li>
                        <li class="liHistorico"></li>
                     
                        <li class="buttonContainer"> <a class="linkEditar" class="liHistorico" href="editar.php?id=<?= $dado['id']; ?>">Editar</a> 
                        <a class="linkExcluir" href="excluirHistorico.php?id=<?= $dado['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</a>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>


    <a id="btnMais" class="btn btn-primary " href=""><i><i class="bi bi-plus-lg display-1"></i></a>

   
    
    
</body>
</html>