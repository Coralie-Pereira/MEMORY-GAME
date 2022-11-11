<?php
$score = array("1" => "Noé", "2" => "Coralie", "3" => "Noa", "4" => "Mathis");
arsort($score);
foreach ($score as $key => $val) {
    echo "$key = $val\n";
}
?>