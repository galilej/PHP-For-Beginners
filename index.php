<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Demo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <h1>
        <?php
        $a=5;
        $b="World";
            echo "Hello," . " " . $b . "!" . " " . $a;     
        ?>
    </h1>
    <h2>
        <?php
            echo  nl2br("kings \n garden1 \n garden2"); // nl2br() is used to add a new line
        ?>
    </h2>
    </body>
</html>