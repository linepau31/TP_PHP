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
    <li><?= $recette->getTitre(); ?> [Modifier] [Supprimer] </li>
    <?php
	}
	?>
    </ol>
</article>