<?php

if(isset($_POST['submit'])){

    
$nom = ($_POST['nom']);
$mail = ($_POST['mail']);
$Sujet = ($_POST['Sujet']);
$message = ($_POST['message']);
$email = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);

    if ((strlen($message)<15) or ($email== false) or (empty($nom)) or (empty($Sujet)) ) {
        echo "Veuillez vérifier le formulaire"; 
    }
    else {
        mail($mail,$Sujet,$message);
    }
}

?>

