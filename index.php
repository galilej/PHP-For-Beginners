<!DOCTYPE html>
<html lang="en">

<head>
    <title>Demo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <h3>
        <?php
        $myfile = fopen("test.php", "w+"); // otvara php fajl za pisanje i brisnje sadrzaja

        $txt = "Spisak \n -prvi \n -drugi \n -treci \n -peti";
        fwrite($myfile, $txt);
        fclose($myfile);
        ?>
    </h3>

    <h4>
        <?php
        $myfile = fopen("test.php", "r"); // otvara php fajl za citanje
        echo fread($myfile, filesize("test.php"));
        fclose($myfile);
        ?>
    </h4>
    <h4>
        <?php
        $file = "test.php";
        $test = file_get_contents($file); // citanje formatiranog fajla 
        $test = nl2br($test);
        echo $test;
        ?>
    </h4>

</body>

</html>