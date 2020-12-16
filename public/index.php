<?php 

// inclusion de l'autoload de composer
if (!@include_once('../vendor/autoload.php')) echo "You must install package to start app.";

// Connexion BDD
require_once __DIR__ . '/../src/config/database.php';

// functions
require_once __DIR__ . '/../src/includes/functions.php';

// Routing
$page = 'home';

// check value in $_GET['page]
if (isset($_GET['page'])) {
    $page = $_GET['page'];   
}

// Render views
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ .'/../src/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__.'/../src/tmp',  //false
    'debug' => false,  // true,
]);

$twig->addExtension(new \Twig\Extension\DebugExtension());

$twig->addGlobal('current_page', $page);


// Routing
switch ($page) {
    case 'home':
        echo $twig->render('home.twig', [
            'abouts' => presentation(),
            ]);
        break;
    case 'portfolio': 
        echo $twig->render('portfolio.twig', [
            'portfolios' => portfolios(),
            ]);
        break;
    case 'experiences': 
        echo $twig->render('experiences.twig', [
            'experiences' => experiences(),
        ]);
        break;
    default:
        header ('HTTP/1.0 404 not found');
        echo $twig->render('404.twig');
        break;
}


