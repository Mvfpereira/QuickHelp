<?php
  // session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Login</title>
      <link rel="icon" type="image/png" sizes="32x32" href="assets/img/Hogwarts-Logo.png">   
      <!--BootStrap-->
      <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
      <link href="assets/css/styleLogin.css" rel="stylesheet">
  </head>
  <body>
      <main>
          <!--Criando o menu de Navegação-->
          <header>
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-3">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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
                          <!-- <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#services">Soluções</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="#contact">Contato</a>
                          </li> -->
                          <li class="nav-item">
                            <a class="nav-link mx-lg-2" href="aboutus.php">Sobre Nós</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <a href="#" class="login-button">Login</a>
                    <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  </nav>
                </div>
              </div>
            </div>
          </header>
          <!--Navegação encerra aqui-->
          <!-- Inicio Login  -->
          <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
              <div class="col-lg-4">
                <div class="box form-box">
                    <header>Login</header>
                    <form action="" method="post">
                        <div class="field input">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" autocomplete="off" required>
                        </div>
                        <div class="field input">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" autocomplete="off" required>
                        </div>
                        <div class="field">
                            <input type="submit" class="btn btn-primary" name="submit" value="Login" required>
                        </div>
                        <div class="links">
                            Não tem conta? <a href="registro.php">Registre-se</a>
                        </div>
                        <?php
                          session_start();
                          include("assets/php/config.php");
                          if(isset($_POST['submit'])){
                            $email = mysqli_real_escape_string($con, $_POST['email']);
                            $password = mysqli_real_escape_string($con, $_POST['senha']);

                            $result = mysqli_query($con, "SELECT EMAIL, USER, SENHA FROM usuarios WHERE EMAIL='$email' AND SENHA='$password'") or die("Email ou senha incorretos, tente novamente!");
                            $row = mysqli_fetch_assoc($result);

                            if (is_array($row) && !empty($row)) {
                              $_SESSION['id'] = $row['ID'];      
                              $_SESSION['email'] = $row['EMAIL']; 
                              $_SESSION['user'] = $row['USER']; 
                              header('Location: index.php');
                              exit();
                          } else {
                              echo "<div class='message'>
                                      <p> Email ou senha incorreto.</p>
                                    </div>";
                              // echo "<a href='login.php'> <button class='btn'> Voltar </button>' ";
                              echo "<a href='index.php'> <button class=''btn'> Logar Agora </button>' ";
                          }
                            if(isset($_SESSION['valid'])){
                              header("Location: index.php");
                            }else{

                            }
                        ?>
                    </form>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
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