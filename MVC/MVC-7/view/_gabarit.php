<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= $titre; ?></title>
    <link rel="stylesheet" href="<?= MEDIA; ?>/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= $description; ?>" />
    <meta name="keywords" content="<?= $motcle; ?>" />
</head>

<body>

    <div id="site">
        <header>
            <h1><a href="accueil.html">Les Magiciens Du Fouet</a></h1>
        </header>
        <nav>
            <ul>
                <?php
                if (isset($_SESSION['pseudo'])) {
                ?>
                    <li><a href="admin-home.html">Recettes</a></li>
                    <li><a href="creer-recette.html">Ajouter</a></li>
                    <li><a href="modifier-recette.html">Modifier</a></li>
                    <li><a href="supprimer-recette.html">Supprimer</a></li>
                    <li><a href="">Changer mon mot de passe</a></li>
                    <li><a href="deconnexion.html">Quitter</a></li>
                <?php
                } else {
                ?>
                    <li><a href="admin.html">Connexion</a></li>
                    <li><a href="Recette.html">Recette</a></li>
                    <li><a href="chef.html">Chefs</a></li>

                <?php
                }
                ?>
            </ul>
        </nav>
        <?= $contenu; ?>
        <footer>
            <p>MDF 2021 - Développement Pauline Marot</p>
        </footer>
    </div>

    <script src="<?= MEDIA; ?>/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?= MEDIA; ?>/jquery/controle-formulaire.js"></script>
</body>

</html>