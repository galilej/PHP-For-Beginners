<?php

header('Content-Type: application/json; charset=UTF-8');

// pročitaj txt fajl u varijablu
$data = file_get_contents('data.json');

// pretvori podatke u JSON format
$json_data = json_decode($data);

// vrati podatke u JSON formatu
echo json_encode($json_data);

?>



