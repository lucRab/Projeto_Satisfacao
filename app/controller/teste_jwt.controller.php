<?php
require("../../vendor/autoload.php");
require("../../core/conexao.php");
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__,3));
$dotenv->load();


$cpf = $_POST["cpf_login"];
$senha = $_POST["senha_login"];

$conxao = Conexao::conectar();

$prepare = $conxao->prepare("SELECT * from aluno where cpf = :cpf");
$prepare->execute([
    'cpf' => $cpf
]);
$userFound = $prepare->fetch();

$payload = [
    "exp" => time() + 10,
    "iat" => time(),
    "cpf" => $cpf
];

$encode = JWT::encode($payload,$_ENV['KEY'],'HS512');


header("location: ../view/login.php?encode=$encode");
die();


