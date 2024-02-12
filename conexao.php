<?php
// Configurações do banco de dados
$db_host = 'localhost'; // Endereço do servidor MySQL
$db_user = 'root'; // Nome de usuário do MySQL
$db_pass = ''; // Senha do MySQL
$db_name = 'senhas'; // Nome do banco de dados

// Conexão com o banco de dados
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Verifica se houve erro na conexão
if ($mysqli->connect_errno) {
    die('Erro na conexão com o banco de dados: ' . $mysqli->connect_error);
}

// Define o charset para utf8 (opcional)
$mysqli->set_charset("utf8");

?>
