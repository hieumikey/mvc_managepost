<?php
    require_once('controllers/PostController.php');
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "CREATE DATABASE IF NOT EXISTS litephpdb";
    // if (mysqli_query($conn, $sql)) {
    //     echo "Database created successfully";
    //     echo "<br>";
    // }
    // else
    // {
    //     echo "Error creating database: " . mysqli_error($conn);
    //     echo "<br>";
    // }
    require_once('model/createtable.php');
    $postcontroller = new PostController();
    $postcontroller->getPost(); 
?>