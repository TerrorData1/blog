<?php
// Cette ligne inclut le fichier 'Autoloader.php', qui est probablement responsable de l'autochargement des classes dans votre application. dirname(__DIR__) renvoie le répertoire parent du répertoire actuel.
require dirname(__DIR__) . '/app/Autoloader.php';
// Appelle la méthode statique register() de la classe Autoloader située dans l'espace de noms App. Cette méthode est probablement utilisée pour enregistrer la fonction d'autochargement des classes.
App\Autoloader::register();
// Vérifie si le paramètre GET 'p' est défini. Si oui, utilise sa valeur, sinon, attribue la valeur 'home' à la variable $p. Cela permet de déterminer la page à afficher.
if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}


// Crée une instance de la classe Database dans l'espace de noms App, en passant 'blog' comme paramètre au constructeur. Cette étape suppose que vous avez une classe Database qui gère la connexion à la base de données.
// $db = new App\Database('blog');


//  Démarre la temporisation de sortie. Cela signifie que la sortie qui serait normalement envoyée au navigateur est mise en mémoire tampon.
ob_start();
// En fonction de la valeur de $p, inclut dynamiquement le fichier correspondant. Si $p est 'home', il inclut '../pages/home.php'; sinon, s'il est 'single', il inclut '../pages/single.php'.
if ($p === 'home') {
    require '../pages/home.php';
} elseif ($p === 'article') {
    require '../pages/single.php';
}
// Récupère le contenu mis en mémoire tampon (c'est-à-dire le contenu de '../pages/home.php' ou '../pages/single.php') et l'assigne à la variable $content.
$content = ob_get_clean();
// Inclut le fichier de modèle 'default.php', qui est censé afficher le contenu généré par la page demandée.
require '../pages/templates/default.php';
