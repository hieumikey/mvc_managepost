<?php
class PostModel
{
  public function getPost(){
    $servername = "localhost";
    $username = "root";
    $password = "";/* Put your password */
    $dbname = "litephpdb";/* Put your database name */
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $result = mysqli_query($conn,"SELECT * FROM post");
    $posts = array();
    while($row = mysqli_fetch_assoc($result)){
        $posts[] = $row;
    }
    return $posts;
  }
}
?>