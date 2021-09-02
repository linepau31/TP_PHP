<?php
if(isset($_SESSION['pseudo'])) {
	$pseudo = $_SESSION['pseudo'];
} else {
	header('location: admin.html');
}
?>
<article>
	<h1>Mon compte
        <br>
        <i><?= $pseudo; ?></i></h1>
    <p><b>Liste des recettes</b></p>
    <ol>
    <?php
	foreach($recettes as $recette) {
	?>
    <li><?= $recette->getTitre(); ?> [<a class="lien" href="modifier-recette_<?= $recette->getId_recette(); ?>.html">Modifier</a>] [<a class="lien" href="supprimer-recette_<?= $article->getId_recette(); ?>.html">Supprimer</a>]</li>
    <?php
	}
	?>
    </ol>
</article>