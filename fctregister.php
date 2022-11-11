<?php
session_start(); //On lance la session le plut tot possible
$dbh = new PDO ('mysql:host=localhost;dbname=pom_test', 'root', ''); //On vient creer un objet qui vient recuperer les informarions de la base de donnees



if(isset($_POST['submit'])) //lorsque l'utilisateur va appuyer sur le bouton valider
{
   $mail = htmlspecialchars($_POST['mail']); //on recupere dans $mail ce qui est ecrit dans le champs
   $mdp = ($_POST['mdp']); //on crypte le mdp
   $username = htmlspecialchars($_POST['username']);  //htmlspecialcharts securise le code
   $confirmmdp = htmlspecialchars($_POST['confirmmdp']);
   $email = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL); //fonction deja existentielle de PHP permettant de filtrer si le mail est valide ou pas
   
  




      if ((strlen($mdp)<8) or (strlen($username)<4  ) or ($email== false) or ((preg_match('/[^a-zA-Z\d]/',$mdp) && preg_match('/\d/',$mdp) && preg_match('/[a-zA-Z]/',$mdp))== FALSE)){  //toutes les raisons pour lesquelles les informations rentrées seraient fausses
        echo "le format de l'adresse mail, du pseudo ou du mot de passe n'est pas correct";
      
      }
      else{
      
        if ($mdp == $confirmmdp) {
          $stmt = $dbh->prepare("SELECT * FROM Users WHERE mail=?");
          $stmt->execute([$mail]); 
          $user = $stmt->fetch();
          if ($user) {
            echo"Ce mail existe déjà ";
            // le nom d'utilisateur existe déjà
            } else {
            // le nom d'utilisateur n'existe pas
          
          $insertUser = $dbh->prepare('INSERT INTO Users(mail,mdp,username)VALUES(?,?,?)'); //on rentre dans la base de données (via l'objet) les informations du nouvel utilisateur
          $insertUser->execute(array($mail,$mdp,$username)); 

          $recupUser = $dbh->prepare('SELECT * FROM Users WHERE mail = ? and mdp = ? and username  = ?');
          $recupUser->execute(array($mail,$mdp,$username));
        
    
          if($recupUser ->rowCount() > 0) {
            $_SESSION ['mail'] = $mail;
            $_SESSION ['mdp'] = $mdp;
            $_SESSION ['username'] = $username;
            $id_user ['id'] =  $recupUser->fetch()['id']; //fetch permet de recuperer toutes les données du tableau
            header('Location: Login.php');
            }
          
        
        else {
        echo "Vous n'avez pas écris deux fois le même mot de passe";
        }
      }
}
}
}

?>