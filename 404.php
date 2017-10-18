<?php require 'libs/__includes.php'; ?>
<?php require 'public/partials/__header.php';
if (isset($_GET['error']) && !empty($_GET['error']) && is_numeric($_GET['error'])):
   extract($_GET);
   $error_message= showError($error);
else:
   $error_message="La page demandé n'existe pas";
endif;

?>

    <div id="single">

      <div class="container">
   
        <div class="page-404">

          <h1>404</h1>
          <h2><?=$error_message; ?></h2>
          <p>Win Méééchi !!!! -_- </p>
          <a class="btn btn-ada-dark" href="index.php">Arja3 l'téli</a>

        </div>

      </div>

    </div>


      <?php require 'public/partials/__footer.php'; ?>