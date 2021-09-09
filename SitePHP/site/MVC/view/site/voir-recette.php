<article>
	<h1><?= $recette->getTitre(); ?></h1>
    <div class="box">
    <?= $recette->getChef(); ?>
    <br> <br>
    <?= $recette->getDescriptif(); ?>
        <br><br>
    <?= $recette->getIngredient(); ?>
        <br><br>
    <?= $recette->getEtapes(); ?>
    </div>
</article>    