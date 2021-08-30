<?php

$mode = $_GET['mode'];

switch ($mode)
{
    case "ajouter":
        {
            echo '<form method="POST" action="index.php?page=ActionVille&mode=ajouter">';
            break;
        }
    case "details":
        {
            echo '<form method="POST" >';
            $idRecherche = $_GET['id'];
            $id = VilleManager::findById($idRecherche);
            break;
        }
    case "modifier":
        {
            echo '<form method="POST" action="index.php?page=ActionVille&mode=modifier">';
            $idRecherche = $_GET['id'];
            $id = VilleManager::findById($idRecherche);
            break;
        }
}

if (isset($_GET['id']))
{
    $choix = VilleManager::findById($_GET['id']);
}
?>

<?php if($mode != "ajouter") echo  '<input name= "idVille" value="'.$choix->getIdVille().'" type= "hidden">';?>

    <div class="contenu colonne">
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
            <?php echo "nomVille"?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" verifInput name="nomVille" pattern="[a-zA-Z\ -]{2,}" <?php if($mode != "ajouter") echo 'value= "'.$choix->getNomVille().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?> />
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
            <?php echo "numeroDepartement"?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" verifInput name="numeroDepartement" pattern="\d{2}" <?php if($mode != "ajouter") echo 'value= "'.$choix->getNumeroDepartement().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
            <?php echo "codePostal"?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" verifInput name="codePostal" pattern="\d{5}" <?php if($mode != "ajouter") echo 'value= "'.$choix->getCodePostal().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
            </div>
        </div>
        <div class="colonne marginLight">
            <div class="titreDescriptif centre">
            <?php echo "dateMAJ"?>
            </div>
            <div>
                <div class="espace"></div>
                <input class="libelle" verifInput name="dateMAJ" <?php if($mode != "ajouter") echo 'value= "'.$choix->getDateMAJ().'"';if($mode=="details" || $mode=="supprimer") echo '" disabled'; ?>/>
                <div class="espace"></div>
            </div>
        </div>
    </div>
<?php 

switch ($mode)
    {
		case "ajouter":
			{
                echo '<div><div class="espace"></div><div><input type="submit" class="ajouter marginLight size centre" name="submit" value="Ajouter"/></div><div class="espace"></div></div>';
                break;
			}
		case "modifier":
			{
                echo '<div><div class="espace"></div><div><input type="submit" class="modifier marginLight size centre" name="submit" value="Modifier"/></div><div class="espace"></div></div>';
                break;
			}
        
        default:
        {
            echo '<div>';
        }
    }
// dans tous les cas, on met le bouton annuler
    ?>
    
</div>
<div>
<div class="espace"></div>
<div class="return"><a class="centre size" href="index.php?page=ListeVille">Retour</a></div>
<div class="espace"></div>
</div>

</form>