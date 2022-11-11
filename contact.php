<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de contact</title>
    <link rel="stylesheet" href="css/contactcss.css">
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

            <p class="Titre">Page de contacts </p>


        <!-- Les 3 informations (tel,mail,loc) -->


        <div class="grosse_boite">

            <div class="enfant1">
                <div class="img1"><img src="assets/tel.PNG"> </div>
                <p class="texte_boite"> 07 88 58 24 08</p>
                <div class="petite_boite"></div>
            </div>

            <div class="enfant2">
                <div class="img2"><img src="assets/mail.PNG"></div>
                <p class="texte_boite">MathisLePetitFilou@coding.com</p>
                <div class="petite_boite"></div>
            </div>

            <div class="enfant3">
                <div class="img3"><img src="assets/pos.PNG">
                    <div class="petite_boite"></div>
                </div>
                <p class="texte_boite">Bretagne</p>

            </div>
        </div>


        <!-- Le formulaire pour remplir la fiche de contact -->


        <div class = "Formulaire">
        <form method="post" action="fctcontact.php">

        <div class="nom">
            <label for="nom"></label>
            <input type="text" maxlength="30" size="43" placeholder="Nom..." 
            name="nom" id="nom" required>
        </div>


        <div class="mail">
            <label for="mail"></label>
            <input type="text" maxlength="30" size="43" placeholder="Mail..." 
            name="mail" id="mail" required>
        </div>

        <div class="Sujet">
            <label for="Sujet"></label>
            <input type="text" maxlength="30" size="43" placeholder="Sujet..." 
            name="Sujet" id="Sujet" required>
        </div>

        <div class="message">
            <label for="confirmmdp"></label>
            <input type="text" maxlength="30" size="43" placeholder="Message..." 
            name="message" id="message" required>
        </div>


        <div class="valider">
            <input type="submit" name="submit" value="Valider" />
        </div>

</form>
    </div> 

        


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
                    <a href="https://www.instagram.com/magregro.nl" target="_blank"><img src="INSTA.png" alt=""></a>
                </div>
                <div class="twitter">
                    <img src="TWITTER.png" alt="">
                </div>
                <div class="facebook">
                    <img src="Facebook.png" alt="">
                </div>
            </div>
        </footer>


</body>

</html>