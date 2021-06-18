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
    $action = $_GET['action'];
    // $id = $_GET['id'];
    // echo $action;
    // echo "<br>";
    // echo $id;
    if($action == 'delete'){
        $id = $_GET['id'];
        $postcontroller->deletePost($id);
    }
    if($action == 'add' && $_GET['controller'] == 'admin'){
        $postcontroller->addPost();
    }

    if($action == 'addpost'){
        echo $action;
        $postcontroller->createPost();
    }

    $postcontroller->getPost(); 
?>