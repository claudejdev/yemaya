<!-- Avec du buffering dedans --> 
<?php

require_once("./models/mainManager.model.php");

class MainController{
    private $mainManager; //permet d'accéder aux fonctions du mainManager, uniquement par les objets de la classe
    public function __construct(){ 
        $this->mainManager = new mainManager();
    }
    public function pageGenerator($datas)
    {
        extract($datas); //crée des variables depuis les indices d'un tableau
        ob_start(); //démarrage du buffer 
        require_once($view);
        $page_content = ob_get_clean(); //Reçois le contenu du buffer et le vide
        require_once($template);
    }
    public function navbar()
    {
        $datas = $this->mainManager->getDatas();
        $datas_page = [
            "page_description" => "Navbar description",
            "page_title" => "Navbar title",
            "datas" => $datas, 
            "view" => "views/navbar.view.php",
            "template" => "views/common/template.php"
        ];
        $this->pageGenerator($datas_page); //appel de la fonction se trouvant dans la même classe
    }
    public function home()
    {
        $datas_page = [
            "page_description" => "Home description",
            "page_title" => "Home title",
            "view" => "views/home.view.php",
            "template" => "views/common/template.php"
        ];
        $this->pageGenerator($datas_page);
    }
    public function link()
    {
        $datas_page = [
            "page_description" => "Link description",
            "page_title" => "Link title",
            "view" => "views/link.view.php",
            "template" => "views/common/template.php"
        ];
        $this->pageGenerator($datas_page);
    }
    public function action0()
    {
        $datas_page = [
            "page_description" => "action0 description",
            "page_title" => "action0 title",
            "view" => "views/action0.view.php",
            "template" => "views/common/template.php"
        ];
        $this->pageGenerator($datas_page);
    }
    public function action1()
    {
        $datas_page = [
            "page_description" => "action1 description",
            "page_title" => "action1 title",
            "view" => "views/action1.view.php",
            "template" => "views/common/template.php"
        ];
        $this->pageGenerator($datas_page);
    }
    public function action2()
    {
        $datas_page = [
            "page_description" => "action2 description",
            "page_title" => "action2 title",
            "view" => "views/action2.view.php",
            "template" => "views/common/template.php"
        ];
        $this->pageGenerator($datas_page);
    }
    public function errorPage($msg)
    {
        $datas_page = [
            "page_description" => "Exception handler page",
            "page_title" => "Exception",
            "msg" => $msg,
            "view" => "views/error.view.php",
            "template" => "views/common/template.php"
        ];
        $this->pageGenerator($datas_page);
    }
}


//index.php?page=navbar
//index.php?page=home
//index.php?page=link
//index.php?page=action0
//index.php?page=action1
//index.php?page=action2

?>