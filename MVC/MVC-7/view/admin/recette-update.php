<?php
if(isset($_SESSION['pseudo'])) {
	$pseudo = $_SESSION['pseudo'];
} else {
	header('location: admin.html');
}
?>
<article>
	<h1>Modifier une recette</h1>
    <div class="box">
		<?= $message; ?>
        <form method="post" action="">
        	<b>Recette :</b>
            <p><input type="text" name="titre" value="<?= $recette->getTitre(); ?>" /></p>
            <p><textarea name="descriptif"><?= $recette->getDescriptif(); ?></textarea></p>
            <b>Meta :</b>
            <p><textarea name="ingredient"><?= $recette->getIngredient(); ?></textarea></p>
            <p><input type="text" name="keywords" value="<?= $recette->getKeywords(); ?>" /></p>
            <input type="hidden" name="id_recette" value="<?= $_GET['id_recette']; ?>" />
            <p><input id="soumission" type="submit" value="Modifier la recette" /></p>
        </form>
    </div>
</article>