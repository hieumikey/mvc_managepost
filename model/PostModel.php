<?php
class PostModel
{
  public function getPost(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "litephpdb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $result = mysqli_query($conn,"SELECT * FROM post");
    $posts = array();
    while($row = mysqli_fetch_assoc($result)){
        $posts[] = $row;
    }
    return $posts;
  }

  public function deletePost($id){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "litephpdb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "DELETE FROM post WHERE id='" . $_GET["id"] . "'";
    if (mysqli_query($conn, $sql)) {
        echo "Post deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
  }

  public function addPost($post){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "litephpdb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "INSERT INTO post (title,images,statuss,create_at, descriptions)
    VALUES ('".$post['title']."' ,'".$post['images']."','".$post['statuss']."','".$post['create_at']."', '".$post['descriptions']."')";
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";
    } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    mysqli_close($conn);
  }

  public function showPost($id){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "litephpdb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $result = mysqli_query($conn,"SELECT * FROM post where id = $id");
    $post = array();
    while($row = mysqli_fetch_assoc($result)){
        $post[] = $row;
    }
    // print_r($post);
    return $post;
  }
}
?>