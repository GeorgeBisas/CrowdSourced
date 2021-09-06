<!DOCTYPE html>
<html>
<head>
	<title>Delete all data from Database</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.button {
			background-color: navy;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}
	</style>

</head>

<body>
	<div class="header">
		<h2>Delete all data from Database</h2>
		<a href="../location_data/index-admin.html"><big>Go Back</big></a>
	</div>

	<form action="deleteData.php" method="post"  onSubmit="return confirm('Are you sure to delete?')">
		<button type="submit" class="btn" name="delete">Delete ALL</button>
	</form>
	
		
</body>

</html>
 
 