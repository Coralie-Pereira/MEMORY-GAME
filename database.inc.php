<?php 
function returnObject(){
try {
    $dbh = new PDO('mysql:host=localhost;dbname=Memory Game', "root", "");
    foreach($dbh->query('SELECT * from Users') as $row) {
        print_r($row);
    }
    $dbh = null;
    } catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
}
return returnObject();
?>