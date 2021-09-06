<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'crowdsourced');

use JsonMachine\JsonDecoder\ExtJsonDecoder;
use JsonMachine\JsonMachine;

//JSON Machine to return objects instead of arrays with new ExtJsonDecoder() 
//as decoder which by default decodes objects - same as json_decode

//$json1=new JsonMachine::from('C:\wamp64\www\CROWDSOURCED_PROJECT\historyfiles\locationhistory1.json', '',new ExtJsonDecoder);
//$json2=new JsonMachine::from('C:\wamp64\www\CROWDSOURCED_PROJECT\historyfiles\locationhistory2.json', '',new ExtJsonDecoder);
//$json3=new JsonMachine::from('C:\wamp64\www\CROWDSOURCED_PROJECT\historyfiles\locationhistory3.json', '',new ExtJsonDecoder);
//$json4=new JsonMachine::from('C:\wamp64\www\CROWDSOURCED_PROJECT\historyfiles\locationhistory4.json', '',new ExtJsonDecoder);
//$json5=new JsonMachine::from('C:\wamp64\www\CROWDSOURCED_PROJECT\historyfiles\locationhistory5.json', '',new ExtJsonDecoder);


//$json1='C:\wamp64\www\CROWDSOURCED_PROJECT\historyfiles\locationhistory1.json';
$json2='C:\wamp64\www\CROWDSOURCED_PROJECT\historyfiles\locationhistory2.json';
//$json3='C:\wamp64\www\CROWDSOURCED_PROJECT\historyfiles\locationhistory3.json';
//$json4='C:\wamp64\www\CROWDSOURCED_PROJECT\historyfiles\locationhistory4.json';
//$json5='C:\wamp64\www\CROWDSOURCED_PROJECT\historyfiles\locationhistory5.json';

//$data1=json_decode(file_get_contents($json1));
$data2=json_decode(file_get_contents($json2));
//$data3=json_decode(file_get_contents($json3));
//$data4=json_decode(file_get_contents($json4));
//$data5=json_decode(file_get_contents($json5));

//first user
//looking for locations data and gathering the requested data for the first json file
/*foreach($json1->locations as $pm){
    if(isset($pm->locations)){
        $user='user1';
        $heading->locations->heading;
        $type->locations->activity->type;
        $confidence->locations->activity->confidence;
        $timestampMs->locations->activity->timestampMs;
        $verticalAccuracy->locations->verticalAccuracy;
        $velocity->locations->velocity;
        $accuracy->locations->accuracy;
        $longitudeE7->locations->longitudeE7;
        $latitudeE7->locations->latitudeE7;
        $altitude->locations->altitude;
        $timestampMs1->locations->timestampMs;

    }
//prevent admin mistake by escaping the json variables - escaping special characters like ', ", \n.....
$user = mysqli_real_escape_string($conn,$user);
$heading = mysqli_real_escape_string($conn, $heading);
$type = mysqli_real_escape_string($conn, $type);
$confidence = mysqli_real_escape_string($conn, $confidence);
$timestampMs = mysqli_real_escape_string($conn, $timestampMs);
$verticalAccuracy = mysqli_real_escape_string($conn, $verticalAccuracy);
$velocity = mysqli_real_escape_string($conn, $velocity);
$accuracy = mysqli_real_escape_string($conn, $accuracy);
$longitude = mysqli_real_escape_string($conn, $longitudeE7);
$latitudeE7 = mysqli_real_escape_string($conn, $latitudeE7);
$altitude = mysqli_real_escape_string($conn, $altitude);
$timestampMs1 = mysqli_real_escape_string($conn, $timestampMs1);

$sql = "INSERT INTO json_data (user, heading, type_of_activity, confidence, timestampMs, verticalAccuracy, velocity, accuracy, longitudeE7, latitudeE7, altitude, timestampMs1) 
VALUES ('$user', '$heading', '$type', '$confidence', '$timestampMs', '$verticalAccuracy', '$velocity' ,'$accuracy', '$longitudeE7', '$latitudeE7', '$altitude', '$timestampMs1')";
mysqli_query($conn, $sql);
}*/
//second user
//looking for locations data and gathering the requested data for the second json file
foreach($data2->locations as $pm){
    if(isset($pm->locations)){
        $user='user2';
        $heading->locations->heading;
        $type->locations->activity->type;
        $confidence->locations->activity->confidence;
        $timestampMs->locations->activity->timestampMs;
        $verticalAccuracy->locations->verticalAccuracy;
        $velocity->locations->velocity;
        $accuracy->locations->accuracy;
        $longitudeE7->locations->longitudeE7;
        $latitudeE7->locations->latitudeE7;
        $altitude->locations->altitude;
        $timestampMs1->locations->timestampMs;

    }
//prevent admin mistake by escaping the json variables - escaping special characters like ', ", \n.....
$user = mysqli_real_escape_string($conn,$user);
$heading = mysqli_real_escape_string($conn, $heading);
$type = mysqli_real_escape_string($conn, $type);
$confidence = mysqli_real_escape_string($conn, $confidence);
$timestampMs = mysqli_real_escape_string($conn, $timestampMs);
$verticalAccuracy = mysqli_real_escape_string($conn, $verticalAccuracy);
$velocity = mysqli_real_escape_string($conn, $velocity);
$accuracy = mysqli_real_escape_string($conn, $accuracy);
$longitude = mysqli_real_escape_string($conn, $longitudeE7);
$latitudeE7 = mysqli_real_escape_string($conn, $latitudeE7);
$altitude = mysqli_real_escape_string($conn, $altitude);
$timestampMs1 = mysqli_real_escape_string($conn, $timestampMs1);

$sql = "INSERT INTO json_data (user, heading, type_of_activity, confidence, timestampMs, verticalAccuracy, velocity, accuracy, longitudeE7, latitudeE7, altitude, timestampMs1) 
VALUES ('$user', '$heading', '$type', '$confidence', '$timestampMs', '$verticalAccuracy', '$velocity' ,'$accuracy', '$longitudeE7', '$latitudeE7', '$altitude', '$timestampMs1')";
mysqli_query($conn, $sql);
}
//third user
//looking for locations data and gathering the requested data for the third json file
/*foreach($json3->locations as $pm){
    if(isset($pm->locations)){
        $user='user3';
        $heading->locations->heading;
        $type->locations->activity->type;
        $confidence->locations->activity->confidence;
        $timestampMs->locations->activity->timestampMs;
        $verticalAccuracy->locations->verticalAccuracy;
        $velocity->locations->velocity;
        $accuracy->locations->accuracy;
        $longitudeE7->locations->longitudeE7;
        $latitudeE7->locations->latitudeE7;
        $altitude->locations->altitude;
        $timestampMs1->locations->timestampMs;

    }
//prevent admin mistake by escaping the json variables - escaping special characters like ', ", \n.....
$user = mysqli_real_escape_string($conn,$user);
$heading = mysqli_real_escape_string($conn, $heading);
$type = mysqli_real_escape_string($conn, $type);
$confidence = mysqli_real_escape_string($conn, $confidence);
$timestampMs = mysqli_real_escape_string($conn, $timestampMs);
$verticalAccuracy = mysqli_real_escape_string($conn, $verticalAccuracy);
$velocity = mysqli_real_escape_string($conn, $velocity);
$accuracy = mysqli_real_escape_string($conn, $accuracy);
$longitude = mysqli_real_escape_string($conn, $longitudeE7);
$latitudeE7 = mysqli_real_escape_string($conn, $latitudeE7);
$altitude = mysqli_real_escape_string($conn, $altitude);
$timestampMs1 = mysqli_real_escape_string($conn, $timestampMs1);

$sql = "INSERT INTO json_data (user, heading, type_of_activity, confidence, timestampMs, verticalAccuracy, velocity, accuracy, longitudeE7, latitudeE7, altitude, timestampMs1) 
VALUES ('$user', '$heading', '$type', '$confidence', '$timestampMs', '$verticalAccuracy', '$velocity' ,'$accuracy', '$longitudeE7', '$latitudeE7', '$altitude', '$timestampMs1')";
mysqli_query($conn, $sql);
}
//fourth user
//looking for locations data and gathering the requested data for the fourth json file
foreach($json4->locations as $pm){
    if(isset($pm->locations)){
        $user='user4';
        $heading->locations->heading;
        $type->locations->activity->type;
        $confidence->locations->activity->confidence;
        $timestampMs->locations->activity->timestampMs;
        $verticalAccuracy->locations->verticalAccuracy;
        $velocity->locations->velocity;
        $accuracy->locations->accuracy;
        $longitudeE7->locations->longitudeE7;
        $latitudeE7->locations->latitudeE7;
        $altitude->locations->altitude;
        $timestampMs1->locations->timestampMs;

    }
//prevent admin mistake by escaping the json variables - escaping special characters like ', ", \n.....
$user = mysqli_real_escape_string($conn,$user);
$heading = mysqli_real_escape_string($conn, $heading);
$type = mysqli_real_escape_string($conn, $type);
$confidence = mysqli_real_escape_string($conn, $confidence);
$timestampMs = mysqli_real_escape_string($conn, $timestampMs);
$verticalAccuracy = mysqli_real_escape_string($conn, $verticalAccuracy);
$velocity = mysqli_real_escape_string($conn, $velocity);
$accuracy = mysqli_real_escape_string($conn, $accuracy);
$longitude = mysqli_real_escape_string($conn, $longitudeE7);
$latitudeE7 = mysqli_real_escape_string($conn, $latitudeE7);
$altitude = mysqli_real_escape_string($conn, $altitude);
$timestampMs1 = mysqli_real_escape_string($conn, $timestampMs1);

$sql = "INSERT INTO json_data (user, heading, type_of_activity, confidence, timestampMs, verticalAccuracy, velocity, accuracy, longitudeE7, latitudeE7, altitude, timestampMs1) 
VALUES ('$user', '$heading', '$type', '$confidence', '$timestampMs', '$verticalAccuracy', '$velocity' ,'$accuracy', '$longitudeE7', '$latitudeE7', '$altitude', '$timestampMs1')";
mysqli_query($conn, $sql);
}
//fifth user
//looking for locations data and gathering the requested data for the fifth json file
foreach($json5->locations as $pm){
    if(isset($pm->locations)){
        $user='user5';
        $heading->locations->heading;
        $type->locations->activity->type;
        $confidence->locations->activity->confidence;
        $timestampMs->locations->activity->timestampMs;
        $verticalAccuracy->locations->verticalAccuracy;
        $velocity->locations->velocity;
        $accuracy->locations->accuracy;
        $longitudeE7->locations->longitudeE7;
        $latitudeE7->locations->latitudeE7;
        $altitude->locations->altitude;
        $timestampMs1->locations->timestampMs;

    }

//prevent admin mistake by escaping the json variables - escaping special characters like ', ", \n.....
$user = mysqli_real_escape_string($conn,$user);
$heading = mysqli_real_escape_string($conn, $heading);
$type = mysqli_real_escape_string($conn, $type);
$confidence = mysqli_real_escape_string($conn, $confidence);
$timestampMs = mysqli_real_escape_string($conn, $timestampMs);
$verticalAccuracy = mysqli_real_escape_string($conn, $verticalAccuracy);
$velocity = mysqli_real_escape_string($conn, $velocity);
$accuracy = mysqli_real_escape_string($conn, $accuracy);
$longitude = mysqli_real_escape_string($conn, $longitudeE7);
$latitudeE7 = mysqli_real_escape_string($conn, $latitudeE7);
$altitude = mysqli_real_escape_string($conn, $altitude);
$timestampMs1 = mysqli_real_escape_string($conn, $timestampMs1);

$sql = "INSERT INTO json_data (user, heading, type_of_activity, confidence, timestampMs, verticalAccuracy, velocity, accuracy, longitudeE7, latitudeE7, altitude, timestampMs1) 
VALUES ('$user', '$heading', '$type', '$confidence', '$timestampMs', '$verticalAccuracy', '$velocity' ,'$accuracy', '$longitudeE7', '$latitudeE7', '$altitude', '$timestampMs1')";
mysqli_query($conn, $sql);
}
*/
?>