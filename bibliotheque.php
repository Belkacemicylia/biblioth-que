<?php

require("connexionBD.php");
require("fonctions.php");

$categorie = $_GET['id'];

$mesArticles = afficherL($categorie);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="Utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">



  <title>Gestion de bibliotheque</title>
  <style>
    .btn {
      float: right;
      margin-top: 1px;

    }

    ol {
      list-style: none;
      display: block;
      justify-content: left;
      width: 300px;
    }

    ol li {
      font-size: 1.0em;
      font-weight: bold;
      margin: 10px 0;
      background: #C0C0C0;
      padding: 5px 10px;
      align-items: center;
      color: black;
      cursor: pointer;
      position: relative;
      transition: all .4s;
      z-index: 5;
    }

    ol li::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 5px;
      background: red;
      transition: all .4s;
      z-index: -1; // permet de voir l ecriture dans on survole avc la souris 
    }

    ol li:hover::before {
      width: 100%;
    }

    ol li:hover {
      transform: translateX(17px);
    }

    h1 {
      font-size: 1.6;
      font-weight: bold;
      text-align: center;
    }

    .row {
      display: block;
    }

    .inli {
      display: flex;
    }

    .card>a>img {
      max-width: 100%
    }


    .carousel-inner .item {
      height: 500px;
      background-size: cover;
      background-position: center center;
    }


    .hidden {
      display: none;
    }

    details {
      font-weight: bold;
    }
  </style>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

  <!-- Bootstrap core CSS -->
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="album.css" rel="stylesheet">


</head>
<h1 style="text-align: center;">Gestion de la bibliothèque</h1>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Auteur</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Livres</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">CD/DVD</a>
      </li>
      <li class="nav-item">
        <a href="deconnexion.php" class="btn btn-outline-danger">Déconnexion</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<body>

  <!--<h1 style="text-align: center;">Bonjour !<?php echo $_SESSION['user']; ?> </h1>-->

  <div class="inli">
    <ol>
      <li><a href="bibliotheque.php?id=Mathematique" style="color:black;text-decoration:none;"> Mathematique</a></li>
      <li><a href="bibliotheque.php?id=Programmation" style="color:black;text-decoration:none;"> programmation</a></li>
      <li><a href="bibliotheque.php?id=Physique" style="color:black;text-decoration:none;"> physique</a></li>
      <li><a href="bibliotheque.php?id=Algorithmique" style="color:black;text-decoration:none;"> Algorithmique</a></li>
      <li><a href="bibliotheque.php?id=Langue" style="color:black;text-decoration:none;"> Langues</a></li>
      <li><a href="bibliotheque.php?id=Base_de _données" style="color:black;text-decoration:none;"> Base de données</a>
      </li>
      <li><a href="bibliotheque.php?id=Biologie" style="color:black;text-decoration:none;"> Biologie</a></li>
      <li><a href="bibliotheque.php?id=Physique" style="color:black;text-decoration:none;"> Physique</a></li>
      <li><a href="bibliotheque.php?id=Policier" style="color:black;text-decoration:none;"> Policier</a></li>
      <li><a href="bibliotheque.php?id=Fantasy" style="color:black;text-decoration:none;"> Fantasy</a></li>
      <li><a href="bibliotheque.php?id=Comique" style="color:black;text-decoration:none;"> Comique</a></li>
      <li><a href="bibliotheque.php?id=Horreur" style="color:black;text-decoration:none;"> Horreur</a></li>
    </ol>



    <div class="container" style="max-width:100%;width:76%;">
      <div class="row">
        <?php foreach ($mesArticles as $article): ?>

        <div class="col-md-4" style="width:25%;">
          <div class="card mb-4 box-shadow" style="object-fit: scale-down;">
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img class="card-img-top" src="<?= $article->image ?>" alt="Card image cap">
              </div>
            </div>
            <div class="card-body">
              <p class="card-text" style="text-align:center;font-family:cursive;font-size: 150%;">
                <?= $article->nom_livre; ?>
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a
                      href="details.php?id=<?= $article->nom_livre ?>">Details</a></button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Emprunter</button>
                </div>
                <small class="text-muted">
                  <?= $article->prix_livre ?>
                </small>
              </div>
            </div>
          </div>
        </div>

        <?php endforeach; ?>

      </div>

    </div>
  </div>
</body>

</html>