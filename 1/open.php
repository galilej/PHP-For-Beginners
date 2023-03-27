<!DOCTYPE html>
<html lang="en">

<head>
    <title>Open data</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <?php

    // otvaranje txt fajla za čitanje
    $file = fopen("podaci.txt", "r");

    // kreiranje data table
    $table = array();

    // iteriranje kroz svaki red fajla
    while (!feof($file)) {
        $row = fgetcsv($file, 0, "\t"); //čitanje reda kao niza
        array_push($table, $row); //dodavanje reda u data table
    }

    // zatvaranje fajla
    fclose($file);

    // prikazivanje data table
    $json_data = json_encode($table);

    print_r($json_data);
   
    ?>

    




</body>

</html>