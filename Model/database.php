<?php
    $dsn = "mysql:host=localhost;dbname=videogame_app";
    $username = "root";
    $password = "";

    try{
        $db = new PDO($dsn, $username, $password);
    }
    catch(PDOException $e){
        echo("not connected");
    }


    // // CREATING A HASHED PASSWORD

    // $dsn = "mysql:host=localhost;dbname=my_guitar_shop2";
    // $username = "root";
    // $password = "";

    // try{
    //     $db = new PDO($dsn, $username, $password);
    // }
    // catch(PDOException $e){
    //     echo("not connected");
    // }


    // $password = 'cat';
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    // $sql = "INSERT INTO `customers` (`customerID`, `emailAddress`, `password`, `firstName`, `lastName`, `shipAddressID`, `billingAddressID`) VALUES ($hashedPassword, 'grangher@hogwarts.edu', 'Hermione', 'Granger', 1, 2)";
    // echo($sql);
    // $qry = $db->query($sql);
    // $customerID = $db->lastInsertID(); 
    // $echo($customerID);
    // $sqlOrder = "insert into orders (customerID, orderDate) Values ($customerID, NOW())"; // NOW is timestamp on the date/time
    // $qry = $db->query($sqlOrder); // throws an error since some fields in the table cannot be null, change default value of fields in structure of tables 

    // $enteredPassword = "Cats";
    // if(password_verify($enteredPassword, $hashedPassword)){
    //     echo 'Password is valid!';
    // } else {
    //     echo 'Invalid password.';
    // }
?>