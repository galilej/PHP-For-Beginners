<!DOCTYPE html>
<html lang="en">

<head>
    <title>Associative Arays</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <h1>Recommended books</h1>

    <?php
    $books = [
        [
            'name' => "Do Androids Dream of Electric Sheep",
            'year' => "1968",
            'author' => "Philip K. Dick",
            'url' => "https://en.wikipedia.org/wiki/Do_Androids_Dream_of_Electric_Sheep%3F"
        ],
        [
            'name' => "Dvoglasne invencije za klavir",
            'author' => "Bach-Busoni",
            'year' => "1990",
            'url' => "https://plus.cobiss.net/cobiss/sr/sr/bib/74487303#full"

        ],
        [
            'name' => "The Dispossessed",
            'year' => "1974",
            'author' => "Ursula K. Le Guin",
            'url' => "https://en.wikipedia.org/wiki/The_Dispossessed"
        ]
        
    ];
    ?>
<!-- 
    <p>
        <?= $books[2] ?>
    </p> -->
<ul>
    <?php foreach ($books as $book) : ?>
        <li>
            <a href="<?= $book['url'] ?>">
                <?= $book['name'] ?>
            </a>
            <p>
                <?= $book['author'] ?>
            </p>
            <p>
                <?= $book['year'] ?>
            </p>
        </li>
    <?php endforeach; ?>
</ul>
</body>

</html>