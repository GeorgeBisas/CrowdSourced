<!DOCTYPE html>
<html>
<head>
	<title>Delete all data from Database</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
        body{
            background-color: lightblue;
        }
    </style>
</head>
<body>
<div>
<?php
$link = mysqli_connect("localhost", "root", "", "crowdsourced");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt delete query execution
$sql1 = "DELETE FROM users WHERE 1";
if(mysqli_query($link, $sql1)){
    echo "Records were deleted successfully in users table.";
	echo "<br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	echo "<br>";
}
// Attempt delete query execution
$sql2 = "DELETE FROM fileup WHERE 1";
if(mysqli_query($link, $sql2)){
    echo "Records were deleted successfully in fileup table.";
	echo "<br>";
} else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($link);
	echo "<br>";
} 
// Attempt delete query execution
$sql3 = "DELETE FROM json_data WHERE 1";
if(mysqli_query($link, $sql3)){
    echo "Records were deleted successfully in json_data table.";
	echo "<br>";
} else{
    echo "ERROR: Could not able to execute $sql3. " . mysqli_error($link);
	echo "<br>";
} 
// Attempt delete query execution
$sql4 = "DELETE FROM export_data WHERE 1";
if(mysqli_query($link, $sql3)){
    echo "Records were deleted successfully in export_data table.";
	echo "<br>";
} else{
    echo "ERROR: Could not able to execute $sql4. " . mysqli_error($link);
	echo "<br>";
} 
// Close connection
mysqli_close($link);
?>
</div>
<div>
	<label>
		<a href="../../CROWDSOURCED_PROJECT/location_data/index.php">Back to menu</a>
	</label>
</div>
</body>
</html>