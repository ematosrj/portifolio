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
            
          <div class="field">
            <form action="contato.php">
          <p class="subtitle is-4 custom-text-color">Mensagem direct ao desenvolvedor.</p>
  <div class="control">
    <textarea class="textarea" placeholder="Área para sugestões"></textarea>
    <input type="button" class="button is-lime mt-3" value="Enviar sugestão" >
    <input type="button" type="reset" value="Limpar Formulário">
  </div>
</div>

<div class="field">
  <div class="control">
    <label class="checkbox">
      <input type="checkbox">
      Aceito os termos </a>
    </label>
    </form>
  </div>
</div>

</div>        
    </div>
</div>
</section>
<?php require_once("footer.php"); ?>   
</body>
</html>

