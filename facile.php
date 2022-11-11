<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="facile.css" />

    <title>Memory</title>
</head>

<body>
    <div class="content">

        <div class="title">
            <h1><a href="index.html">The Memory Game</a></h1>


            <nav class="navigation">
                <h2 class="link1"><a href="index.php">ACCUEIL</a></h2>
                <h2 class="link2"><a href="memory.php">JEUX</a></h2>
                <h2 class="link3"><a href="scores.php">SCORES</a></h2>
                <h2 class="link4"><a href="Register.php">MON ESPACE</a></h2>
                <h2 class="link5"><a href="contact.php">NOUS CONTACTER</a></h2>
            </nav>
        </div>
        <div class="niveau">
            <h2>Niveau Facile <a href="memory.php"> ></a></h2>
        </div>
    </div>

    <div class="essai"></div>

    <section class="jeux">
        <table>
            <tr class="range1">
                <td class="cases"></td>
                <td class="cases"></td>
                <td class="cases"></td>
                <td class="cases"></td>
                <td class="cases"></td>
            </tr>
            <tr class="range2">
                <td class="cases"></td>
                <td class="cases"></td>
                <td class="cases"></td>
                <td class="cases"></td>
                <td class="cases"></td>
            </tr>
            <tr class="range3">
                <td class="cases"></td>
                <td class="cases"></td>
                <td class="cases"></td>
                <td class="cases"></td>
                <td class="cases"></td>
            </tr>
            <tr class="range4">
                <td class="cases"></td>
                <td class="cases"></td>
                <td class="cases"></td>
                <td class="cases"></td>
                <td class="cases"></td>
            </tr>
            <tr class="range5">
                <td class="cases"></td>
                <td class="cases"></td>
                <td class="cases"></td>
                <td class="cases"></td>
                <td class="cases"></td>
            </tr>
        </table>
    </section>

    <section class="boutons">
        <div class="facile" href="facile.html"><button><a href="facile.html">facile</a></button></div>
        <div class="normal" href="memory.html"><button><a href="memory.html">intermédiaire</a></button></div>
        <div class="difficile" href="expert.html"><button><a href="expert.html">expert</a></button></div>
        <div class="impossible" href="impossible.html"><button><a href="impossible.html">impossible</a></button></div>
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