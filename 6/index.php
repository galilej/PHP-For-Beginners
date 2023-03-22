<!DOCTYPE html>
<html lang="en">

<head>
    <title>Arays</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>

<body>
<h1>Recommended books</h1>

<?php
    $books=[
        "Do Androids Dream of Electric Sheep",
        "Neuromancer",
        "Ready Player One",
        "Blade Runner",
        "Dark Matter",
        "The Lengolires",
        "1984",
        "Brave New World",
        "Foundation",
        "Stranger in a Strange Land",
        "Hail Mary"
    ];
?>

<ul>
<?php foreach($books as $book) { 
    // echo "<li>{$book}&trade;</li>";
    // echo "<li>".$book."</li>";
    // echo "<div><li> $book &trade; </li></div>";
    echo "<li> $book &trade; </li>";



}
?>

</ul>
</body>

</html>