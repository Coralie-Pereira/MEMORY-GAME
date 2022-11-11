<?php

$dbh = new PDO ('mysql:host=localhost;dbname=pom_test', 'root', '');



if(isset($_POST['submit']))
{

   $mail = ($_POST['mail']);
   $mdp = sha1 ($_POST['mdp']); //On crypte le mdp
   $username = ($_POST['username']);  //On force l'utilisateur à rentrer un string
   

   $insertUser = $dbh->prepare('INSERT INTO Users(mail,mdp,username)VALUES(?,?,?)');
   $insertUser->execute(array($mail,$mdp,$username));
    

    

} 
$longString = ($_POST['mdp']);
echo strlen($longString); 

  // Sortie: 21
// if (longueurmdp < 8) {
//     echo 'ERRROOOOOOOR va te faire batard'
// } else{
//     echo 'tranquilleeeeee'
// }


// function check_email_address($mail) { 
//     if 
// }
// $mail = "test@test.com";
// if (check_email_address($mail) == false){echo "incorrect";}
// else echo "correct";

?>