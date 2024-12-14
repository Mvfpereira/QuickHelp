<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Registro</title>
      <!-- <link rel="icon" type="image/png" sizes="32x32" href="assets/img/Hogwarts-Logo.png">    -->
      <!--BootStrap-->
      <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
      <link href="assets/css/styleLogin.css" rel="stylesheet">
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
                    <a class="nav-link mx-lg-2" href="aboutus.php">Sobre Nós</a>
                  </li>
                </ul>
              </div>
            </div>
            <a href="login.php" class="login-button">Login</a>
            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
          <!-- </div> -->
        </nav>
      </header>
      <!--Navegação encerra aqui-->
      <!-- Inicio Login  -->
      <section >
        <div class="row justify-content-center align-items-center vh-100">
          <div class="col-lg-4">
            <div class="box form-box">
              <header>Registre-se</header>
              <?php
              include("assets/php/config.php");
              if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                //verificando se existe o email
                $verify_query = mysqli_query($con,"SELECT EMAIL FROM usuarios WHERE EMAIL='$email' ");
                //se encontrar email, rejeita
                if(mysqli_num_rows($verify_query) > 0) {
                  echo "<div class='message'>
                      <p> Esse email já está em uso, tente novamente!</p>
                    </div> <br>";
                  echo "<a href='javascript:self.history.back()'> <button class='btn> Voltar </button>' ";
                }else{ //se não encontrar, registra
                  mysqli_query($con, "INSERT INTO usuarios(USER, EMAIL, SENHA) VALUES('$username', '$email', '$password')") or die("Ocorreu um erro, tente novamente!");
                    echo "<div class='message'>
                        <p> Registrado com sucesso!</p>
                      </div> <br>";
                    echo "<a href='login.php'> <button class=''btn'> Logar Agora </button>' ";
                }
                }else{
                ?>
                  <form action="" method="post">
                      <div class="field input">
                          <label for="username">Usuário</label>
                          <input type="text" name="username" id="username" autocomplete="off" required>
                      </div>
                      <div class="field input">
                          <label for="email">Email</label>
                          <input type="email" name="email" id="email" autocomplete="off" required>
                      </div>
                      <div class="field input">
                          <label for="password"> Senha</label>
                          <input type="password" name="password" id="password" autocomplete="off" required>
                      </div>
                      <div class="field">
                          <input type="submit" class="btn btn-primary" name="submit" value="Criar Conta" required>
                      </div>
                      <div class="links">
                          Já é membro? <a href="login.php">Faça seu Login</a>
                      </div>
                  </form>
            </div>
            <?php } ?>
          </div>
        </div>
      </section>
        <!-- Fim Login -->
        <!-- RodaPé -->
        <!-- <footer class="bg-dark pb-2 text-center">
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