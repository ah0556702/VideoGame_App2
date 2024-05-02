<!DOCTYPE html>
<!-- 
        Audrey Harmon
        Backend Web Development
        October 20, 2023
 -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <?php include "includes/cdnlinks.php"?>
    <title>Video Game App</title>
</head>

<body>
    <?php 
        include "View/nav.php";
        include "Model/games.php";
        // include "View/catalog.php";

        echo("<br>");
        include "Model/games_db.php";
        include "View/orderForm.php";

        echo("<hr>");

        showGames();

        $id = filter_input(INPUT_GET, 'username');
        $action = filter_input(INPUT_GET, 'action');

// Check if $action is true (which would have been set from the get in the code above). If not, fetch 'action' from POST input and assign to $action.
    $action ? $action : $action = filter_input(INPUT_POST, 'action');
        
        switch($action){
            case "save_customer":
                
                $username = $_POST['username'];
                $firstName = $_POST['firstName']; 
                $lastName = $_POST['lastName'];
                $email = $_POST['email'];
                $gameID = $_POST['gameID'];
                $quantity = $_POST['qty'];

                saveCustomer($username, $firstName, $lastName, $email);

                saveOrder($username, $gameID, $quantity);
            
            case "save_game":
                
                    $title = $_POST['title'];
                    $console = $_POST['console'];
                    $price = $_POST['price'];
                    $image = $_POST['image'];

                saveGame($title, $console, $price, $image);

        }
    ?>
</body>
</html>