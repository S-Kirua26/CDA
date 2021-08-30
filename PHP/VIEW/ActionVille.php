<?php

$mode = $_GET['mode'];

$obj = new Ville($_POST);

switch ($mode) {
    case "ajouter":
        {
            VilleManager::add($obj);
            break;
        }
    case "modifier":
        {

            VilleManager::update($obj);
            break;
        }
    case "supprimer":
        {
            $idRecherche=$_GET['id'];
            $id=VilleManager::findById($idRecherche);
            VilleManager::delete($id);
            break;
        }
}