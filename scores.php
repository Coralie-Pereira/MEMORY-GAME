<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon espace</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="css/scores.css">
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

        <p class="Titre">Tableau des scores </p>

        <?php
try {
    $dbh = new PDO ('mysql:host=localhost;dbname=pom_test', 'root', ''); //On vient creer un objet qui vient recuperer les informarions de la base de donnees
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    } catch(PDOException $e) {
        echo "DB Connection Failed: " . $e->getMessage();
    }
$stmt = $dbh->query("SELECT * FROM Scores")


?>

<div class=table>

<table class="tableau_style">
            <thead>
                <tr>
                    <th>Nom du jeu</th>
                    <th>Pseudo joueur</th>
                    <th>Niveau difficulté  <div class="submit">
                    
                   
                               
                    
                    </div></th>
                    
                    <th>Score</th>
                    <th>Date / Heure</th>
                </tr>
            </thead>


            <tbody>

<?php       while($row = $stmt ->fetch())
                {?>   <tr>
                    <td><?php echo $row->game_name;?></td>
                    <td><?php echo $row->player_name;?></td>
                    <td><?php echo $row->difficulty;?></td>
                    <td><?php echo $row->Score;?></td>
                    <td><?php echo $row->Time_game;?></td>



                
                    
                </tr>

                <?php } ?>
                
            </tbody>
        </table>

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