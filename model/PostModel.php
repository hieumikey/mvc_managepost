<?php
class PostModel
{
  public function getPost($page){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "litephpdb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $result = mysqli_query($conn,"SELECT * FROM post");
    $number_of_results = mysqli_num_rows($result);
    $results_per_page = 2;
    $number_of_pages = ceil($number_of_results/$results_per_page);
    $this_page_first_result = ($page-1)*$results_per_page;
    $sql='SELECT * FROM post LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
    $result = mysqli_query($conn, $sql);
    $posts = array();
    while($row = mysqli_fetch_assoc($result)){
        $posts[] = $row;
    }
    $prev = $page - 1;
    $next = $page + 1;
    echo '<nav aria-label="Page navigation example">';
    echo '<ul class="pagination">';
    echo '<li class="page-item">';
    if ($prev > 0){
        echo '<a class="page-link" href="?action&controller&page='. $prev . ' " aria-label="Previous">';
    }else{
        echo '<a class="page-link" href="#" aria-label="Previous">';
    }
    echo '<span aria-hidden="true">&laquo;</span>';
    echo '<span class="sr-only">Previous</span>';
    echo '</a>';
    echo '</li>';
    for ($page=1;$page<=$number_of_pages;$page++) {
        echo '<li class="page-item"><a class="page-link" href="?action&controller&page=' . $page . '">' . $page . '</a> </li>';
    }
    echo '<li class="page-item">';
    if ($next <= $number_of_pages){
        echo '<a class="page-link" href="?action&controller&page='. $next . ' " aria-label="Next">';
    }else{
        echo '<a class="page-link" href="#" aria-label="Next">';
    }
    echo '<span aria-hidden="true">&laquo;</span>';
    echo '<span class="sr-only">Next</span>';
    echo '</a>';
    echo '</li>';
    echo '</ul>';
    echo '</nav>';
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

  public function savePost($post, $id){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "litephpdb";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql = "UPDATE post SET title = '".$post['title']."', images='".$post['images']."', 
    statuss='".$post['statuss']."', create_at='".$post['create_at']."', update_at='".$post['update_at']."', descriptions='".$post['descriptions']."' WHERE id = '".$id."'";
    if (mysqli_query($conn, $sql)) {
        echo "Update successfully !";
    } else {
        echo "Error: " . $sql . " " . mysqli_error($conn);
    }
    mysqli_close($conn);
  }

}
?>