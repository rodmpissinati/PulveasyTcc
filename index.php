<!-- <?php
//include ('protect.php');
?> -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>

<header>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" 
  integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</header>
<body>

  <script src="script.js"></script>

  <nav>
    <div id="logo">
      <a href="index.html"> <img id="logo" src="imagens/nav4.png"></a>
    </div>

      

      <ul class="menu">
          <li class="liNav"><a href="home.html">Home</a></li>
          <li class="liNav"><a href="pulverizacao.html">Pulverização</a></li>
          <li class="liNav"><a href="monitoramento.html">Monitoramento</a></li>
          <li class="liNav"><a href="sobre.html">Sobre</a></li>
          <li class="liNav"><a href="login.php">Entar</a></li>
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
        <li class="liNav"><a href="login.php">Entar</a></li>
        
        <!-- <div id="imgAbrir" onclick="abrirMenu()" ><img  src="imagens/openMenu.svg" alt=""></div> -->
        <!-- <li id="imgLog"><a href="login.html"><img id="imgLog" src="imagens/icons8-pessoa-24.png"></a></li>                -->
    </ul>
        
  </nav>
  <section>
    <div id="carouselExample" class="carousel slide" data-bs-ride= "carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagens/carrossel1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagens/carrossel2.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagens/carrossel3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"   data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <section>
    <div class="about">
      <p id="sobre">Sobre o Pulveasy</p>
      <h2 id="h2Sobre">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, officiis exercitationem ducimus illo laborum officia pariatur ipsum laudantium tempore ex, rerum repellat praesentium perspiciatis? Ut esse nesciunt nisi labore magnam.</h2>
    </div>
    <div class="cards">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btnCard">Acessar</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btnCard">Acessar</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btnCard">Acessar</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btnCard">Acessar</a>
        </div>
      </div>
    </div>
    </div>
  
  </section>

    

    <section>
      <div class="infoPulv">
      <div class="divInfo">
        <div class="txtInfo">
          <h3>O que é o Pulveasy?</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br> Dolore ratione cumque eum commodi tempora nam? Odio fuga maxime inventore animi,<br> corrupti magni! Cupiditate fuga voluptatum neque blanditiis voluptatibus maxime eum? ehjsagfjhegsfjhesghjfgeshjfghjesfghjse<br>gfhjesgfhgeshjfgsehfghes gfjhsegfhjgsejhfgsehjfgehjsfghsegfhjsegfhjgeshfjsjkdhfjshfjksdhfjkdshfjhdsfjhdsjfhdsjk fhd</p>
        </div>
        <div class="divInfo">
          <img class="imgInfo" src="imagens/campoExemplo.png" alt="">
        </div>
      </div>
    </div>
      



    </div>
  </section>

  <section>
    <div class="vantagens">
      <div class="allVantagens">
        <h2 class="h2Vantagens">Vantagens de usar o Pulveasy</h2>
        <p class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est natus quasi quod repudiandae vero? Sed amet impedit incidunt eligendi inventore quis laudantium omnis cum minus at dolor ab, quia repudiandae!</p>
        <div class="items">
          <div class="item">
            <img class="imgVantagens" src="imagens/money-dollar-circle-line.svg" alt="">
            <h4 class="titleProjects">Economia</h4>
            <p class="pVantagens">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum hic pariatur debitis, expedita facilis, a</p>
          </div>

            <div class="item">
              <img class="imgVantagens" src="imagens/money-dollar-circle-line.svg" alt="">
              <h4 class="titleProjects">Economia</h4>
              <p class="pVantagens">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum hic pariatur debitis, expedita facilis, <p>
          </div>

            <div class="item">
              <img class="imgVantagens" src="imagens/money-dollar-circle-line.svg" alt="">
              <h4 class="titleProjects">Economia</h4>
              <p class="pVantagens">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum hic pariatur debitis, expedita facilis, <p>
          </div>
            <div class="item">
              <img class="imgVantagens" src="imagens/money-dollar-circle-line.svg" alt="">
              <h4 class="titleProjects">Economia</h4>
              <p class="pVantagens">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum hic pariatur debitis, expedita facilis, <p>
          </div>

        </div>
        
      </div>

    </div>
  </section>

  <footer>
    <div class="footer">
      <div class="divFooter">
        <ul>
          <li><img class="logoFooter"  src="imagens/nav4.png" alt=""></li>
          <li class="txtFooter">Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Animi sit asperiores similique<br> temporibus nulla. Harum magnam vitae laboriosam <br> blanditiis odit explicabo sequi dolores nisi voluptate, modi iure<br> aspernatur doloremque delectus. </li>
        </ul>
        <ul class="ulFooter">
          <li class="txtFooter">Redes Sociais</li>
        </ul>
      </div>
    </div>
  </footer>

  

   
</body>
</html>