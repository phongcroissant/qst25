<?php

$Vue->setMenu(new \App\Vue\Vue_Menu_MaTable());
switch ($action) {
    case "defaut":
        $data = \App\Modele\Modele_MaTable::MaTable_Select();
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseMaTable($data));
        break;
    case "ajouter":
        $Vue->addToCorps(new \App\Vue\Vue_AjouterMaTable());
        break;
    case "enregistrerAjouter":
        $data = \App\Modele\Modele_MaTable::MaTable_Insert($_REQUEST["champ1"], $_REQUEST["champ2"]);

        $data = \App\Modele\Modele_MaTable::MaTable_Select();
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseMaTable($data));
        break;

}