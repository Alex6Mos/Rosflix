<?php
    declare(strict_types=1);
    echo "<!DOCTYPE html>\n",
    //integration de métadonnées
    "\t<html lang = 'fr' >\n",
    "\t<head >\n",
	"\t\t<meta charset = 'UTF-8' />\n",
	"\t\t<title > $title </title >\n",
    "\t\t".'<meta name = "author" content = "" />'."\n",
    "\t\t".'<meta name = "date" content = "'.$date.'"/>'."\n",
    "\t\t".'<meta name = "keywords" content = "'.$keywords.'" />'."\n",
    "\t\t".'<meta name = "description" content = "'.$description.'" />'."\n";
   echo  "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
    integrity='sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN' crossorigin='anonymous'>";

    //différence de style selon ce qui est sélectionné dans le td8.php
    if(isset($_GET['style']) && $_GET['style']=='standard'){
        echo "\t\t".'<link rel = "stylesheet" href = "./style.css" />'."\n";
    }
    elseif(isset($_GET['style']) && $_GET['style']=='alternatif'){
        echo "\t\t".'<link rel = "stylesheet" href = "./alternatif.css" />'."\n";
    }
    else{
        echo "\t\t".'<link rel = "stylesheet" href = "./style.css" />'."\n";
    }

    echo "\t</head >\n",
    "\t<body>\n",
    "\t\t<header class='site-header'>\n",
    "<a  href='#' class='logo'><img src='./images/logo_site.png' alt='Logo_site'></a>",
        "<nav class='menu'>",
            "<ul class='navigation'>",
                "<li class='$active1'><a href='index.php'>Accueil</a></li>\n",
                "<li class='$active2'><a href='#'>Séries</a></li>\n",
                "<li class='$active3'><a href='#'>Films</a></li>\n",
	        "</ul>\n",
        "</nav>\n",
     "<div class='search'>",
        "<input type='text' placeholder='search'>",
        "<i class='fa fa-search' aria-hidden='true'></i>",
    "</div>",
    "\t\t</header>\n";
?>