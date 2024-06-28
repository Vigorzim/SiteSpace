<?php
//$api_key = "3732bbad0ed34e913a31f65e350d6eeb";
$base_url = "https://crackgamess.000webhostapp.com/api/jogo.php/";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Space Gaming</title>
  <base href="http://localhost/spacegaming/">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="shortcut icon" href="Imagens/SpaceGaming.jpeg">
</head>



<body>


  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <img src="Imagens/SpaceGaming.jpeg" alt="SPACE">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Loja</a>
          </li>

          <li class="nav-item">
            <a href="contato" class="nav-link">Contato</a>
          </li>

        </ul>
        <div class="d-flex">
          <a href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#modalLogin">
            Efetuar Login
          </a>
        </div>
      </div>
    </div>
  </nav>



  <main>
    <?php
    if (isset($_GET["param"])) {
      $p = explode("/", $_GET["param"]);
    }

    $page = $p[0] ?? "home";

    $pagina = "paginas/{$page}.php";

    if (file_exists($pagina)) {
      include $pagina;
    } else {
      include "paginas/erro.php";
    }
    ?>
  </main>


  <a href="https://www.youtube.com/@vIgorzim" target="_blank"><input type="button" value="Youtube"></a>

  <a href="https://www.instagram.com/igorwillcover/?locale=en-GB" target="_blank" ><button>Instagram</button></a>


  <footer class="footer">
    <p class="text-center">
      Desenvolvido por Igor Uggioni
    </p>
  </footer>

  <!-- Modal -->
  <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="container">
    <h1 class="text-center">Faça seu login</h1>
    <form name="formContato" method="post" action="enviar">
        <label for="nome">Preencha o seu nome:</label>
        <input type="text" name="nome" id="nome" 
        required class="form-control" class="required" oninput="nomeValidate()">  
        <span class="span-required" style="display: none; color: red;" >Deve ter pelo 3 digitos </span>
        <br>
        <label for="email">Preencha o seu email:</label>
        <input type="email" name="email" id="email" 
        required class="form-control form-control-lg" class="required" oninput="emailValidate()">
        <span class="span-required" style="display: none; color: red;">Digite um email valido</span>
        <br>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Salvar</button>
        </div>
    </form>
</div>


        </div>
        
      </div>
    </div>
  </div>

  


</body>
<script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/fslightbox.js"></script>

  <script src="js/validacao.js"></script>


</html>