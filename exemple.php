<?php

require("config/commande.php");
$vaovaos=afficher();
?>


<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Album example · Bootstrap v5.3</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/"> -->

  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="speed.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"> -->

<!-- <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
<style>
  .navbar-nav .nav-link {
    color: white !important; /* Couleur du texte en blanc */
    font-weight: bold; /* Texte en gras */
  }
  .navbar-brand {
    color: white !important; /* Couleur du texte en blanc */
    font-weight: bold;
  }
  body {
    background-image: url('vaovaospeed.jpg'); /* Remplacez le chemin par celui de votre image */
    background-size: cover; /* Ajuste la taille de l'image pour couvrir toute la fenêtre */ /* Centre l'image */
    background-repeat: no-repeat; /* Évite la répétition de l'image */
    background-attachment: fixed;
}
</style>
  </head>
  <body>
<header data-bs-theme="dark">
  <div>
        <div>
        <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/Vaovao_Speed/exemple.php">VAOVAO SpeeD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/Vaovao_Speed/exemple.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sokajy
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="archive.php?sokajy=Agriculture">Agriculture</a></li>
            <li><a class="dropdown-item" href="archive.php?sokajy=Elevage">Elevage</a></li>
            <li><a class="dropdown-item" href="archive.php?sokajy=Peche">Peche</a></li>
            <li><a class="dropdown-item" href="archive.php?sokajy=Tourisme">Tourisme</a></li>
            <li><a class="dropdown-item" href="archive.php?sokajy=Commerce">Commerce</a></li>
            <li><a class="dropdown-item" href="archive.php?sokajy=Transport">Transport</a></li>
            <li><a class="dropdown-item" href="archive.php?sokajy=Industrie">Industrie</a></li>
            <li><a class="dropdown-item" href="archive.php?sokajy=Politique">Politique</a></li>
            <li><a class="dropdown-item" href="archive.php?sokajy=Sociale">Sociale</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
        </div>
      </div>
      <div>
            <div class="album py-5 bg-body-tertiary">
              <div class="container">
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                      <form method="post" enctype="multipart/form-data">
                          <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label"><strong>Anaran'i mampita vaovao</strong></label>
                              <input type="text" class="form-control" name="anarany" required style=" max-width: 300px; min-width=50px;">
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label"><strong>Toera isehoany vaovao</strong></label>
                              <input type="text" class="form-control" name="toera" required style=" max-width: 300px; min-width=50px;">
                          </div>
                          <div class="mb-3">
                              <label for="" class="form-label"><strong>Sokajin'ny vaovao</strong></label>
                              <select name="sokajy" class="form-control" required style=" max-width: 300px; min-width=50px;">
                                  <option value="Agriculture">Agriculture</option>
                                  <option value="Elevage">Elevage</option>
                                  <option value="Peche">Peche</option>
                                  <option value="Politique">Tourisme</option>
                                  <option value="Commerse">Commerce</option>
                                  <option value="Transport">Transport</option>
                                  <option value="Industrie">Industrie</option>
                                  <option value="Politique">Politique</option>
                                  <option value="Peche">Sociale</option>
                              </select>
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label"><strong>Filazana momban'ny vaovao</strong></label>
                              <textarea class="form-control" name="filazana" required style=" max-width: 300px; min-width=50px;"></textarea>
                          </div>
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label"><strong>Sarin'ny vaovao</strong></label>
                              <input type="file" class="form-control" name="sary" required style=" max-width: 300px; min-width=50px;">
                          </div>
                            <button type="submit" class="btn btn-primary" name="valider"><strong>Ampidiro vaovao manaraka</strong></button>
                      </form>
                  </div>
              </div>
          </div>

      </div>
    </div>
</header>

<main>
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php foreach ($vaovaos as $vaovao) : ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="<?= $vaovao->sary ?>" alt="" class="card-img-top custom-image">
                            <div class="card-body">
                            <p class="card-text" id="nandez" style="font-weight: normal;"><?= $vaovao->filazana ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <p><strong><?= $vaovao->anarany ?></strong></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <p><strong><?= $vaovao->toera ?></strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>


    </body>
</html>

<?php
// Ajoutez ces lignes avant d'afficher les publications
require_once("config/commande.php");
supprimerAnciennesPublications();
$vaovaos = afficher();

if (isset($_POST['valider'])) {
    if (isset($_POST['anarany']) && isset($_POST['toera']) && isset($_POST['sokajy']) && isset($_POST['filazana']) && isset($_FILES['sary'])) {
        if (!empty($_POST['anarany']) && !empty($_POST['toera']) && !empty($_POST['sokajy']) && !empty($_POST['filazana']) && !empty($_FILES['sary']['name'])) {
            // Récupérer le nom temporaire du fichier
            $fileTmpName = $_FILES['sary']['tmp_name'];

            // Récupérer le nom du fichier
            $fileName = basename($_FILES['sary']['name']);

            // Déplacer le fichier vers le dossier de destination (à adapter selon votre structure)
            $uploadPath = 'image/' . $fileName;
            move_uploaded_file($fileTmpName, $uploadPath);

            $anarany = htmlspecialchars(strip_tags($_POST['anarany']));
            $toera = htmlspecialchars(strip_tags($_POST['toera']));
            $sokajy = htmlspecialchars(strip_tags($_POST['sokajy']));
            $filazana = htmlspecialchars(strip_tags($_POST['filazana']));
            $sary = $uploadPath; // Utilisez le chemin du fichier uploadé

            try {
                ajouter($anarany, $toera, $sokajy, $filazana, $sary);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }
}
?>

