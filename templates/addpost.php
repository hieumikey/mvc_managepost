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
		<input type="number" name="statuss">
        <p>O: disabled || 1: enabled</p>
        Create_at:<br>
		<input type="date" name="create_at">
		<br><br>
		<input type="submit" name="save" value="Add">
	</form>
  </body>
</html>