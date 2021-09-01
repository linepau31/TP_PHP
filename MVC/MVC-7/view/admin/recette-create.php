<?php
if (isset($_SESSION['pseudo'])) {
    $pseudo = $_SESSION['pseudo'];
} else {
    header('location: admin.html');
}
?>
<article>
    <h1>Créer une recette</h1>
    <div class="box">
        <?= $message; ?>
        <form method="post" action="">
            <b>Recette :</b>
            <p><input type="text" name="titre" placeholder="Titre" /></p>
            <p><textarea name="recette" placeholder="Recette"></textarea></p>
            <p><textarea name="descriptif" placeholder="Description"></textarea></p>
            <p><input type="text" name="keywords" placeholder="Keywords" /></p>
            <p><input id="soumission" type="submit" value="Créer la recette" /></p>
        </form>
    </div>
</article>