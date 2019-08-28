<?php
include('./PHP/bdd.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Link Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Link CSS Personnel-->
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Accueil La Naissance Et L'évolution</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
            <img src="./IMG/simplon.png" width="100" height="100" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
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
    <!--Début Carrousel-->
    <div class="container-fluid col-lg-12" style="margin: 0 auto; padding: 0px;width: 100%;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active img-fluid">
                    <img src="http://www.en-noir-et-blanc.com/Cartes-postales-anciennes/Charleville%20-%20Cours%20d%20Orleans%20cote%20ouest.JPG"
                        class="d-block w-100 img-fluid" style="height: 600px; width: 100%;" alt="Image Carousel 1">
                </div>
                <div class="carousel-item">
                    <img src="http://www.en-noir-et-blanc.com/Cartes-postales-anciennes/Charleville%20-%20Eglise%20du%20Sacre%20Coeur%20et%20boulevard%20Gambetta.JPG"
                        class="d-block w-100 img-fluid" style="height: 600px; width: 100%;" alt="Image Carousel 2">
                </div>
                <div class="carousel-item">
                    <img src="http://www.en-noir-et-blanc.com/Cartes-postales-anciennes/CHARLEVILLE-MEZIERES%20-%20Sous%20la%20marquise%20de%20la%20gare.jpg"
                        class="d-block w-100 img-fluid" style="height: 600px; width: 100%;" alt="Image Carousel 3">
                </div>
                <div class="carousel-item">
                    <img src="https://en.geneanet.org/public/img/gallery/pictures/cartes_postales/b4/5586462/large.jpg"
                        class="d-block w-100 img-fluid" style="height: 600px; width: 100%;" alt="Image Carousel 4">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!--Fin Carousel-->

    <!--Recherher des quartier, rue et date-->
    <div class="recherche container-fluid text-center mt-3">
        <h1>Faites votre recherche :</h1><br>
        <h3>----- La naissance et L'évolution démographique des rues -----<br>


Contexte : 

Utilisateur Lambda peut consulté le site et découvrir la démographie des rues de Charleville sur la période de 1739 1876
On entends par ce faites de pouvoir consulté, qui à habiter dans ces rues et suivre l'évolution croissante ou décroissante au long de cette période d'années
<br>
L'objectif : 

Un site ludique pour tous et pour voir/apprendre l'évolution des rues de Charleville.
<br>
Présentation : 

En fonction d'une année choisis une carte s'ouvre avec le nombre de personnes (Identité des personnes) 
qui habite dans cette même rue, et possibilité de comparer 2 années et suivre son évolution.</h3>

        <p>Choisissez une date, un quartier et une rue et vous verrez le nombre de menages existant à la date donnée.<br><br>
    </div>
    <div class="row mx-auto my-auto">
        <form method="POST" action="PHP/resultat.php">
        <select class="custom-select col col-md-3 mx-auto" name="date" id="date">
            <!-- Requ�te php pour les dates -->
            <?php
            $req = $bdd->prepare('SELECT date FROM personne GROUP BY date ORDER BY date ASC');
            $req->execute();
            while ($donnees = $req->fetch()){
                    echo '<option value="'.$donnees['date'].'">'.$donnees['date'].'</option>';
                }
                $req->closeCursor();
                ?>
        </select>

        <select required class="custom-select col col-md-3 mx-auto" name="label" id="label">
            <!-- Requ�te php pour les Quartiers -->
            <?php
            $req = $bdd->prepare("SELECT label FROM quartier GROUP BY label");
            $req->execute();
            while ($donnees = $req->fetch()){
                echo '<option value="'.$donnees['label'].'">'.$donnees['label'].'</option>';
            }
                $req->closeCursor();
            ?>

        </select>

        <select required class="custom-select col col-md-3 mx-auto" name="rue" id="rue">
            <?php
            $req = $bdd->prepare("SELECT rue FROM menage GROUP BY rue");
            $req->execute();
            while ($donnees = $req->fetch()){
                echo '<option value="'.$donnees['rue'].'">'.$donnees['rue'].'</option>';
            }
                $req->closeCursor();
                ?>
        </select>
    </div><br>
        <input class="btn btn-success btn-md mx-auto mt-3 mb-3" type="submit" value="Recherche" name="button" id="button">
    </form>
    </div>
    <!--Fin des recherche-->




    <!-- D�but du Footer -->
    <footer id="footer sticky-footer">
        <div class="container text-center">
            <small>Copyright &copy; 2019</small>
        </div>
    </footer>
    <!--Script Bootstrap-->
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