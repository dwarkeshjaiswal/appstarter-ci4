<!DOCTYPE html>
<html>
<head>
	<title>CI4</title>
	<style type="text/css">
		table 
		{
			width:500px;
		  	border-collapse: collapse;
		}

		table, th, td 
		{
		  	border: 1px solid black;
		}
	</style>
</head>
<body>
	<h3>Welcome To News Page</h3>



	<a href="<?php echo base_url('addnews'); ?>">Add News</a>
	<br>
	<table>
		<tr>
			<th align="left">Title</th>
			<th align="left">Slug</th>
			<th align="left">Body</th>
		</tr>

		<?php
			if($news)
			{
				foreach($news as $nkey => $ndata)
				{
		?>
					<tr>
						<td><?php echo $ndata["title"]; ?></td>
						<td><?php echo $ndata["slug"]; ?></td>
						<td><?php echo $ndata["body"]; ?></td>
					</tr>
		<?php			
				}
			}

		?>
	</table>
</body>
</html>