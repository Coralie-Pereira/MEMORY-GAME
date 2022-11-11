<?php
$dbh = new PDO ('mysql:host=localhost;dbname=pom_test', 'root', ''); //On vient creer un objet qui vient recuperer les informarions de la base de donnees

if(isset($_POST['submit'])){

    
    $amdp = ($_POST['amdp']);
    
    $nmdp = ($_POST['nmdp']);
    $confirmmdp = ($_POST['confirmmdp']);
    $mail = ($_POST['mail']);

    if ((strlen($nmdp)<8) ) {
        echo "le format du mot de passe n'est pas correct"; 
    }
    else {
        if ($nmdp == $confirmmdp) {
            
            $stmt = $dbh->prepare("SELECT * FROM Users WHERE mail=?");
            $stmt->execute([$mail]); 
            $user = $stmt->fetch();
            if ($user) {
                $sql = "UPDATE Users SET mdp =  ?  WHERE mdp= ? ";   
                $modifUser = $dbh->prepare($sql); 
                $modifUser->execute(array($nmdp,$amdp)); 
                echo "le mot de passe a été changé avec succès";
                } else {
                    echo"le mdp : ".$mdp." n'existe pas";
                }
            }
        else {
            echo "Vous n'avez pas écris deux fois le même mot de passe";
        }
        
    
    }
}
     
    ?>