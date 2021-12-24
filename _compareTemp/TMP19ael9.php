<?php
    $active1 = "active";
    $active2 = "";
    $active3 = "";
    $active4 = "";
    $active5 = "";
    $active6 = "";
    $title = "UE : Developpement - WEB : Accueil";
    $date = "01/03/2021";
    $keywords = "UE Développement WEB";
    $description = "Site regroupant les tds de développement web";
    $h1 = "UE : DEVELOPPEMENT WEB 2021";
    include ('./include/header.inc.php');
    include('include/function.inc.php');

?>



<div class="banner">

 <!--   <div id="accueil-image-nasa"> -->
     <?php
        $a = nasa();
         echo "<img src='$a' alt='image aléatoire'/>";
     ?>
</div>

</body>
</html>
