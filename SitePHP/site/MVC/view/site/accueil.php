<article>
  	<h1>Bienvenue</h1>
  	<ol>
  		<?php
		foreach ($recettes as $recette) {
		?>
  		<p><a class="lien" href="voir-recette_<?= $recette->getId_recette(); ?>.html"><?= $recette->getTitre(); ?>
              <br>  De : <?= $recette->getChef(); ?></a></p>
  		<?php
		}
		?>
  	</ol>

</article>