<!-- Avec du buffering dedans --> 
<?php

require_once './models/MainManager.model.php';

class MainController
{
    private $MainManager; //permet d'accéder aux fonctions du MainManager, uniquement par les objets de la classe

    public function __construct()
    {
        $this->MainManager = new MainManager();
    }

    public function pageGenerator($datas)
    {
        extract($datas); //crée des variables depuis les indices d'un tableau
        ob_start(); //démarrage du buffer
        require_once $view;
        $page_content = ob_get_clean(); //Reçois le contenu du buffer et le vide
        require_once $template;
    }

    public function navbar()
    {
        $datas = $this->MainManager->getDatas();
        $_SESSION['alert'] = [
            'message' => "Exemple de message d'alerte",
            'type' => 'alert-success',
        ];
        $datas_page = [
            'page_description' => 'Navbar description',
            'page_title' => 'Navbar title',
            'datas' => $datas,
            // 'page_css' => ['home.css'], custom CSS
            // 'page_js' => ['action2.css'], custom JS
            'view' => 'views/navbar.view.php',
            'template' => 'views/common/template.php',
        ];
        $this->pageGenerator($datas_page); //appel de la fonction se trouvant dans la même classe
    }

    public function errorPage($msg)
    {
        $datas_page = [
            'page_description' => 'Exception handler page',
            'page_title' => 'Exception',
            'msg' => $msg,
            'view' => 'views/error.view.php',
            'template' => 'views/common/template.php',
        ];
        $this->pageGenerator($datas_page);
    }
}
?>