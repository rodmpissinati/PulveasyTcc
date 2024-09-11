<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="background">
    </div>

    <div class="container">
        <div class="form">
            <form action="processaCadastro.php" method="POST">

                <h1 id="txt_login">Cadastro</h1>
                <div class="form_container">
                    <h3 class="txt_cadastro">Nome</h3>
                    <input type="text" id="user" name="nome" placeholder="Digite seu nome">
                </div>
                <div class="form_container">
                    <h3 class="txt_cadastro">Email</h3>
                    <input type="email" id="email" name="email" placeholder="Digite seu email">
                </div>
                <div class="form_container">
                    <h3 class="txt_cadastro">CNPJ</h3>
                    <input type="text" id="cnpj" name="cnpj" placeholder="Digite seu CNPJ">
                </div>
                <div class="form_container">
                <h3 class="txt_cadastro">Senha</h3>
                <input type="password" id="password" name="senha" placeholder="Digite sua senha">
                </div>

               <div id="btn_container"> 
                    <input type="submit" id="btn_form" class="txt_cadastro" name="Entrar" >
                </div>
                <div>
                    <p id="txt_entrar"> Já tem uma conta ? <a id="link_cadastrar" href="login.php">Entrar</a></p>
                </div>
            </form>


    
</body>
</html>

