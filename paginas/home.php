<div id="carouselExampleIndicators" class="carousel slide">

    <!-- Inicio dos indicadores do carrousel -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <!-- Fim dos indicadores do carrousel -->

  <!-- Inicio slides carrousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Imagens/Birdgame.jpeg" class="d-block w-100" alt="The Bird Game">
    </div>
    <div class="carousel-item">
      <img src="Imagens/Goldenapple.jpeg" class="d-block w-100" alt="Em Busca Da Golden Apple">
    </div>
    <div class="carousel-item">
      <img src="Imagens/Catgame.jpeg" class="d-block w-100" alt="Cat Destiny">
    </div>
  </div>
  <!-- Fim slides carrousel -->
   
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>



<div class="container">
  <h1>Nossos Jogos:</h1>
  <div class="row">
    <?php
    $url = "https://crackgamess.000webhostapp.com/api/jogo.php/";
    //$url = "https://api.themoviedb.org/3/movie/now_playing?language=pt-BR&page=1&api_key={$api_key}";
    $dados = file_get_contents($url);
    $dados = json_decode($dados);
    foreach ($dados->result as $jogos) {
        
    }
    ?>

    
    

  </div>
</div>