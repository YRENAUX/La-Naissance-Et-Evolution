<?php
include('bdd.php');


$test = date_create( $_POST['date']);
$test1 = $_POST['label'];
$test2 = $_POST['rue'];


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Link Bootstrap-->
   <script src="./JS/jquery.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Link CSS Personnel-->
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/timeline.css">
    <title>Accueil La Naissance Et L'évolution</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="../IMG/simplon.png" width="100" height="100" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Info</a>
                </li>
                </li>
            </ul>
        </div>
    </nav>
    <!--Fin Navbar-->
<div class="container">
<center><h1>RESULTAT DE LA RECHERCHE</h1></center>

    <p>
    <strong>Date demandée</strong> : <?php echo date_format($test,'d-m-Y'); ?><br>
    Le Quartier est : <?php echo $test1; ?><br>
     et la rue est : <?php echo $test2; ?><br>
    Le nombre de menage est de :  
   </p><br><br>
  
<!--
$query = "SELECT DISTINCT  date  FROM personne  ORDER BY date ASC ";
$statement = $bdd->prepare($query);
$statement->execute();
$result = $statement->fetchAll();-->

  
<ul id='timeline'>
  <li class='event down'>
    <div class='content'>
      <div class="avatar"><?php echo date_format($test,'d-m-Y'); ?><br> </div>
    </div>
   
    <div class="dot">
      <span class='circle'></span>
    </div>
    <div class='date'>1740</div>
  </li>
  <li class='event up'>
    <div class='content'>
      <div class="avatar">Info Extrait bdd</div>
    </div>
    <div class="dot">
      <span class='circle'></span>
    </div>
    <div class='date'>1780</div>
  </li>
  <li class='event down'>
    <div class='content'>
      <div class="avatar">Info Extrait bdd</div>
    </div>
    <div class="dot">
      <span class='circle'></span>
    </div>
    <div class='date'>1810</div>
  </li>
  <li class='event up'>
    <div class='content'>
      <div class="avatar">Info Extrait bdd</div>
    </div>
    <div class="dot">
      <span class='circle'></span>
    </div>
    <div class="date">1850</div>
  </li>
  <li class="last">
    <div class="rectangle">
      Histoire à continuer ...
    </div>
  </li>
</ul>
       
      <!-- D�but du Footer -->
      <footer id="footer sticky-footer">
        <div class="container text-center">
            <small>Copyright &copy; 2019</small>
        </div>
    </footer>
    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>