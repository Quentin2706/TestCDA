  
<?php
// on update en BDD la ville
$p = new Villes($_POST);
VillesManager::update($p);

// on redirige vers la liste
header("location:index.php?page=listeVilles");