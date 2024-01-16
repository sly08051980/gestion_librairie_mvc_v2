<?php


if (isset($auth)){
    $_SESSION["nom"]=$auth[0]->nom;
    $_SESSION["Status"]=$auth[0]->Statut;

    echo "<br>";
    echo "test : " .$_SESSION["nom"];
    echo "<br>";
    echo "test : " .$_SESSION["Status"];
   
}

    ?>

<script>window.location.href="?controller=home&action=home"</script>