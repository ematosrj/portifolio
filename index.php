<?php
session_start();
require_once('conexao.php');

// Verifica se o usuário já está logado
if (isset($_SESSION['usuario'])) {
    header("Location: index.php"); // Redireciona para a página inicial se já estiver logado
    exit();
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos de usuário e senha foram preenchidos
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            echo 'Insira um usuário e senha válidos para prosseguir com o login.';
        } else {
            // Consulta SQL utilizando prepared statements
            $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
            $stmt = $mysqli->prepare($sql);
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                // Usuário encontrado, logado com sucesso
                $usuario = $result->fetch_assoc();

                // Definindo as variáveis de sessão
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['username'] = $usuario['username'];
                $_SESSION['name'] = $usuario['name'];
                $_SESSION['email'] = $usuario['email'];

                // Redirecionando para a página de escolha
                header("Location: home.php");
                exit();
            } else {
                // Usuário não encontrado, exibindo mensagem de erro
                echo "Usuário ou senha inválidos.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portifólio Pessoal</title>
    <!-- Link para o FontAwesome 4.7.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.4/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css">

</head>
<body>
    <?php require_once('nav.php'); ?>
   
    <section class="hero is-vertical-centered ">
      <div class="hero-body">
        <div class="container has-text-centered">
          <div class="column is-4 is-offset-4">
          <div class="box custom-box">
                <p class="subtitle is-4 custom-text-color">Insira as credenciais para acessar.</p>
                <br>
            <form  action="index.php" method="POST">
                <div class="control has-icons-left">
                    <input class="input" type="text" id="username" name="username" placeholder="Usuário">
                    <!-- Ícone de usuário -->
                    <span class="icon is-medium is-left custom-icon-color">
                        <i class="fa fa-user has-text-black "></i>
                    </span>
                </div>
           <br>


                <div class="control has-icons-left">
                    <input class="input" type="password" id="password" name="password" placeholder="Senha">
                    <!-- Ícone de cadeado -->
                    <span class="icon is-medium is-left ">
                        <i class="fa fa-lock has-text-black"></i>
                    </span>
                </div>
       <br>

       <input class="button is-lime" type="submit" value="Acessar">
<input class="button is-lime" type="button" value="Registrar" onclick="window.location.href='register.php'">
<input class="button is-lime" type="reset" value="Limpar">

        </form>
        <div class="field mt-4 custom-text-color ">
                  <label class="checkbox">
                    <input type="checkbox" />
                    Remember me
                  </label>
                </div>        
    </div>
</div>
</section>
<?php require_once("footer.php"); ?>   
</body>
</html>
