<?php
include ('conexao.php'); // Certifique-se de que o arquivo 'conexao.php' use PDO para a conexão.

if(isset($_POST['cnpj']) || isset($_POST['password'])){

    if (strlen($_POST['cnpj']) == 0){
        echo "Preencha seu CNPJ";
    } else if(strlen($_POST['password']) == 0){
        echo "Preencha sua Senha";
    } else {
        $cnpj = $_POST['cnpj'];
        $senha = $_POST['password'];

        
        $sql_sel = "SELECT * FROM tb_usuario WHERE cnpj = :cnpj AND senha = :senha";
        $stmt = $pdo->prepare($sql_sel); 
       
        $stmt->bindParam(':cnpj', $cnpj);
        $stmt->bindParam(':senha', $senha);


        $stmt->execute();

  
        $quantidade = $stmt->rowCount();

        if($quantidade == 1){
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!isset($_SESSION)){
                session_start();
            }

            $_SESSION['cnpj'] = $usuario['cnpj']; // Salva o CNPJ na sessão
            $_SESSION['name'] = $usuario['nome']; // Salva o nome na sessão

            header("Location: index.php"); 
            exit; // 
        } else {
            echo "Falha, usuário ou senha INCORRETOS";
        }
    }
}
?>
