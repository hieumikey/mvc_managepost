<!DOCTYPE html>
<html>
  <body>
    <?php
    foreach($post as $p):
    ?>
	<form method="POST" action="?action=editpost&id=<?php echo $p['id'] ?>">
		Title:<br>
		<input type="text" name="title" value="<?php echo $p['title']?>">
		<br>
		Description:<br>
		<input type="text" name="descriptions" value="<?php echo $p['descriptions']?>">
		<br>
		Image:<br>
		<img src=" <?php echo $p["images"]?> " alt="">
        <input type="text" name="images">
		<br>
		Status:<br>
        <select id="cars" name="statuss">
            <option value="1">Enabled</option>
            <option value="0">Disabled</option>
        </select><br>
        Create_at:<br>
		<input type="date" name="create_at" value="<?php echo $p['create_at']?>"><br>
        Update_at:<br>
		<input type="date" name="update_at" value="<?php echo $p['update_at']?>">
		<br><br>
		<input type="submit" name="save" value="Save">
    <?php
    endforeach
    ?>
	</form>
  </body>
</html>