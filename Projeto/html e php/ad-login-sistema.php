<?php
// local onde vai validar o usuario e senha do login
include('loginConexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: loginConexao.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario_id, usuario from sistema where usuario = '$usuario' and senha = md5('$senha')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

echo $row;exit;

?>