<?php
$email = $_GET["email"];
$password = $_GET["password"];

$data[] = array(
    "email" => $email,
    "password" => $password
);

$inp = file_get_contents('fakeUser.json');
$tempArray = json_decode($inp);
array_push($tempArray, $data[0]);
$jsonData = json_encode($tempArray);
file_put_contents('fakeUser.json', $jsonData);
?>