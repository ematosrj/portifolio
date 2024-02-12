<?php
session_start();

// Encerra a sessão
session_unset();
session_destroy();

// Redireciona o usuário de volta para a página de login (ou qualquer outra página desejada)
header("Location: index.php");
exit();
?>
