<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Net Limiter</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/styleNetLimiter.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
</head>
<body>
    <!-- Barra de Navegação -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <!-- <div class="container"> -->
                <a class="navbar-brand me-auto" href="index.php">QuickHelp</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
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
                                <a class="nav-link mx-lg-2" href="#contact">Contato</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="aboutus.php">Sobre Nós</a>
                            </li>
                        </ul>
                        <!-- <a href="login.php" class="login-button">Login</a> -->
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
                    </div>
                </div>
            <!-- </div> -->
        </nav>
    </header>
    <!-- Conteúdo da Página -->
    <main>
        <!-- Vídeo e Botões -->
        <section id="about" class="about section-padding1">
            <div class="container text-center text-white">
                <video controls>
                    <source src="assets/video/netLimiter.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="buttons">
                    <a href="#instalacao" class="btn btn-primary btn-lg">Instalação</a>
                    <a href="#configuracao" class="btn btn-primary btn-lg">Configuração</a>
                    <a href="#testeimagem" class="btn btn-primary btn-lg">Teste em Imagem</a>
                    <!-- <a href="#instalacao" class="btn btn-primary btn-lg">Dica Extra</a> -->
                </div>
            </div>
        </section>
        <!-- Instalação -->
        <section id="instalacao" class="about section-padding2 bg-light">
            <div class="container">
                <h2>Instalação</h2>
                <br>
                <div class="row align-items-center">
                    <!-- Carrossel de imagens -->
                    <div class="col-lg-4 col-md-12">
                        <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="parent-container">
                                        <a href="assets/img/netLimiterInstall.png" title="Instalação: Como instalar o Net Limiter.">
                                            <img src="assets/img/netLimiterInstall.png" class="img-fluid" alt="Instalação: Como instalar o Net Limiter">
                                        </a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="parent-container">
                                        <a href="assets/img/netLimiterInicio.png" title="Instalação: Página Inicial do Aplicativo Net Limiter">
                                            <img src="assets/img/netLimiterInicio.png" class="img-fluid" alt="Página Inicial do Aplicativo Net Limiter">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <!-- Texto ao lado das imagens -->
                    <div class="col-lg-8 col-md-12 ps-lg-5 mt-md-5">
                        <div class="text-center">
                            <div class="about-textConfig">
                                <ul>
                                    <li>
                                        <h5>1° Passo:</h5>
                                        <p>Vá até o Site Oficial: <a href="https://www.netlimiter.com/download">https://www.netlimiter.com/download</a></p>
                                    </li>
                                    <li>
                                        <h5>2° Passo:</h5>
                                        <p>Feito o download, será necessário efetuar a instalação. (Conforme a figura ao lado.)</p>
                                    </li>
                                    <li>
                                        <h5>3° Passo:</h5>
                                        <p>Ao Finalizar, ele mostrará sua tela de Setup e Visualização.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Configuração -->
        <section id="configuracao" class="about section-padding2">
            <div class="container">
                <div class="row align-items-center">
                    <h2>Configuração</h2>
                    <br>
                    <div class="col-md-6">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="parent-container">
                                        <a href="assets/img/netLimiterConfiguracao1.png" title="Configuração: Configuração do Aplicativo Net Limiter">
                                            <div class=" img-teste"> 
                                                <img src="assets/img/netLimiterConfiguracao1.png" class="d-block w-100" alt="Configuração do Aplicativo Net Limiter">
                                            </div>        
                                        </a>
                                    </div>   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <div class="about-textConfig">
                                <ul>
                                    <li>
                                        <h5>1° Passo:</h5>
                                        <p>Selecione o programa que deseja limitar.</p>
                                    </li>
                                    <li>
                                        <h5>2° Passo:</h5>
                                        <p>Selecione o ícone com seta para baixo, ele indica Download.</p>
                                    </li>
                                    <li>
                                        <h5>3° Passo:</h5>
                                        <p>Coloque o valor numérico de taxa que deseja limitar.</p>
                                    </li>
                                    <li>
                                        <h5>4° Passo:</h5>
                                        <p>Selecione qual a velocidade de transferência.</p>
                                    </li>
                                    <li>
                                        <h5>5° Passo:</h5>
                                        <p>Finalize com Ok.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Teste em Imagem -->
        <section id="testeimagem" class="about section-padding2">
            <div class="container">
                <div class="row align-items-center">
                <h2>Teste em Imagem</h2>
                    <div class="col-md-6">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="parent-container">
                                        <a href="assets/img/NetLimiterVelocidadeSemLimitador.png" title="Teste em Imagem: Testando velocidade sem o limitador.">
                                            <div class="img-teste">    
                                                <img src="assets/img/NetLimiterVelocidadeSemLimitador.png" class="d-block w-100" alt="Configuração do Aplicativo Net Limiter">
                                            </div>
                                        </a>
                                    </div>   
                                </div>
                                <div class="carousel-item">
                                    <div class="parent-container">
                                        <a href="assets/img/NetLimiterGoogleSemLimitador.png" title="Teste em Imagem: Dados que o Google Chrome está puxando.">
                                            <div class="img-teste">  
                                                <img src="assets/img/NetLimiterGoogleSemLimitador.png" class="d-block w-100" alt="Configuração do Aplicativo Net Limiter">
                                            </div>
                                        </a>
                                    </div> 
                                </div>
                                <div class="carousel-item">
                                    <div class="parent-container">
                                        <a href="assets/img/NetLimiterGoogleComLimitador.png" title="Teste em Imagem: Limitando a velocidade do Google Chrome.">
                                            <div class="img-teste">
                                                <img src="assets/img/NetLimiterGoogleComLimitador.png" class="d-block w-100" alt="Configuração do Aplicativo Net Limiter">
                                            </div>
                                        </a>
                                    </div> 
                                </div>
                                <div class="carousel-item">
                                    <div class="parent-container">
                                        <a href="assets/img/NetLimiterFuncionando.png" title="Teste em Imagem: Testando velocidade com o limitador.">
                                            <div class="img-teste">
                                                <img src="assets/img/NetLimiterGoogleSemLimitador.png" class="d-block w-100" alt="Configuração do Aplicativo Net Limiter">
                                            </div>
                                        </a>
                                    </div> 
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center">
                            <div class="about-textConfig">
                                <ul>
                                    <li>
                                        <h5>1° e 2° Passo:</h5>
                                        <p>Para finalizar com o teste em imagem, utilizaremos o site <a href="https://speedof.me/">https://speedof.me/</a>. Realize um teste de velocidade <span class="SemLimitador">sem</span> o limitador de banda.</p>
                                    </li>
                                    <li>
                                        <h5>3° Passo:</h5>
                                        <p>Note que o Google está puxando 1,8Mbs de Download e 628 de Upload.</p>
                                    </li>
                                    <li>
                                        <h5>4° Passo:</h5>
                                        <p>Agora, realizando um teste de velocidade com o limitador de banda. Limitando Download e Upload a 5Kb/s.</p>
                                    </li>
                                    <li>
                                        <h5>5° Passo:</h5>
                                        <p>Observe que a página demora a carregar.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contato -->
        <section id="contact" class="contact section-padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-center">
                            <h2 class="text-dark">Sugestões?</h2>
                            <p class="text-dark">Caso tenha sugestões, reclamações ou elogios. Não deixe de entrar em contato conosco.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form action="#" class="bg-light p-4">
                            <div class="mb-3">
                                <input type="text" class="form-control" required placeholder="Nome Completo">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" required placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <textarea rows="3" required class="form-control" placeholder="Coloque sua sugestão aqui."></textarea>
                            </div>
                            <button class="btn btn-primary btn-block">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Rodapé -->
    <footer class="bg-dark p-2 text-center text-white">
        <!-- <div class="container"> -->
            <p>Todos os direitos reservados.</p>
        <!-- </div> -->
    </footer>
    <!-- Scripts JavaScript -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
