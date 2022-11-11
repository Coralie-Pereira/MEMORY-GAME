<?php
session_start();
$dbh = new PDO ('mysql:host=localhost;dbname=pom_test', 'root', '');


if(isset($_POST['submit'])){
    

    $mail = htmlspecialchars($_POST['mail']); 
   $mdp = ($_POST['mdp']);
   $email = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);

   if ((strlen($mdp)<8) or (strlen("username")<4  ) or ($email== false)   ){  //toutes les raisons pour lesquelles les informations rentrées seraient fausses
    echo "le format de l'adresse mail, du pseudo ou du mot de passe n'est pas correct"; }

    else {

    $recupUser = $dbh->prepare('SELECT * FROM Users WHERE mail = ? and mdp= ?');
    $recupUser->execute(array($mail,$mdp)); 

    if($recupUser->rowCount()>0) {
        $_SESSION['mail'] = $mail;
        $_SESSION ['mdp'] = $mdp;
        
        $_SESSION ['username'] =  $recupUser->fetch()['username'];
        echo $_SESSION['username'];
        header('Location: Message.php');
        
    }
    else {
        echo"Email ou mot de passe invalide";
    }
}
}





?>