<!DOCTYPE html>
<html>
  <body>
    <?php
    foreach($post as $p):
    ?>
	<form method="POST" action="?action=editpost&id=<?php echo $p['id'] ?>">
        <div class="form-group">
            <label for="">Title</label>
            <input class="form-control" type="text" name="title" value="<?php echo $p['title']?>">
		</div>
        <div class="form-group">
            <label for="">Description</label>
		    <input class="form-control" type="text" name="descriptions" value="<?php echo $p['descriptions']?>">
		</div>
        <div class="form-group">
            <label for="">Image</label>
            <img src=" <?php echo $p["images"]?> " alt="">
            <input class="form-control" type="text" name="images">
		</div>
        <div class="form-group">
            <label for="">Status</label>
            <select class="form-control" id="status" name="statuss">
                <option value="1">Enabled</option>
                <option value="0">Disabled</option>
            </select>
        </div>    
        <div class="form-group">
            <label for="">Create_at</label>
            <input class="form-control" type="date" name="create_at" value="<?php echo $p['create_at']?>"><br>
        </div>
        <div class="form-group">
            <label for="">Update_at</label>
            <input class="form-control" type="date" name="update_at" value="<?php echo $p['update_at']?>">
        <div class="form-group">
		<input type="submit" name="save" value="Save">
    <?php
    endforeach
    ?>
	</form>
  </body>
</html>