<?php
$mysql = new mysqli("localhost", "root", "310501Ab!", "SecuryBD");

# CONEXÃO COM BANCO DE DADOS
$con = mysqli_connect('localhost', 'root', '310501Ab!', 'SecuryBD');

$name = $_POST['name'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

# Verifica se as senhas são iguais
if ($password != $confirmPassword) {
    echo "As senhas não coincidem.";
    mysqli_close($con);
    exit(); // Encerra o script caso as senhas não sejam iguais
}

# INSERÇÃO DE VALORES NO BANCO DE DADOS
$sql = "INSERT INTO `CAD_USUARIO` (`cpf`, `email`, `senha`, `telefone`, `nome`) VALUES ('$cpf', '$email', '$password', '$phone', '$name')";

$rs = mysqli_query($con, $sql);

if ($rs) {
    echo "Cadastro feito com sucesso!";
} else {
    echo "Erro ao cadastrar usuário: " . mysqli_error($con);
}

mysqli_close($con);
?>
