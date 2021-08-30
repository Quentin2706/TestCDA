<?php
// on Met en page l'HTML pour le formulaire
echo'<div class="colonne ">'."\n";
echo '<form action="index.php?page=ActionVilleModif" method="POST">';

// on récupere la ville et son ID
$choix = VillesManager::findById($_GET['id']);
$idVille = $choix->getIdVille();



// Au niveau es pattern j'ai pris en copte les gens qui habtent en outre mer, en sachant que leur département a 3 chiffres, et au niveau du code postal j'ai
// mis entre 3 et 5 au cas ou  il existerait des CP a 3 chiffres
?>
    <?php echo  '<input name= "idVille" value="'.$idVille.'"type= "hidden">';?>
    <div class="colonne">
        <div class="champs">
            <div></div>
            <div class="centrer">Nom de la ville : </div>
            <input name="nomVille" class="centrer" value= "<?php echo $choix->getNomVille()?>" pattern="[a-zA-Z\-]{2,200}" />
            <div></div>
        </div>
        
        <div class="champs">
            <div></div>
            <div class="centrer">Numéro du département : </div>
            <input name="numDept" class="centrer" value= "<?php echo $choix->getNumDept() ?>" pattern="[0-9]{2,3}" />
            <div></div>
        </div>

        <div class="champs">
            <div></div>
            <div class="centrer"> Code Postal : </div>  
            <input name="CodePostal" class="centrer" value= "<?php echo $choix->getCodePostal()?>" pattern="[0-9]{3,5}" />
            <div></div>
        </div>

    </div>
    <div>
    <div></div>
<?php 


// affichage des boutons d'action
echo'<div class="spacearnd">
<button class="bouton" type="submit" value="Modifier">Modifier</button>
<button class="bouton"><a href="index.php?page=ListeVilles">Annuler</a></button>
</div>';

echo '<div></div>';
echo '</div>';
echo '</div>';
    ?>

</form>
</div>