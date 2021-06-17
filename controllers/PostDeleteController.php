<?php
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
?>