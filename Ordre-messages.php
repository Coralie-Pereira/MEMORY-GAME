<?php
$quete_message = Projet_P4 ("SELECT * FROM chat WHERE expediteur=$myid AND destinataire=$yourid OR expediteur=$yourid AND destinataire=$myid ORDER BY heure DESC");
while($resultat_message = Projet_P4($quete_message))
{
?>
   <div>
   <?php
   if ($resultat_message['expediteur'] == $myid)
   {
   ?>
   <span style="color: <?php echo $_SESSION['chat_couleur'] ?>">
   <?php
   }
   elseif ($resultat_message['expediteur'] == $yourid)
   {
   ?>
   <span style="float: left"><img src="/images/photo_profil/<?php echo $yourid ?>.jpg" title="<?php echo $resultat_contact['prenom'] ?>"></span>
   <span style="color: <?php echo $resultat_contact['chat_couleur'] ?>">
   <?php
   }
   ?>
   <?php echo $resultat_message['message'] ?>
   </span>
   </div>
   <br />
<?php
}
?>