<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
<a href="?action=add&controller=admin" class="btn btn-primary"  role="button">New</a>
<!-- <?php

?> -->
<table class="table table-bordered">
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
            <a href="?action=show&id=<?php echo $post["id"];?>">Show</a>
            <a href="?action=edit&id=<?php echo $post["id"];?>">Edit</a>
            <a href="?action=delete&id=<?php echo $post["id"];?>">Delete</a>
        </td>
    </tr>
    <?php
    endforeach
    ?>
</table>
</body>
</html>