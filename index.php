<?php
  if ($_GET){
    $nomearquivo = 'contato.json';
    if(file_exists($nomearquivo)){
      $conteudo = file_get_contents($nomearquivo);
      $conteudo = json_decode($conteudo, true);
    }else{
      $conteudo = [];
    }

    $conteudo[] = $_GET;

    $conteudo_json = json_encode($conteudo);

    file_put_contents($nomearquivo,$conteudo_json);
    //envia a informacao pra um arquivo json

  }else{
    echo "Formulário vazio";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Pontes</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
              <img class="img-responsive" src="imagens/ponteslogobranco.png">
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse in" aria-expanded="true" style="">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">Segmentos</a></li>
              <li><a href="#">Quem somos</a></li>
              <li><a href="#">Contato</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </header>
    <section class="principal">
      <div class="container">
        <h1>Um novo mercado</h1>
      </div>
    </section>
    <section class = "formulario">
      <div class="container">
      <form action="index.php" method="get">
        <label for="nome">Nome</label>
        <input required class="form-control" type="text" name="nome" placeholder="Digite seu nome completo">
        <label for="email">Email</label>
        <input required class="form-control" type="email" name="email" placeholder="Digite seu email">
        <label for="mensagem">Mensagem</label>
        <textarea required name="mensagem" class= "form-control"></textarea>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
      <div class="text-center">
        <?php
          if ($_GET){
            echo "Obrigado,". $_GET['nome'];
          }
         ?>
      </div>
      </div>
    </section>
    <script src="js/jquery-3.3.1.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
