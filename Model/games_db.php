<?php

function saveCustomer($username, $firstName, $lastName, $email) // CUSTOMERS TABLE IS UPDATED 
{
    global $db;

    $sql = "INSERT INTO customers (`Username`, `Cust_fName`, `Cust_lName`, `Email`)
            VALUES ('$username', '$firstName', '$lastName', '$email')";

    $db->query($sql);
}


function saveOrder($username, $gameID, $quantity){ // Order is saved
    global $db;

    $id = "SELECT Cust_ID FROM customers WHERE Username = '$username'"; // query for grabbing customer id from customers table based on username

    $customerID = $db->query($id); // query executes on sql string
    $data = $customerID->fetch(PDO::FETCH_ASSOC); // fetches associative array of row matching the info returned by the query

    if($data){ // if row data is found, which should always be true in this case
        $id = $data['Cust_ID']; // then the customers id is retrieved from the associative array

        $sql = "INSERT INTO orders (`Cust_ID`, `Game_ID`, `Quantity`)
            VALUES ('$id', '$gameID', '$quantity')"; // sql string for adding to the orders table

        $db->query($sql); // sql statement is executed and info is saved to the orders table
    }
}

function showOrders(){
    global $db;

    $sql = "SELECT * FROM orders";
    $qry = $db->query($sql);
    $result = $qry->fetchAll();

    

    foreach($result as $order){
        // print_r($order);
        $orderInfo = "<div class='order' <h6>First Name: ${order[1]}";
        echo($orderInfo);
    }
}


function showGames(){
    global $db;
    
    $sql = "SELECT * FROM games";
    
    $qry = $db->query($sql);

    $result = $qry->fetchAll();

    foreach($result as $game){ // each game in the games array
        $gameInfo = "<div class='games'> <h6>Title: ${game[1]}</h6> <h6>Console: ${game[2]}</h6> <h6>Price: $${game[3]}</h6> <img src='images/${game[4]}'></div>"; // is displayed in its own div tag with all of it's respective information
        echo($gameInfo); // echo to site for display
    }
}



function saveGame($title, $console, $price, $image){
    global $db;

    $sql = "INSERT INTO games (`Title`, `Console`, `Price`, `Game_Image`)
            VALUES ('$title', '$console', '$price', '$image')";

    $db->query($sql);
}

function loadSelect(){ 

    global $db;

    $sql = "SELECT * FROM games";
    
    $qry = $db->query($sql);

    $result = $qry->fetchAll();

    echo("<select class='form-select' name='gameID' aria-label='Disabled select example'>"); // tag for opening the select box

    foreach($result as $game){ // loops through array once loading is complete
        $option = "<option value={$game[0]}>{$game[1]}</option>"; // stores each game in their own option tag
        echo($option); // echos it to be displayed on the site
    }

    echo("</select>"); // closes select box

}

?>