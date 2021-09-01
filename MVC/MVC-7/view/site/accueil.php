<article>
  	<h1>Accueil php</h1>
  	<ol>
  		<?php
		foreach ($recettes as $recette) {
		?>
  		<li><a class="lien" href="voir-recette_<?= $recette->getId_recette(); ?>.html"><?= $recette->getTitre(); ?></a></li>
  		<?php
		}
		?>
  	</ol>
</article>