<?php

$ville = VilleManager::getList();

echo '<body class="colonne">
    <div class="contenu colonne">
        <div class="margin">
        </div>';
        foreach ($ville as $uneVille)
        {
            echo '<div class="liste marginLight">
            <div class="libelle size centre marginBouton">'.$uneVille->getNomVille().'</div>
            <div class="details marginBouton"><a class="centre size" href="index.php?page=FormulaireVille&mode=details&id='.$uneVille->getIdVille().'">Details</a></div>
            <div class="modifier marginBouton"><a class="centre size" href="index.php?page=FormulaireVille&mode=modifier&id='.$uneVille->getIdVille().'">Modifier</a></div>
            </div>';
        }
 
echo '</div>
</body>
</html>';