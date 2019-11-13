<!DOCTYPE html>
<html>
<head>
	<title>Add News Here</title>
</head>
<body>
	<h4>Add News Here</h4>
	<form method="post" action="<?php echo base_url() ?>/savenews">
		<label>Title</label>
		<input type="text" name="title" placeholder="Title">
		<br>
		<br>
		<label>Slug</label>
		<input type="text" name="slug" placeholder="Slug">
		<br>
		<br>
		<label>Body</label>
		<textarea name="body" placeholder="Body"></textarea>
		<br>
		<br>

		<button type="submit" name="submit">Submit</button>

	</form>


</body>
</html>