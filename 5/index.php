<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <?php
    $name = "Dark Matter";
    $author = "Blake Crouch";
    $year = 2016;
    $pages = 352;
    $price = 9.99;
    $rating = 4.5;

    $read = false;

    if ($read) {
        $massage = "You have read $name.";
    } else {
        $massage = "You have NOT read $name.";
    }
    ?>

    <h1>
        <?php echo $massage; ?>."
    </h1>

</body>

</html>