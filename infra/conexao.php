<?php

$host = "localhost";
$usuario = "root";
$senha = "root";
$banco = "Restaurante_Pratos";

$conexao = new mysqli($host, $usuario, $Email, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco: " . $conexao->connect_error);
};

$conexao->set_charset("utf8mb4");
