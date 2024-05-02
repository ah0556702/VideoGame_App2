<?php
    include "../includes/cdnlinks.php";
    include "nav.php";
    include "../Model/games_db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
</head>
<body>
    <?php 
        include "../Model/games.php";
        showGames();
    ?>
</body>
</html>