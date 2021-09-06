<?<?php 

$json='"name of path file"\locationhistory1.json';
$data=json_decode(file_get_contents($json));


var_dump($data);

?>