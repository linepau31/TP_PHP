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
            <h1><a class="lien" href="index.php">Les Magiciens Du Fouet</a></h1>
        </header>
        <nav>
            <ul>
                <?php
                if (isset($_SESSION['pseudo'])) {
                ?>
                    <li><a href="admin-home.html">Recettes</a></li>
                    <li><a href="creer-recette.html">Ajouter</a></li>
                    <li><a href="admin-home.html">Modifier/Supprimer </a></li>
                   <br>
                    <br>
                    <li><a href="">Changer mon mot de passe</a></li>
                    <li><a href="deconnexion.html">Quitter</a></li>
                <?php
                } else {
                ?>
                    <li><a href="admin.html">Connexion</a></li>
                    <li><a href="index.php">Recettes</a></li>
                    <li><a href="index.php">Chefs</a></li>
                    <li><a href="">Contact</a></li>


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
    <script src="<?= MEDIA; ?>/jquery/script.js"></script>
</body>

</html>