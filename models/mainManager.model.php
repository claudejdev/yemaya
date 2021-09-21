<!-- Sert à récupérer la data depuis la BDD -->
<?php

require_once 'model.class.php';

//extends car Model est une classe abstraite, et accès seulement à la function protected, pas aux private
class MainManager extends Model
{
    // fonction qui simule une récupération de données
    public function getDatas()
    {
        // $pdo = $this->getDb();
        // $req = $pdo->prepare("SELECT * FROM mytable");
        $req = $this->getDb()->prepare('SELECT * FROM mytable');
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC); //FETCH_ASSOC pour éviter d'avoir des datas dupliquées
        $req->closeCursor();

        return $datas;
    }
}

?>
