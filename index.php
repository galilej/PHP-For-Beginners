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
        $myfile = fopen("test.txt", "w+");

        $txt = "Spisak \n -prvi \n -drugi \n -treci";
        fwrite($myfile, $txt);
        fclose($myfile);
        ?>
    </h3>
    
    <h4>
        <?php
        $myfile = fopen("test.txt", "r");
        echo fread($myfile, filesize("test.txt"));
        fclose($myfile);
        ?>
    </h4>

</body>

</html>