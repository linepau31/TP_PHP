<article>
  	<h1>Bienvenue</h1>
  	<ol>
  		<?php
		foreach ($recettes as $recette) {
		?>
  		<p><a class="lien" href="voir-recette_<?= $recette->getId_recette(); ?>.html"><?= $recette->getTitre(); ?><?= $recette->getPhoto(); ?></a></p>
  		<?php
		}
		?>
  	</ol>
</article>