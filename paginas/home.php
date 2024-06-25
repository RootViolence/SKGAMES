<!-- Arquivos CSS do Bootstrap -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Arquivos JavaScript do Bootstrap (jQuery primeiro, depois Popper.js e por último o Bootstrap) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

<!-- STYLESHEET -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner col-9 container mt-1">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagens/pagina/cowboy/banner01.jpg" alt="Primeiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/pagina/curse/banner01.jpg" alt="Segundo Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/pagina/tommy/banner01.jpg" alt="Terceiro Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/pagina/rocket/banner01.jpg" alt="Quarto Slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="imagens/pagina/bug/banner01.png" alt="Quinto Slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon " aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
<section id="preto">
  <h2 class="container-fluid text-center mt-3" style="color:#640b64">MAIS JOGADOS</h2>
</section>

<!-- CARDBOX -->

<div class="row row-cols-1 row-cols-md-3 g-4 m-3">
  <div class="col">
    <div class="card h-100 container-fluid bg-dark">
      <img src="imagens/pagina/curse/logocurse.png" class="card-img-top mx-auto mt-2" alt="...">
      <div class="card-body">
        <h5 class="card-title text-white">Curse Game</h5>
        <p class="card-text" style="color:#BEBEBE;">Entre no mundo perigoso e cheio de ação de Rua do Samurai, um jogo
          de combate intenso onde você assume o papel de um samurai solitário, determinado a livrar sua cidade da ameaça
          de bandidos implacáveis.</p>
      </div>
      <a href="cursed" class="btn btn-primary bg-purple">Jogar</a>
      <div class="card-footer">
        <small class="text-body-secondary text-white">Desenvolvedores: Guilherme</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 container-fluid bg-dark">
      <img src="imagens/pagina/tommy/banner02.png" class="card-img-top mx-auto mt-2" alt="...">
      <div class="card-body">
        <h5 class="card-title text-white">Tommy Adventures</h5>
        <p class="card-text" style="color:#BEBEBE">No Tommy's Adventure, o jogador iniciará a partida já em movimento e
          deverá seguir a diante tomando cuidado com os obstáculos e trajetos incompletos que implicarão direto no
          resultado do jogo.</p>
      </div>
      <a href="tommy" class="btn btn-primary bg-purple">Jogar</a>
      <div class="card-footer">
        <small class="text-body-secondary text-white">Desenvolvedores: Tainá Trindade</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 container-fluid bg-dark">
      <img src="imagens/pagina/cowboy/banner02.png" class="card-img-top mx-auto mt-2" alt="...">
      <div class="card-body">
        <h5 class="card-title text-white">Cowboy in a Dreamland</h5>
        <p class="card-text" style="color:#BEBEBE;">Em um dia nosso herói acorda em uma área devastada pelos mortos
          vivos. Apenas com breves lembranças de seu passado ele define seu destino: Salvar a garota que aparece em seus
          sonhos.</p>
      </div>
      <a href="cowboy" class="btn btn-primary bg-purple">Jogar</a>
      <div class="card-footer">
        <small class="text-body-secondary text-white">Desenvolvedores: Emanuel Paiva</small>
      </div>
    </div>
  </div>
</div>


<div class="row row-cols-1 row-cols-md-3 g-4 m-3">
  <div class="col">
    <div class="card h-100 container-fluid bg-dark">
      <img src="imagens/pagina/rocket/banner02.png" class="card-img-top mx-auto mt-2" alt="...">
      <div class="card-body">
        <h5 class="card-title text-white">Rocket on the Rocks</h5>
        <p class="card-text" style="color:#BEBEBE;">O jogo de plataforma Tommy's Adventure é inspirado em jogos estilo
          Endless Runner que são jogos de corrida intermináveis, como exemplo o Dino T-Rex, o famoso dinossauro do
          Google que aparece quando a internet cai.</p>
      </div>
      <a href="rocket" class="btn btn-primary bg-purple">Jogar</a>
      <div class="card-footer">
        <small class="text-body-secondary text-white">Desenvolvedores: SrVertex</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 container-fluid bg-dark">
      <img src="imagens/pagina/bug/banner01.png" class="card-img-top mx-auto mt-2" alt="...">
      <div class="card-body">
        <h5 class="card-title text-white">Bug from Hell</h5>
        <p class="card-text" style="color:#BEBEBE">Acompanhe o personagem na sua trajetória de fuga do inferno e escape
          com sucesso.
          Através de uma música extremamente aterradora, experimente uma expêriencia aterrorizante de Dino!</p>
      </div>
      <a href="bug" class="btn btn-primary bg-purple">Jogar</a>
      <div class="card-footer">
        <small class="text-body-secondary text-white">Desenvolvedores: Pedro Henrique</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100 container-fluid bg-dark">
      <img src="imagens/jogos/ABSOLVER.PNG" class="card-img-top mx-auto mt-2" alt="...">
      <div class="card-body">
        <h5 class="card-title text-white">Absolver</h5>
        <p class="card-text" style="color:#BEBEBE;">Absolver é um jogo de combate multijogador online, onde você usa uma
          máscara para ser avaliado se é um Candidato digno de entrar na força de elite dos onipresentes Guias, que
          criaram sua máscara e são os novos governantes do antigo Império de Adal.</p>
      </div>
      <a href="co123nt123ato" class="btn btn-primary bg-purple">Jogar</a>
      <div class="card-footer">
        <small class="text-body-secondary text-white">Desenvolvedores: Sloclap</small>
      </div>
    </div>
  </div>
</div>

<!-- BOTAO ESCONDER -->
<div class=" mb-5 center-screen">
  <button class="btn btn-primary text-center mt-5 mb-2 bg-purple" type="button" data-toggle="collapse"
    data-target="#conteudoCollapse" aria-expanded="false" aria-controls="conteudoCollapse">
    Abrir/Fechar Conteúdo
  </button>
</div>

<!-- ESCONDER -->
<div class="collapse" id="conteudoCollapse">
  <div class="card card-body" style="background-color:black;">
    <div class="row row-cols-1 row-cols-md-3 g-4 m-3">
      <div class="col">
        <div class="card h-100 container-fluid bg-dark">
          <img src="imagens/jogos/eldenring.jpeg" class="card-img-top mx-auto mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title text-white">Dark Souls REMASTERED</h5>
            <p class="card-text" style="color:#BEBEBE;">Experimente novamente o jogo aclamado pela crítica e definidor
              de gênero que foi o início de tudo. Belamente remasterizado, volte a Lordran com detalhes impressionantes
            </p>

          </div>
          <a href="21233" class="btn btn-primary bg-purple">Jogar</a>
          <div class="card-footer">
            <small class="text-body-secondary text-white">Desenvolvedores: FromSoftware, Bandai Namco Entertainment,
              Bluepoint Games, Virtuos, Japan Studio, QLOC</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 container-fluid bg-dark">
          <img src="imagens/jogos/sifuicon.jpg" class="card-img-top mx-auto mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title text-white">Sifu</h5>
            <p class="card-text" style="color:#BEBEBE">Dos mesmos criadores de Absolver, o aclamado jogo de luta para
              PS4, desta vez a Sloclap nos brinda com Sifu, onde acompanhamos a vingança de um jovem aprendiz de kung fu
              contra os assassinos de sua família. É um contra todos, sem nenhum aliado e com inúmeros inimigos.</p>
          </div>
          <a href="co23nta213to" class="btn btn-primary bg-purple">Jogar</a>
          <div class="card-footer">
            <small class="text-body-secondary text-white">Desenvolvedores: Sloclap, H2 Interactive</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 container-fluid bg-dark">
          <img src="imagens/jogos/ABSOLVER.PNG" class="card-img-top mx-auto mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title text-white">Absolver</h5>
            <p class="card-text" style="color:#BEBEBE;">Absolver é um jogo de combate multijogador online, onde você usa
              uma máscara para ser avaliado se é um Candidato digno de entrar na força de elite dos onipresentes Guias,
              que criaram sua máscara e são os novos governantes do antigo Império de Adal.</p>
          </div>
          <a href="con213tato23" class="btn btn-primary bg-purple">Jogar</a>
          <div class="card-footer">
            <small class="text-body-secondary text-white">Desenvolvedores: Sloclap</small>
          </div>
        </div>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 m-3">
      <div class="col">
        <div class="card h-100 container-fluid bg-dark">
          <img src="imagens/jogos/eldenring.jpeg" class="card-img-top mx-auto mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title text-white">Dark Souls REMASTERED</h5>
            <p class="card-text" style="color:#BEBEBE;">Experimente novamente o jogo aclamado pela crítica e definidor
              de gênero que foi o início de tudo. Belamente remasterizado, volte a Lordran com detalhes impressionantes
            </p>
          </div>
          <a href="con123tat213o" class="btn btn-primary bg-purple">Jogar</a>
          <div class="card-footer">
            <small class="text-body-secondary text-white">Desenvolvedores: FromSoftware, Bandai Namco Entertainment,
              Bluepoint Games, Virtuos, Japan Studio, QLOC</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 container-fluid bg-dark">
          <img src="imagens/jogos/sifuicon.jpg" class="card-img-top mx-auto mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title text-white">Sifu</h5>
            <p class="card-text" style="color:#BEBEBE">Dos mesmos criadores de Absolver, o aclamado jogo de luta para
              PS4, desta vez a Sloclap nos brinda com Sifu, onde acompanhamos a vingança de um jovem aprendiz de kung fu
              contra os assassinos de sua família. É um contra todos, sem nenhum aliado e com inúmeros inimigos.</p>
          </div>
          <a href="cont21312at23o" class="btn btn-primary bg-purple">Jogar</a>
          <div class="card-footer">
            <small class="text-body-secondary text-white">Desenvolvedores: Sloclap, H2 Interactive</small>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 container-fluid bg-dark">
          <img src="imagens/jogos/ABSOLVER.PNG" class="card-img-top mx-auto mt-2" alt="...">
          <div class="card-body">
            <h5 class="card-title text-white">Absolver</h5>
            <p class="card-text" style="color:#BEBEBE;">Absolver é um jogo de combate multijogador online, onde você usa
              uma máscara para ser avaliado se é um Candidato digno de entrar na força de elite dos onipresentes Guias,
              que criaram sua máscara e são os novos governantes do antigo Império de Adal.</p>
          </div>
          <a href="conta23to" class="btn btn-primary bg-purple">Jogar</a>
          <div class="card-footer">
            <small class="text-body-secondary text-white">Desenvolvedores: Sloclap</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>