<?php
    require_once("templates/header.php");

    //Verifica se usuário está autenticado
    require_once("models/User.php");
    require_once("dao/UserDAO.php");

    $user = new User();

    $userDao = new UserDAO($conn, $BASE_URL);

    $userData = $userDao->verifyToken(true);



?>
    <div id="main-container" class="container-fluid">
      <div class="offset-md-4 col-md-4 new-movie-container">
        <h1 class="page-title">Adicionar Filme</h1>
        <p class="page-description">Adicione sua crítica e compartilhe com o mundo!</p>
        
      </div>
    </div>
 <?php
    include_once("templates/footer.php");
?>