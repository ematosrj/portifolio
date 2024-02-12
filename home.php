<?php
session_start();
require_once('session.php');
require_once('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerenciamento de Senhas</title>
     <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.4/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="senhas.css">
</head>
<body>
<?php require_once('nav.php'); ?>

    
    <?php
    /* Verifica se o usuário está logado
    if(isset($_SESSION['usuario'])) {
        $nome_usuario = $_SESSION['username'];
        echo "<p>Olá, $name! Você está logado.</p>";
        echo '<p><a href="logout.php">Sair</a></p>';
    } else {
        echo '<p>Você ainda não está logado. Faça <a href="index.php">login</a> para acessar o conteúdo.</p>';
    }
   */ ?>
</body>
</html>
