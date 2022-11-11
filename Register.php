<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon espace</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/Register.css">
</head>

<body>


    <div class="content">
        <!-- <img src="header.png" alt="Image de fond" id="fonddecran"> -->

        <div class="title">
            <h1><a href="index.php">The Memory Game</a></h1>

            <nav class="navigation">
                <h2 class="link1"><a href="index.php">ACCUEIL</a></h2>
                <h2 class="link2"><a href="memorygame.php">JEUX</a></h2>
                <h2 class="link3"><a href="scores.php">SCORES</a></h2>
                <h2 class="link4"><a href="Register.php">MON ESPACE</a></h2>
                <h2 class="link5"><a href="contact.php">NOUS CONTACTER</a></h2>
            </nav>
        </div>

        <p class="Titre">Page d'inscription </p>

        <div class="connect">
            <h2>Vous avez déjà un compte ?
                <a href="Login.php">Connectez-vous ici !</a>
            </h2>
        </div>


        <div class = "Formulaire">
        <form method="post" action="fctregister.php">

        <div class="mail">
            <p>Entrer votre email</p>
            <label for="mail"></label>
            <input type="text" maxlength="30" size="43"
            name="mail" id="mail" required>
        </div>

        <div class="username">
            <p>Entrer votre username</p>
            <label for="username"></label>
            <input type="text" maxlength="30" size="43"
            name="username" id="username" required>
        </div>

        <div class="password-checker">
            
            <div class="mdp">  
                <p> Entrer votre mot de passe </p>      
                <input type="text" name="mdp" maxlength="30" size="43" id="mdp" required>
            </div>
            
           
            <div class="progress">
                <div class="bar"></div>
            </div>
            <div id="carousel">

                <h5><i id="weak">Faible</i>  
                    <i id="medium">Moyen</i>
                    <i id="strong">Fort</i></h5>
                
            </div>
        </div> 

        <div class="confirmmdp">
            <p>Confirmer mot de passe</p>
            <label for="confirmmdp"></label>
            <input type="text" maxlength="30" size="43"
            name="confirmmdp" id="confirmmdp" required>
        </div>

        <div class="valider">
            <input type="submit" name="submit" value="Valider" />
        </div>

</form>
    </div>

        </section>


        <footer>

            <section class="bas">
                <div class="informations">
                    <h2>Informations</h2>

                    <a id="nounderline">Vous pouvez prendre contact avec nous : <br></a>
                    <a href="#"> Tel : 07 88 58 24 08 <br></a>
                    <a href="#">Mail : jessayeunpeu@gmail.com</a>
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

<script src="script.js"></script>

</html>