<?php

$mysql = new mysqli("localhost", "root", "310501Ab!", "SecuryBD");

#CONEXÃO COM BANCO DE DADOS
$con = mysqli_connect('localhost', 'root', '310501Ab!', 'SecuryBD');

$email = $_POST['email'];
$password = $_POST['password'];

#VALIDAÇÃO DE LOGIN
$sql = "SELECT * FROM `CAD_USUARIO` WHERE `email` = '$email' AND `senha` = '$password'";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "Login realizado com sucesso!";
} else {
    echo "Email ou senha inválidos";
}