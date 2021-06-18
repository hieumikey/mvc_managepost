<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
<a href="?action=add&controller=admin" class="button">New</a>
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
            <a href="?action=delete&id=<?php echo $post["id"];?>">Delete</a>
        </td>
    </tr>
    <?php
    endforeach
    ?>
</table>
</body>
</html>