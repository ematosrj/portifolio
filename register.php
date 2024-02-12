<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerenciamento de Senhas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.4/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="senhas.css">
    <script src="js/modal.js"></script>
</head>
<style>
    html {
    overflow-y: hidden;
}

</style>
<body>

    <div class="box">
    <h2 class="has-text-centered">Registro de Usuário</h2>
    <form action="register.php" method="POST">
        <div class="field">
            <div class="control has-icons-left mt-4">
                <input class="input" type="text" id="nome" name="username" placeholder="Usuário"  required>
                <!-- Ícone de usuário -->
                <span class="icon is-small is-left has-text-info">
                    <i class="fa fa-user"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <div class="control has-icons-left">
                <input class="input" type="email" id="email" name="email" placeholder="E-mail" required>
                <!-- Ícone de envelope -->
                <span class="icon is-small is-left has-text-info">
                    <i class="fa fa-envelope"></i>
                </span>
            </div>
        </div>
        
        <div class="field">
            <div class="control has-icons-left">
                <input class="input" type="password" id="senha" name="password" placeholder="Senha" required>
                <!-- Ícone de cadeado -->
                <span class="icon is-small is-left has-text-info">
                    <i class="fa fa-lock"></i>
                </span>
            </div>
        </div>

        <!-- Checkbox e radio buttons aqui -->

        <div class="field has-text-centered">
            <div class="control">
                <label class="checkbox">
                    <input type="checkbox" >
                    Concordo com os <a href="#">termos e condições</a>
                </label>
            </div>
        </div>

        <div class="field has-text-centered">
            <div class="control">
                <label class="radio">
                    <input type="radio" name="question" required>
                    Sim
                </label>
                <label class="radio">
                    <input type="radio" name="question" required>
                    Não
                </label>
            </div>
        </div>


        <div class="field has-text-centered">
            <div class="control">
            <input class="button is-info " type="submit" value="Registrar">
        <input class="button is-info" type="reset" value="Limpar">
        <a class="button is-info " href="index.php">Página inicial</a>
            </div>
        </div>

        
    </form>

</body>
</html>
