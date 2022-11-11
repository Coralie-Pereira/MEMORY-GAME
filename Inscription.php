<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="contactcss.css">
    <link rel="stylesheet" href="chat.css">
</head>

<body>
    <div class="content">
        <img src="header.png" alt="Image de fond" id="fonddecran">

        <div class="title">
            <h1 class="link"><a href="index.html">The Memory game</a></h1>


            <nav class="navigation">
                <h2 class="link1"><a href="#">ACCUEIL</a></h2>
                <h2 class="link2"><a href="#">JEUX</a></h2>
                <h2 class="link3"><a href="#">SCORES</a></h2>
                <h2 class="link4"><a href="#">NOUS CONTACTER</a></h2>
            </nav>
        </div>
        <div class="en_tete">
            <p class="Titre">Inscription</p>




        </div>








        <div class="Formulaire">
            <form method="post" action="mon-formulaire.php"></form>

            <div class="premiere_ligne">



                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label
                    for="Nom"></label>
                <input type="text" maxlength="25" size="25" placeholder="Nom" name="nom" id="nom" required>


                <label for="Prénom"></label>
                <input type="text" maxlength="25" size="25" placeholder="Prénom" name="Prénom" id="Prénom" required>



                <label for="Adresse électronique"></label>
                <input type="text" maxlength="25" size="25" placeholder="Adresse électronique"
                    name="Adresse électronique" id="Adresse électronique" required>

            </div>

            <br>
            <br>
            <div class="Sexe">
                <style>
                    body {
                        color: whitesmoke;
                    }
                </style>

                Homme <input type="radio" name="sexe" value="H" checked="checked">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                Femme <input type="radio" name="sexe" value="F">
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                Non précisé <input type="radio" name="sexe" value="?">

            </div>
            <br>
            <br>
            <br>
            <br>
            


            <td>
                <select>
                    <option>Afghanistan</option>
                    <option>Algérie</option>
                    <option>Albanie</option>
                    <option>Allemagne</option>
                    <option>Arabie Saoudite</option>
                    <option>Argentine</option>
                    <option>Australie</option>
                    <option>Autriche</option>
                    <option>Belgique</option>
                    <option>Bangladesh</option>
                    <option>Birmanie</option>
                    <option>Bolivie</option>
                    <option>Brésil</option>
                    <option>Bulgarie</option>
                    <option>Cambodge</option>
                    <option>Cap vert</option>
                    <option>Chili</option>
                    <option>Chine</option>
                    <option>Colombie</option>
                    <option>Canada</option>
                    <option>Corée du Sud</option>
                    <option>Côte d'Ivoire</option>
                    <option>Croatie</option>
                    <option>Danemark</option>
                    <option>Égypte</option>
                    <option>Équateur</option>
                    <option>Espagne</option>
                    <option>États Unis</option>
                    <option>Fidji</option>
                    <option>Finlande</option>
                    <option>France</option>
                    <option>Géorgie</option>
                    <option>Gabon</option>
                    <option>Guyane</option>
                    <option>Hong Kong</option>
                    <option>Hongrie</option>
                    <option>Inde</option>
                    <option>Iraq</option>
                    <option>Irlande</option>
                    <option>Israël</option>
                    <option>Italie</option>
                    <option>Japon</option>
                    <option>Pologne</option>
                    <option>Portugal</option>
                    <option>Pays Bas</option>
                    <option>Russie</option>
                    <option>Sénégal</option>
                    <option>Suède</option>
                    <option>Suisse</option>
                    <option>Turquie</option>
                    <option>Ukraine</option>
                    <option>Uruguay</option>
                    <option>Yémen</option>
                    <option>Zimbabwe</option>


                </select>



                <div class="valider">
                    <br> <br> <br><br> 
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input
                        type="submit" value="Valider" />
                </div>
                <br> <br> <br> <br> <br> 


        </div>

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