<?php
include "../controller/config.php";
$query = "SELECT * FROM users";
$result = $mysqli->query($query);


$resultList = array();

while ($comment = $result->fetch_assoc()){
    $resultList[] = $comment;
}
$json = json_encode($resultList);

echo $json;