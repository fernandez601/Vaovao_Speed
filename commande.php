<?php

function ajouter($anarany, $toera, $sokajy, $filazana, $sary)
{
    if (require("connexion.php")) {
        $req = $access->prepare("INSERT INTO vaovao(anarany, toera, sokajy, filazana, sary, date_creation) 
            VALUES 
            (:anarany, :toera, :sokajy, :filazana, :sary, NOW())");

        $req->execute(array(
            ':anarany' => $anarany,
            ':toera' => $toera,
            ':sokajy' => $sokajy,
            ':filazana' => $filazana,
            ':sary' => $sary
        ));

        $req->closeCursor();
    }
}


   
function afficher()
{
    if (require("connexion.php")) {
        $req = $access->prepare("SELECT * FROM vaovao WHERE date_creation >= NOW() - INTERVAL 30 MINUTE ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        $req->closeCursor();

        return $data;
    }
}



   function supprimer($id)
   {
        if(require("connexion.php"))
        {
            $req = $access->prepare("DELETE FROM vaovao WHERE id=?");

            $req->execute(array($id));
        }
   }

   function supprimerAnciennesPublications()
{
    if (require("connexion.php")) {
        $req = $access->prepare("DELETE FROM vaovao WHERE date_creation < NOW() - INTERVAL 30 MINUTE");

        $req->execute();
    }
}





function afficherParCategorie($sokajy)
{
    if (require("connexion.php")) {
        $req = $access->prepare("SELECT * FROM vaovao WHERE sokajy = :sokajy ORDER BY id DESC");
        $req->bindParam(':sokajy', $sokajy, PDO::PARAM_STR);
        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        $req->closeCursor();

        return $data;
    }
}
?>
