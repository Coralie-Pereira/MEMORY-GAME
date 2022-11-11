<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon espace</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/myaccount.css">
</head>

<body>
    <!-- <img src="header.png" alt="Image de fond" id="fonddecran"> -->

    <div class="title">
        <h1><a href="index.html">The Memory Game</a></h1>

        <nav class="navigation">
            <h2 class="link1"><a href="index.php">ACCUEIL</a></h2>
            <h2 class="link2"><a href="memory.php">JEUX</a></h2>
            <h2 class="link3"><a href="scores.php">SCORES</a></h2>
            <h2 class="link4"><a href="myaccount.php">MON ESPACE</a></h2>
            <h2 class="link5"><a href="contact.php">NOUS CONTACTER</a></h2>
        </nav>
    </div>

    <div class="en_tete">
        <p class="Titre">Mon espace </p>
    </div>

    <div class="Formulaire">
        

        <div class="colonnes">

            <div class="premiere_colonne">

                <p>Ancienne adresse mail</p>
                <div class="OldEmail">
                    <input type="text" maxlength="25" size="25" name="OldEmail" id="OldEmail"
                        required>
                </div>

                <p class="txtNvlam"><br>Nouvelle adresse mail</p>

                <div class="password">
                    <label for="Nvlam"></label>
                    <input type="text" maxlength="25" size="25" placeholder=" " name="Nvlam" id="Nvlam" required>
                </div>


                <br>

                <p class="txtNvlam">Mot de passe</p>

                <div class="password">
                    <label for="password"></label>
                    <input type="text" maxlength="25" size="25" placeholder=" " name="password" id="password" required>
                </div>

                <br>

                <p class="txtNvlam">Confirmer</p>

                <div class="password">
                    <label for="confirmp"></label>
                    <input type="text" maxlength="25" size="25" placeholder=" " name="confirmp" id="confirmp" required>
                </div>

                <br>

                <div class="valider">
                    <input type="submit" value="Envoyer" />
                </div>

            </div>

        <div class="deuxieme_colonne">

            <p class="txtNvlam">Adresse mail</p>

                <div class="password">
                    <label for="Nvlam"></label>
                    <input type="text" maxlength="25" size="25" placeholder=" " name="Nvlam" id="Nvlam" required>
                </div>


                <br>
                <p class="txtNvlam">Ancien Mot de passe</p>

                <div class="password">
                    <label for="Nvlam"></label>
                    <input type="text" maxlength="25" size="25" placeholder=" " name="Nvlam" id="Nvlam" required>
                </div>

                <br>
                <p class="txtNvlam">Nouveau mot de passe</p>

                <div class="password">

                    <label for="Nvlam"></label>
                    <input type="Nvlam" maxlength="25" size="25" placeholder=" " name="Nvlam" id="Nvlam" required>
                </div>

                <br>

                <p class="txtNvlam">Confirmer</p>
                <div class="password">
                    <label for="password"></label>
                    <input type="text" maxlength="30" size="30" placeholder=" " name="password" id="password" required>
                </div>

                <br>

                <div class="valider">
                    <input type="submit" value="Envoyer" />
                </div>


            </div>
        </div>
    </div>

    


        

    </section>


    <footer>
        <section class="bas">
            <div class="informations">
                <h2>Informations</h2>

                <a id="nounderline">Vous pouvez prendre contact avec nous : <br></a>
                <a href="#"> Tel : 07 88 58 24 08 <br></a>
                <a href="#">Mail : MathisLePetitFilou@coding.com <br></a>
                <a href="#">Loc : Bretagne </a>
            </div>
            <div class="regle">
                <h2>Importance de la mémoire</h2>
                <ul>
                    <li>Jouer</li>
                    <li>Scores</li>
                    <li>Contact</li>
                </ul>
            </div>
        </section>

        <div class="reseaux">
            <div class="insta">
                <a href="https://www.instagram.com/magregro.nl" target="_blank"><img src="assets/INSTA.png" alt=""></a>
            </div>
            <div class="twitter">
                <img src="assets/TWITTER.png" alt="">
            </div>
            <div class="facebook">
                <img src="assets/Facebook.png" alt="">
            </div>
        </div>
    </footer>
</body>

</html>