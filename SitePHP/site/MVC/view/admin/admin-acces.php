<?php
if(isset($_SESSION['pseudo'])) {
	$pseudo = $_SESSION['pseudo'];
} else {
	header('location: admin.html');
}
?>
<article>
	<h2>Mon compte <i><?= $pseudo; ?></i></h2>
    <p><b>Liste des recettes</b></p>
    <ol>
    <?php
	foreach($recettes as $recette) {
	?>
    <li><?= $recette->getTitre(); ?> [<a class="lien" href="modifier-recette_<?= $recette->getId_recette(); ?>.html">Modifier</a>] [<a class="lien" href="supprimer-recette_<?= $recette->getId_recette(); ?>.html">Supprimer</a>]</li>
    <?php
	}
	?>
    </ol>
</article>