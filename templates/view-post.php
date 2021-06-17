<!Doctype html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}

table {
  width: 100%;
}
</style>
<title>Manage Posts</title>
</head>
<body>
<h1>Manage</h1>
<a href="#" class="button">New</a>
<table>
    <tr>
    <td>ID</td>
    <td>Title</td>
    <td>Image</td>
    <td>Status</td>
    <td>Action</td>
    </tr>
    <?php
    foreach($posts as $post):
    ?>
    <tr>
        <td><?php echo $post["id"];?></td>
        <td><?php echo $post["title"]; ?></td>
        <td> <img src=" <?php echo $post["images"]?> " alt=""> </td>
        <td><?php if ($post["statuss"]==1){ echo "Enabled";} else{echo "Disabled";}; ?></td>
        <td>
            <a href="">Show</a>
            <a href="">Edit</a>
            <a href="controllers/PostDeleteController.php?id=<?php echo $post["id"];?>">Delete</a>
        </td>
    </tr>
    <?php
    endforeach
    ?>
</table>
</body>
</html>