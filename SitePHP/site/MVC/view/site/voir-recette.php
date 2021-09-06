<article>
	<h1><?= $recette->getTitre(); ?></h1>
    <div class="box">
    <?= $recette->getChef(); ?>
    <br>
    <?= $recette->getDescriptif(); ?>
    <?= $recette->getIngredient(); ?>
    <?= $recette->getEtapes(); ?>
    </div>
</article>    