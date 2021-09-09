
<article>
    <h1>Connexion</h1>
    <div class="box">
        <?= $message; ?>

        <form method="post" action="" id="myForm">
            <p><input id="pseudo" type="text" name="pseudo" placeholder="Votre Pseudo" required /></p>
            <span class="erreurPseudo"></span>
            <p><input id="password" type="password" name="password" maxlength="6" placeholder="Votre Password" required /></p>
            <span class="erreurPassword"></span>
            
            <div id="grille">

                <div class="block">
                    <div class="case" id="case0"></div>
                    <div class="case" id="case1"></div>
                    <div class="case" id="case2"></div>
                    <div class="case" id="case3"></div>
                </div>

                <div class="block">
                    <div class="case" id="case4"></div>
                    <div class="case" id="case5"></div>
                    <div class="case" id="case6"></div>
                    <div class="case" id="case7"></div>
                </div>

                <div class="block">
                    <div class="case" id="case8"></div>
                    <div class="case" id="case9"></div>
                    <div class="case" id="case10"></div>
                    <div class="case" id="case11"></div>
                </div>

                <div class="block">
                    <div class="case" id="case12"></div>
                    <div class="case" id="case13"></div>
                    <div class="case" id="case14"></div>
                    <div class="case" id="case15"></div>
                </div>
            </div>


            <div id="btn">

                <button type="submit" id="soumission" onClick="validation()">Valider</button>
                <button type="reset" onClick="effacer()">Effacer</button>

            </div>

            <a href="">Mot de passe oublié ?</a>
        </form>
    </div>
</article>

