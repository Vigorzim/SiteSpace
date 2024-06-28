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
            <a class="nav-link active" aria-current="page" href="Loja">Loja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Quem somos">Quem Somos</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Equipe">Equipe</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Contato">Contato</a>
          </li>

        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
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

   <footer class="footer">
      <p class="text-center">
        Desenvolvido por Igor Uggioni
      </p>
   </footer>
  
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/fslightbox.js"></script>

  

</body>

</html>