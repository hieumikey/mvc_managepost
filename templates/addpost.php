<!DOCTYPE html>
<html>
  <body>
	<form method="POST" action="?action=addpost">
		Title:<br>
		<input type="text" name="title">
		<br>
		Description:<br>
		<input type="text" name="descriptions">
		<br>
		Image:<br>
		<input type="text" name="images">
		<br>
		Status:<br>
        <select id="cars" name="statuss">
            <option value="1">Enabled</option>
            <option value="0">Disabled</option>
        </select><br>
        Create_at:<br>
		<input type="date" name="create_at">
		<br><br>
		<input type="submit" name="save" value="Add">
	</form>
  </body>
</html>