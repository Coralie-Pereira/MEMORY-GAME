<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon espace</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/login.css">
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

    

        <p class="Titre">Page de connexion </p>


        <?php session_start();
        
     if (isset($_SESSION ['mail'])) { ?>
 
    <div class="test_register">
        <p class="txtreg"> <?php echo "vous êtes bien enregistré avec le mail : ".$_SESSION ['mail'] ?>     </p>
        
    </div>

 
 <?php
}  session_unset();
?>

    <div class = "Formulaire">
        <form method="post" action="fctlogin.php">

        <div class="mail">
            <label for="mail"></label>
            <input type="text" maxlength="30" size="43" placeholder="Mail..." 
            name="mail" id="mail" required>
        </div>


        <div class="mdp">
            <label for="mdp"></label>
            <input type="text" maxlength="30" size="43" placeholder="Mot de passe..." 
            name="mdp" id="mdp" required>
        </div>

        


        <div class="valider">
            <input type="submit" name="submit" value="Valider" />
        </div>

</form>

    <div class="soucis">
        <h2><a href="myaccount.php">Vous avez oublié votre email ou votre mot de passe ?</a></h2>
    </div>
    </div> 


    <footer>
        <section class="bas">
            <div class="informations">
                <h2>Informations</h2>

                <a id="nounderline">Vous pouvez prendre contact avec nous : <br></a>
            <a href="#"> Tel : 03 88 58 24 08 <br></a>
            <a href="#">Mail : contact@memorygame.com <br></a>
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