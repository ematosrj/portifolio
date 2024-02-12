<?php

$id = isset($_SESSION['id']) ? $_SESSION['id'] : '';
$username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '';



echo '<div style="text-align: left;">' .

     '<span style="color: red; font-weight: bold;">USUÁRIO:</span> <span style="color: black;">' . $username . '</span>' . '<span style="color: red; font-weight: bold;"> NÍVEL:</span> <span style="color: black;">' . $id . '</span>' .
     '<span style="color: red; font-weight: bold;"> NOME:</span> <span style="color: black;">' . $name . '</span>' ;

//print_r($_SESSION);

?>