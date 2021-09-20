<?php

session_start();

//pour s'assurer que l'URL part toujours de la racine du site, où se trouve l'index
define('URL', str_replace('index.php', '', (isset($_SERVER['HTTPS']) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));

require_once './controllers/mainController.controller.php';
$mainController = new MainController();
try {
    if (empty($_GET['page'])) {
        $page = 'home';
    } else {
        $url = explode('/', filter_var($_GET['page'], FILTER_SANITIZE_URL));
        $page = $url[0];
    }

    switch ($page) {
        case 'navbar': $mainController->navbar();
            break;

        case 'home': $mainController->home();
            break;

        case 'link': $mainController->link();
            break;

        case 'action0': $mainController->action0();
            break;

        case 'action1': $mainController->action1();
            break;

        case 'action2': $mainController->action2();
            break;
        default: throw new Exception('Error 404 : Houston, we have a problem', 1);
    }
} catch (Exception $e) {
    $mainController->errorPage($e->getMessage());
}

//index.php?page=navbar
//index.php?page=home
//index.php?page=link
//index.php?page=action0
//index.php?page=action1
//index.php?page=action2
