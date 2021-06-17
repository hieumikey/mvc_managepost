<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "litephpdb";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    /* Check connection*/
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "CREATE TABLE Post
    (
    id int NOT NULL AUTO_INCREMENT,
    title varchar(50),
    descriptions text,
    images varchar(100),
    statuss int,
    create_at DATETIME,
    update_at DATETIME,
    PRIMARY KEY (ID)
    )"; 

    // if ($conn->query($sql) === TRUE) {
    //     echo "Table post created successfully";
    //     echo "<br>";
    // }
    // else {
    //     echo "Error creating table: " . $conn->error;
    //     echo "<br>";
    // }
    $conn->close();
?>