<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/gamestyle.css">

    <title>Memory</title>
</head>

<body>
    <div class="content">

        <div class="title">
            <h1><a href="index.php">The Memory Game</a></h1>


            <nav class="navigation">
                <h2 class="link1"><a href="index.php">ACCUEIL</a></h2>
                <h2 class="link2"><a href="memory.php">JEUX</a></h2>
                <h2 class="link3"><a href="scores.php">SCORES</a></h2>
                <h2 class="link4"><a href="Register.php">MON ESPACE</a></h2>
                <h2 class="link5"><a href="contact.php">NOUS CONTACTER</a></h2>
            </nav>
        </div>
    </div>

    <section class="space">
    <div id="container" class="container_theme">
        <br>
        
        <!--CONTIENT BOUTTON THEME + LISTE THEME -->
        <div class="contenaire_tt_theme"> <!--div qui contient -->
         <div class="button_theme"> <!-- moyenne case boutton theme + liste des themes-->
            <p id="themes">Themes</p>
        </div>

<!-- boutton ou ya les themes -->
        <select class="grand_theme"   name="theme" id="theme">
            <div class="choix_theme">
                <option value="Mario">Mario</option>
                <option value="Pokemon">Pokemon</option>
                <option value="Drapeau">Drapeau</option>
            </div>
        </select>
        </div><!--balise qui referme la moyenne div qui contient les deux cases themes-->

<!-- DIV OU YA LE NIVEAU DE DIFFICULTER -->
<div class="contenaire_tt_difficulter">
<div id="container2" class="container_difficulter">
    <div class="button_difficulter"> <!-- contient la moyenne case ou il y a le boutton difficulter et la liste des difficulter-->
         <p id="Difficulter">Difficultée</p>
    </div>

<select class="mode"  name="mode" id="mode">
    <option  value="Facile">Facile</option>
    <option  value="Intermediaire">Intermediaire</option>
    <option  value="Expert">Expert</option>
    <option  value="Impossible">Impossible</option>
</select>
    </div> <!--ferme 2eme case boutton difficulter + liste-->
</div>

</div> <!--FERME LA GRANDE DIV CONTENANT TOUT -->



<div class="lancer_la_partie" id="lancement">  
<input type="button" value="Nouvelle partie" onClick="window.location.href='memorygame.php'">
</div>  
    </section>

    <section class="chat">
        <div class="Align">
            <div class="header_chat"> <img id="photo_chat" src="Bot.png" alt="">
                <p>Chat Général</p>
            </div>
        </div>
        <div class="body_chat">
            <div class="user_message">
                <p class="user_name" id="moi">Moi</p>
                <p class="user message" id="salut">Salut !</p>
                <p class="Time_message">Aujourd'hui à 11h36</p>
            </div>

            <div class="user_message2">
                <p class="user_name2">Noé</p>
                <p class="user message2">Hey ! ça va ?</p>
                <p class="Time_message">Aujourd'hui à 11h38</p>
            </div>

        </div>

        <div class="footer_chat">
            <form action="">
                <input type="text" placeholder="Text.." id="">
                <input type="submit" value="Envoyer">


            </form>


        </div>

    </section>

    <footer>
        <section class="bas">
            <div class="informations">
                <h2>Informations</h2>

                <a id="nounderline">Vous pouvez prendre contact avec nous : <br></a>
                <a href="#"> Tel : 07 88 58 24 08 <br></a>
                <a href="#">Mail : mathislepetitfilou@coding.com</a>
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