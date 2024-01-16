<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Content/css/style.css">
    <script type="text/javascript" src="./Content/js/script.js" defer ></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>

<body>
    <header>
        <?php session_start(); ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav nav couleur">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="?controller=home&action=home">Accueil</a>
                        </li>

                        <?php
                        if ((isset($_SESSION["nom"]))) { 
                           if ($_SESSION["Status"]=='Admin') {
                            include "header_admin.php";
                           }else{
                            include "header_user.php";
                           }
                            echo "nom : " . $_SESSION["nom"];
                            echo "<a href='?controller=home&action=home_deconnexion' class='btn btn-danger btn-link'
                                role='button'>Deconnexion</a>";

                        } else {

                            echo "<a href='?controller=home&action=home_connexion' class='btn btn-danger btn-link'
                                role='button'>Connexion</a>";
                        }



                        ?>


                    </ul>
                </div>
            </div>
        </nav>





    </header>
</body>

</html>