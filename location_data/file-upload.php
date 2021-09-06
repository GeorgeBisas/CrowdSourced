<!DOCTYPE html>
<html>

<head>
    <title>File Upload</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #45a049;
        }

        div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        }
        button {
        width: 100%;
        background-color: #445890;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;    
        }
</style>
</head>

<body>
    <div style="text-align:center">
        <form method="post" enctype="multipart/form-data">
            <label>Title</label>
            <input type="text" name="title" placeholder="Your title of your json file..">
            <input type="text" name="username" placeholder="Your username is..">
            <label>File Upload to DB</label>
            <input type="File" name="file">
            <input type="submit" name="submit">
            <a href="index.php" type="button">Go Back</a>
        </form>
    </div>

<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'crowdsourced');
 
if (isset($_POST["submit"]))
 {
    #retrieve file title
    $title = $_POST["title"];
    $username = $_POST["username"];
     
    #file name with a random number so that similar dont get replaced
    $jsonname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
    #upload directory path
    $uploads_dir = '../saved_jsons_files';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$jsonname);
 
    #sql query to insert into database
    $sql = "INSERT INTO fileup (username, title, jsonfile) VALUES ('$username','$title','$jsonname')";
 
    if(mysqli_query($db,$sql)){
 
    echo "File Successfully uploaded";
    }
    else{
        echo "Error";
    }
}
 
?>

</body>

</html>