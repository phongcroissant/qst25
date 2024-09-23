<?php

namespace App\Modele;

use App\Utilitaire\Singleton_ConnexionPDO;
use PDO;

class Modele_MaTable
{
    /**
     * @return mixed : le tableau des enregistrements dans la table "table"(something went wrong...)
     */
static function  MaTable_Select()
    {
        $connexionPDO = Singleton_ConnexionPDO::getInstance();
        $requetePreparee = $connexionPDO->prepare('
select *
    from `table`
    order by id');
        $reponse = $requetePreparee->execute(); //$reponse boolean sur l'état de la requête
        $tableauReponse = $requetePreparee->fetchAll(PDO::FETCH_ASSOC);
        return $tableauReponse;
    }

    public static function MaTable_Insert(mixed $champ1, mixed $champ2)
    {
        $connexionPDO = Singleton_ConnexionPDO::getInstance();
        $requetePreparee = $connexionPDO->prepare('
        insert into `table` (champ1, champ2) values (:champ1, :champ2)');
        $reponse = $requetePreparee->execute(array(
            "champ1" => $champ1,
            "champ2" => $champ2
        ));
        return $reponse;
    }

}