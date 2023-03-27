<?php
// Postavite karakteristične postavke za rad s Unicode znakovima
header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_regex_encoding('UTF-8');

// Uzmite nove podatke iz forme
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

// Pročitajte postojeći sadržaj iz fajla
$file = 'data.json';
$currentData = file_get_contents($file);

// Pretvorite postojeći sadržaj u PHP niz
$existingData = json_decode($currentData, true);

// Dodajte nove podatke u postojeći niz
$newData = array(
    'name' => $name,
    'phone' => $phone,
    'email' => $email,
    'message' => $message
);
$existingData[] = $newData;

// Pretvorite niz podataka u pretty JSON format
$jsonData = json_encode($existingData, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// Upisati pretty JSON podatke u fajl
file_put_contents($file, $jsonData);

return header("Location: index_json.php");
?>



