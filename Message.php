<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/msg.css">
</head>
<body>

    <div class="content">
        <div class="title">
            <h1 class="link"><a href="index.php">The Memory game</a></h1>


            <nav class="navigation">
                <h2 class="link1"><a href="index.php">ACCUEIL</a></h2>
                <h2 class="link2"><a href="memory.php">JEUX</a></h2>
                <h2 class="link3"><a href="scores.php">SCORES</a></h2>
                <h2 class="link4"><a href="contact.php">NOUS CONTACTER</a></h2>
                <h2 class="link4"><a href="Register.php">MON ESPACE</a></h2>
            </nav>
        </div>
    </div>

<div class="background">
<?php
session_start(); ?>
<div class="connected">
<?php echo "Bienvenue " . $_SESSION['username']." nous sommes ravis de vous revoir";  session_unset(); ?>
</div>
<?php try {
    $dbh = new PDO ('mysql:host=localhost;dbname=pom_test', 'root', ''); //On vient creer un objet qui vient recuperer les informarions de la base de donnees
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    } catch(PDOException $e) {
        echo "DB Connection Failed: " . $e->getMessage();
    }

 $stmt = $dbh->query("SELECT * FROM Messages") ?>

</div>

<section class="chat">
            <div class="Align">
                <div class="header_chat"> <img id="photo_chat" src="Bot.png" alt="">
                    <p>Chat 😼</p>
                </div>
            </div>
            <div class="body_chat">
            <?php       while($row = $stmt ->fetch()) { 
                ?>
                <div class="user_message">
                    <p class="user_name"><?php echo $row->id;?> </p> 
                    <p class="user message"> <?php echo $row->messages;?></p>
                    <p class="Time_message"><?php echo $row->time_message;?></p>

                





                <?php } ?>
            </div>

            <div class="footer_chat">
                <form action="">
                    <input type="text" name="messages" id="messages" placeholder="Type your chat here !" >
                    <input type="submit" name="submit" value="Envoyer">
                    </form>

                    <?php
                     if(isset($_POST['submit'])){
                        $messages = htmlspecialchars($_POST['messages']);
                        $insertUser = $dbh->prepare('INSERT INTO Messages(messages)VALUES(?)'); //on rentre dans la base de données (via l'objet) les informations du nouvel utilisateur
                        $insertUser->execute(array($messages)); 
                    }
                    ?>


               
            </div>
        </section>
        </div>
        </body>
</html>