<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

    <div class="background">

    <div id="divLogin">
        <img src="imagens/logoLogin.png" >
    </div>
        
    </div>

    <div class="container">
        <div class="form">

        <img id="imgLogin" src="pulveasy-13-07-2024\imagens\imagemLogin.jpg" alt="" srcset="">
            <form action="processaLogin.php" method="POST">

            <img class="imgPulveasyForms" class="imgPropriedade" src="imagens\nav4.png" alt="">

                <h1 id="txt_login">Login</h1>
                <div class="form_container">
                    <h3>CNPJ</h3>
                    <input type="text" name="cnpj" id="cnpj" placeholder="Digite seu CNPJ">
                </div>
                <div class="form_container">
                <h3 id="txt_senha">Senha</h3>
                <input type="password" name="password" id="password" placeholder="Digite sua senha">
                <br>
                <a id="txt_esqueci" href="">Esqueci minha senha</a>
                </div>

               <div id="btn_container"> 
                    <input type="submit" id="btn_form" name="Entrar">
                </div>
                <div>
                    <p id="txt_cadastrar"> Ainda não tem uma conta ? <a id="link_cadastrar" href="cadastro.php">Cadastre-se</a></p>
                </div>
            </form>
           
    
</body>
</html>