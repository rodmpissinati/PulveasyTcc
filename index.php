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
          <li id="pessoaLogin" class="liNav"><a href="login.php"><span class="material-symbols-outlined">
person
</span></a></li>
      </ul>

      <button id="imgAbrir" onclick="abrirMenu()"><span class="material-symbols-outlined">
        menu
        </span></button>

      <ul class="sidebar">
        <li><button id="imgFechar" onclick="fecharMenu()"><span class="material-symbols-outlined">
          close</button></li>
        <li id="sideHome" class="liNav"><a href="home.html">Home</a></li>
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
          <img src="imagens\imagemcarrossel1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagens/carrosseltrator.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagens/imagemcarrossel2.png" class="d-block w-100" alt="...">
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

  <section id="sectionCards">
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
          <p>O projeto PULVEASY oferece uma solução tecnológica inovadora para a agricultura,<br> Dolore ratione cumque eum commodi tempora nam? Odio fuga maxime inventore animi,<br>
          visando aumentar a eficiência e a sustentabilidade da pulverização. Através de um <br>
          software controlador, permite uma distribuição mais uniforme de produtos químicos, <br> 
          reduzindo desperdícios e custos. O uso de sensores para identificar a altura das<br>
          plantas melhora a precisão da aplicação, minimizando o impacto ambiental. Além <br>
          disso, o desenvolvimento de um site facilita o monitoramento das pulverizações e <br>
          dos equipamentos pelos citricultores 
        </p>
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
        <p class="info">O desenvolvimento de um sistema automatizado para pulverização, como o PULVEASY, justifica-se pela sua capacidade de enfrentar esses desafios de maneira eficaz. 
A automação e a precisão na aplicação de insumos podem contribuir significativamente para a redução de custos, proporcionando uma produção mais sustentável e eficiente na citricultura.
Com a utilização de sensores para medir a altura das plantas e a aplicação precisa de insumos permitirá uma gestão mais eficiente dos recursos, reduzindo o desperdício e melhorando a produtividade. 
Do ponto de vista ambiental, a aplicação precisa de insumos minimiza os riscos de contaminação do solo e da água, contribuindo para a preservação do ecossistema local e promovendo práticas agrícolas mais sustentáveis. A redução no uso excessivo de produtos químicos também melhora a segurança alimentar e a saúde dos trabalhadores rurais, fortalecendo a responsabilidade socioambiental do setor.</p>
        <div class="items">
          <div class="item">
            <img class="imgVantagens" src="imagens/tecnologia.svg" alt="">
            <h4 class="titleProjects">Tecnologia</h4>
            <p class="pVantagens">Através de sensores será detectado a presença ou não de plantas no pomar garantindo uma aplicação miais eficiente e controlada.</p>
          </div>

            <div class="item">
              <img class="imgVantagens" src="imagens/money-dollar-circle-line.svg" alt="">
              <h4 class="titleProjects">Eficiência <!--na Aplicação--></h4>
              <p class="pVantagens">Através de sensores a pulverização será mais precisa pois será detectado a presença ou não de plantas no pomar garantindo uma <p>
          </div>

            <div class="item">
              <img class="imgVantagens" src="imagens/gestao.svg" alt="">
              <h4 class="titleProjects" id="tGestao"> Gestão <!--!Monitoramento --></h4>
              <p class="pVantagens" id="pGestao">Os produtores poderão monitorar e gerenciar as pulverizações realizadas.   <p>
          </div>
            <div class="item">
              <img class="imgVantagens" src="imagens/folha.svg" alt="">
              <h4 class="titleProjects" id="tSustenta">Sustentabilidade <!--<br> Ambiental --></h4>
              <p class="pVantagens" id="pSustenta">Com a redução dos produtos aplicados diminuirá o impacto ambiental.<p>
          </div>

        </div>
        
      </div>

    </div>
  </section>

    <section>
    <div class="sobreNos">
      <h2 class="h2SobreNos">Sobre Nós</h2>
      <p class="pSobreNos">
      Somos uma equipe de TCC que temos como objetivo revolucionar a citricultura<br>
      através da tecnologia. Nossa missão é trazer soluções econômicas viáveis,<br>
      tecnologias e eficientes que beneficiam toda a citricultura.
      </p>
      <p class="pSobreNos">
      A equipe Pulveasy acredita <br>
      que aliar o amor ao trabalho com a tecnologia pode mudar o setor do cultivo! <br>
      <br>
      Estamos aqui para revolucionar a citricultura, fornecendo soluções que não sejam <br>
      apenas simples, mas também acessíveis e eficazes. <br>
      <br>
      Nossa missão vai além de atender às <br>
      necessidades atuais. Queremos criar sustentabilidade e melhor desenvoltura  através <br>
      da implementação de sensores na área da pulverização. Ocasionando avanços para <br>
      todos os envolvidos nesta cadeia produtiva. Sabemos que a tecnologia tem o poder de <br>
      mudar tudo, desde o manuseamento da fruta até à melhoria da qualidade da fruta na mesa das pessoas. <br>
      <br>
      Procuramos formas de ajudar os produtores <br>
      a crescer e tornar a agricultura mais eficiente. Nossa equipe é formada por <br>
      pessoas apaixonadas que adoram enfrentar desafios e inovação
      </p>
      </div>
  </section>

  <section>
    <div class="sobreNos">
      <h2 class="h2SobreNos">Sobre Nós</h2>
      <p class="pSobreNos">
      Somos uma equipe de TCC que temos como objetivo revolucionar a citricultura
      através da tecnologia. Nossa missão é trazer soluções econômicas viáveis,
      tecnologias e eficientes que beneficiam toda a citricultura.
      </p>
      <p class="pSobreNos">
      A equipe Pulveasy acredita <br>
      que aliar o amor ao trabalho com a tecnologia pode mudar o setor do cultivo! 
      <br>
      Estamos aqui para revolucionar a citricultura, fornecendo soluções que não sejam 
      apenas simples, mas também acessíveis e eficazes. <br>
      <br>
      Nossa missão vai além de atender às <br>
      necessidades atuais. Queremos criar sustentabilidade e melhor desenvoltura  através 
      da implementação de sensores na área da pulverização. Ocasionando avanços para 
      todos os envolvidos nesta cadeia produtiva. Sabemos que a tecnologia tem o poder de 
      mudar tudo, desde o manuseamento da fruta até à melhoria da qualidade da fruta na mesa das pessoas. <br>
      <br>
      Procuramos formas de ajudar os produtores 
      a crescer e tornar a agricultura mais eficiente. Nossa equipe é formada por 
      pessoas apaixonadas que adoram enfrentar desafios e inovação
      </p>
      </div>
  </section>

  <footer>
    <div class="footer">
      <div class="divFooter">
        <ul>
          <li><img class="logoFooter"  src="imagens/nav4.png" alt=""></li>
          <li class="txtFooter">Pulverizização fácil e tecnológica. <br>Proporcionando eficiência, sustentabilidade e econômia.<br> Facilitando a gestão e a operção do produtor </li>
        </ul>
        <ul class="ulFooter">
          <li class="txtFooter">Redes Sociais e Contato</li>
          <li id="instagram"><img id="logoInsta" src="imagens/intagram.svg" alt="">@Pulveasy</li>
        </ul>
      </div>
    </div>
  </footer>

  

   
</body>
</html>