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
<h1>Show Post</h1>
<table>
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Image</td>
        <td>Descriptions</td>
        <td>Status</td>
        <td>Create_at</td>
        <td>Update_at</td>
    </tr>
    <?php
    foreach($post as $p):
    ?>
    <tr>
        <td><?php echo $p["id"];?></td>
        <td><?php echo $p["title"]; ?></td>
        <td><img src=" <?php echo $p["images"]?> " alt=""></td>
        <td><?php echo $p["descriptions"]; ?></td>
        <td><?php if ($p["statuss"]==1){ echo "Enabled";} else{echo "Disabled";}; ?></td>
        <td><?php echo $p["create_at"];?></td>
        <td><?php echo $p["update_at"];?></td>
    </tr>
    <?php
    endforeach
    ?>
</table>
</body>
</html>