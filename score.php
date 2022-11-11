<?php
try {
    $dbh = new PDO ('mysql:host=localhost;dbname=pom_test', 'root', ''); //On vient creer un objet qui vient recuperer les informarions de la base de donnees
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    } catch(PDOException $e) {
        echo "DB Connection Failed: " . $e->getMessage();
    }
$stmt = $dbh->query("SELECT * FROM Scores")


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    





<table class="tableau_style">
            <thead>
                <tr>
                    <th>Nom du jeu</th>
                    <th>Pseudo joueur</th>
                    <th>Nivo difficulté  <div class="submit">
                    
                   
                               
                    
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

        </body>
</html>