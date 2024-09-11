<?php
require 'conexao.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$cnpj = filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', );

if ($nome && $email && $senha) {
    $sql = $pdo->prepare("SELECT * FROM tb_usuario WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();
    
    if ($sql->rowCount() === 0) {
        // Criptografar a senha

        // Inserir novo usuário
        $sql = $pdo->prepare("INSERT INTO tb_usuario (nome, cnpj, email, senha) VALUES (:nome, :cnpj, :email, :senha)");
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':cnpj', $cnpj);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();

        header('Location: login.php');
        exit;
    } else {
       
        header('Location: cadastro.php?error=email_exists');
        exit;
    }
} else {
   
    header('Location: cadastro.php?error=invalid_input');
    exit;
}
?>
