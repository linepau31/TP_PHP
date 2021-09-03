<?php
if(isset($_SESSION['pseudo'])) {
	$pseudo = $_SESSION['pseudo'];
} else {
	header('location: admin.html');
}
?>
<article>
	<h1>Supprimer la recette #<?= $_GET['id_recette']; ?></h1>
    <div class="box">
    <?php
	if(!isset($message)) {
	?>
		<p>Etes-vous certain de vouloir supprimer cette recette ?</p>
        <form method="post" action="">
        <p><input type="submit" name="non" value="NON" /></p>
        <input type="hidden" name="id_recette" value="<?= $_GET['id_recette']; ?>" />
        <p><input type="submit" name="oui" value="OUI" /></p>
        </form>
        <hr />
        <p><?= $recette->getTitre(); ?></p>
        <p><?= $recette->getPhoto(); ?></p>
    <?php
	} else { echo $message; } ?>
    </div>
</article>