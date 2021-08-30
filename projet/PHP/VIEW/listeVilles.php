<?php
// on affiche la liste des villes en récupérant la liste des villes en BDD et on affiche en mettant en forme 
echo '<div class = "colonne">';
echo '<div>';
echo '<div></div>';
 $villes = VillesManager::getList();
 echo'<div class="colonne">';
 foreach ($villes as $uneVille)
 {
     echo '<div>';

     echo '<div class="contenu centrer">'.$uneVille->getNomVille().'</div>';
     echo '<div class="contenu centrer">'.$uneVille->getNumDept().'</div>';
     echo '<div class="contenu centrer">'.$uneVille->getCodePostal().'</div>';

     echo '<div class="contenu centrer">';
     echo '<div></div>';
     echo '<div class="bouton"><a href = "index.php?page=FormVilleModif&id='.$uneVille->getIdVille().'">modifier</a></div>';
     echo '<div></div>';
     echo'</div>';
     echo '</div>';
 }
 echo '</div>';
echo '<div></div>';
echo '</div>';