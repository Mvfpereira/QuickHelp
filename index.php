<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Projeto TCC</title>
      <link rel="icon" type="image/png" sizes="32x32" href="assets/img/Hogwarts-Logo.png">   
      <!--BootStrap-->
      <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
      <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
      <main>
          <!--Criando o menu de Navegação-->
          <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
              <!-- <div class="container"> -->
                <a class="navbar-brand me-auto" href="index.php">QuickHelp</a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">QuickHelp</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                      <li class="nav-item">
                        <a class="nav-link mx-lg-2 active" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="#services">Soluções</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="#contact">Contato</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="aboutus.php">Sobre Nós</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <?php
                  session_start();
                  include("assets/php/config.php");
                  if (isset($_SESSION['user'])) {
                    // Se o usuário estiver logado, exibe o nome do usuário e a opção de logout
                    echo "<a class='navbar-brand me-auto'>Olá, " . $_SESSION['user'] .               "</a>";
                    echo "<a href='logout.php' class='login-button' style='margin-left: 20px;'>Logout</a>";
                  } else {
                    // Se não estiver logado, exibe o link de login
                    echo "<a href='login.php' class='login-button'>Login</a>";
                    echo "<button class='navbar-toggler pe-0' type='button' data-bs-toggle='offcanvas' data-bs-target='#offcanvasNavbar' aria-controls='offcanvasNavbar'>";
                    echo "<span class='navbar-toggler-icon'></span>";
                    echo "</button> ";
                  }
                ?>
                <!-- <a href="login.php" class="login-button">Login</a>
                <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button> -->
              <!-- </div> -->
            </nav>
          </header>
          <!--Navegação encerra aqui-->
          <section>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                  <img src="assets/img/Imagem1-lee-campbell.jpg" class="img-fluid d-block w-100" alt="gryffindor">
                  <div class="carousel-caption">
                    <!-- <h5><a href="gryffindor.html" class="btn btn-danger">GRYFFINDOR</a></h5> -->
                    <h2>Bem-vindo à revolução da administração de redes em escolas.</h2>
                    <p>Aqui, cada clique é uma jornada rumo à simplificação de desafios complexos.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Conteudo Sobre a Pagina -->
          <section id="about" class="about section-padding">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                  <div class="about-img">
                    <img src="assets/img/Imagem3-polina-zimmerman.jpg" alt="" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                  <div class="about-text">
                    <h2>Nossa Missão</h2>
                    <p>Nossa missão é clara: capacitar você com conhecimentos, ferramentas e estratégias para enfrentar qualquer obstáculo que a complexa teia de redes em ambientes educacionais possa apresentar.<br> Estamos aqui para ajudar você a transformar desafios em oportunidades e a tornar sua rede escolar mais eficiente, segura e preparada para o futuro. </p>
                    <a href="aboutus.php" class="btn btn-primary">Sobre nós</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Fim sobre a Pagina -->
          <!-- Serviços -->
          <!-- Inicio Primeira Fileira -->
          <section id="services" class="services section-padding">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="section-header text-center pb-5">
                    <h2>Soluções</h2>
                    <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis molestiae voluptates laudantium excepturi iure voluptas.</p> -->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                  <div class="card text-white text-center bg-dark pb-1">
                    <div class="card-body">
                      <!-- <div class="card" style="width: 18rem;"> -->
                        <img class="card-img-top" src="assets/img/Imagem4-mustafa-akkus.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Net Limiter</h5>
                          <p class="card-text">Domine sua conexão com o Net Limiter: controle sua largura de banda com precisão.</p>
                          <a href="netlimiter.php" class="btn btn-primary">Net Limiter</a>
                        </div>
                      <!-- </div> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                  <div class="card text-white text-center bg-dark pb-1">
                    <div class="card-body">
                      <!-- <div class="card" style="width: 18rem;"> -->
                        <img class="card-img-top" src="assets/img/Imagem4-mustafa-akkus.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Solução 2</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="Solucao1.php" class="btn btn-primary">Solução</a>
                        </div>
                      <!-- </div> -->
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                  <div class="card text-white text-center bg-dark pb-1">
                    <div class="card-body">
                      <!-- <div class="card" style="width: 18rem;"> -->
                        <img class="card-img-top" src="assets/img/Imagem4-mustafa-akkus.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                          <h5 class="card-title">Solução 3</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="Solucao1.php" class="btn btn-primary">Solução</a>
                        </div>
                      <!-- </div> -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- Fim da Primeira Fileira -->
            </div>
          </section>
          <!-- Inicio Sugestões -->
          <section id="contact" class="contact section-padding">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="section-header text-center pb-5">
                    <h2>Sugestões?</h2>
                    <p>Caso tenha sugestões, reclamações ou elogios. Não deixe de entrar em contato conosco.</p>
                  </div>
                </div>
              </div>
              <!-- Inicio Formulario -->
              <div class="row m-0">
                <div class="col-md-12 p-0 pt-4 pb-4">
                  <form action="#" class="bg-light p-4.m-auto">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="mb-3">
                          <input type="text" class="form-control" required placeholder="Nome Completo">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mb-3">
                          <input type="text" class="form-control" required placeholder="Email">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mb-3">
                          <textarea rows="3" required class="form-control" placeholder="Coloque sua sugestão aqui."></textarea>
                        </div>
                      </div>
                      <button class="btn btn-primary btn-lg btn-block mt-3">Enviar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>
          <!-- Fim Sugestões -->
          <!-- RodaPé -->
          <footer class="bg-dark p-2 text-center">
            <div class="container">
              <p class="text-white">Todos os direitos reservados. </p>
            </div>
          </footer>

          <!-- Scripts bootstrap -->          
          <script src="node_modules/jquery/dist/jquery.js"></script>
          <script src="node_modules/popper.js/dist/popper.js"></script>
          <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
      </main>
  </body>
</html>