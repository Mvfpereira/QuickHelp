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
                        <a class="nav-link mx-lg-2" href="index.php#services">Soluções</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mx-lg-2" href="index.php#contact">Contato</a>
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
            <!-- Criando o conteudo principal -->
            <section id="team" class="team section-padding">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-12">
                            <div class="section-header text-center pb5">
                                <br>
                                <h1>Nossa Equipe</h1><br><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-8 col-md8 col-lg-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <!-- <img src="assets/img/marcus.jpg" alt="Marcus" class="img-fluid rounded-circle"> -->
                                    <h3 class="card-title py-2">Marcus Vinícius</h3>
                                    <p class="card-text">Desenvolvedor de Software</p>
                                    <p class="socials">
                                        <p class="text-dark mx-1">marcus.pereira13@fatec.sp.gov.br</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 col-md8 col-lg-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <!-- <img src="assets\img\fernando.jpg" alt="Marcus" class="img-fluid rounded-circle"> -->
                                    <h3 class="card-title py-2">Fernando Gomes</h3>
                                    <p class="card-text">Analisa de Infraestrutura Pleno</p>
                                    <p class="socials">
                                        <p class="text-dark mx-1">fernando.oliveira114@fatec.sp.gov.br</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-8 col-md8 col-lg-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="assets/img/fernando.jpg" alt="Fernando" class="img-fluid rounded-circle">
                                    <h3 class="card-ttle py-2">Fernando Gomes</h3>
                                    <p class="card-text">Analisa de Infraestrutura Pleno</p>
                                    <p class="socials">
                                        <p class="text-dark mx-1">fernando.oliveira114@fatec.sp.gov.br</p>
                                    </p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </section>
          <!-- Inicio Sugestões -->
          <!-- <section id="contact" class="contact section-padding">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="section-header text-center pb-5">
                    <h2>Sugestões?</h2>
                    <p>Caso tenha sugestões, reclamações ou elogios. Não deixe de entrar em contato conosco.</p>
                  </div>
                </div>
              </div> -->
              <!-- Inicio Formulario -->
              <!-- <div class="row m-0">
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
          </section> -->
          <!-- Fim Sugestões -->
          <!-- RodaPé -->
          <!-- <footer class="bg-dark p-2 text-center">
            <div class="container">
              <p class="text-white">Todos os direitos reservados. </p>
            </div>
          </footer> -->

          <!-- Scripts bootstrap -->          
          <script src="node_modules/jquery/dist/jquery.js"></script>
          <script src="node_modules/popper.js/dist/popper.js"></script>
          <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
      </main>
  </body>
</html>