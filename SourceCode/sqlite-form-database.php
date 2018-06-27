<?php

define('ISITDAFETORUN', TRUE);
$databasename = 'walkingclub.sqlite';
$mytable = walk;
$db = new SQLite3($databasename);
echo"<p>Connected to database</p>";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    
if(!empty($_POST)){
    foreach ($_POST as $key => $value)
    {
        $webdata[$key] = $value;
    }
    
    echo "<p>Preparing form to be posted to the database...</p>";
        
    $sql = "INSERT INTO $mytable (name, walk_date, start_time, leader, meeting_point, meeting_latlong, distance, route, notes, status) VALUES (:name,:walk_date,:start_time,:leader,:meeting_point,:meeting_latlong,:distance,:route,:notes,:status)";
    
    $stmt = $db->prepare($sql);
    $valid = true;
    
    $name = $webdata['name'];
    if (!preg_match("/^[a-zA-Z\s]*$/",$webdata['name'])) {
        $formerror['name'] = '<span>Not valid on server: Only letters and white space allowed in the name field.</span>'; 
        //echo "Only letters and white space allowed";
    $valid = FALSE ;
    }
    else{
        $stmt->bindValue(":name" ,$webdata['name'] , SQLITE3_TEXT);
    }
    
    $date = $webdata['date'];
    if (!preg_match("/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/",$webdata['date'])) {
        $formerror['date'] = '<span>Not valid on server: Only dates with format YYYY-MM-DD accepted.</span>'; 
        //echo "Only letters and white space allowed";
    $valid = FALSE ;
    }
    else{
        $stmt->bindValue(":walk_date" ,$webdata['date'] , SQLITE3_TEXT);
    }
    
    $time = $webdata['time'];
    if (!preg_match("/^(?:(?:([01]?\d|2[0-3]):)?([0-5]?\d):)?([0-5]?\d)$/",$webdata['time'])) {
        $formerror['time'] = '<span>Not valid on server: Only times with format HH:MM:SS accepted.</span>'; 
    }
    else{
        $stmt->bindValue(":start_time" ,$webdata['time'] , SQLITE3_TEXT);
    }
    
    $leader = $webdata['leader'];
    if (!preg_match("/^[a-zA-Z\s]*$/",$webdata['leader'])) {
        $formerror['leader'] = '<span>Not valid on server: Only letters and white space allowed in the leader field.</span>'; 
        //echo "Only letters and white space allowed";
    $valid = FALSE ;
    }else{
        $stmt->bindValue(":leader" ,$webdata['leader'] , SQLITE3_TEXT);
    }
    
    $stmt->bindValue(":meeting_point" ,$webdata['meetingpoint'] , SQLITE3_TEXT);
    
    $latlong = $webdata['meetingloc'];
    if (!preg_match("/^[-+]?([1-8]?\d(\.\d+)?|90(\.0+)?),\s*[-+]?(180(\.0+)?|((1[0-7]\d)|([1-9]?\d))(\.\d+)?)$/",$webdata['meetingloc'])) {
        $formerror['meetingloc'] = '<span>Not valid on server: Only coordinates with format lat, long and within an acceptable range are allowed.</span>'; 
        //echo "Only letters and white space allowed";
    $valid = FALSE ;
    }else{
        $stmt->bindValue(":meeting_latlong" ,$webdata['meetingloc'] , SQLITE3_TEXT);
    }
    
    $distance = $webdata['distance'];
    if (!preg_match("/^[a-zA-Z\s]*$/", $webdata['distance'])) {
        $formerror['distance'] = '<span>Not valid on server: Only numbers are allowed in the distance field.</span>'; 
    }
    else{
        $stmt->bindValue(":distance" ,$webdata['distance'] , SQLITE3_TEXT);
    }
    
    route = $webdata['route'];
    if (!preg_match("/^[a-zA-Z\s]*$/",$webdata['route'])) {
        $formerror['route'] = '<span>Not valid on server: Only letters and white space allowed for the route field.</span>'; 
        //echo "Only letters and white space allowed";
    $valid = FALSE ;
    }else{
        $stmt->bindValue(":route" ,$webdata['route'] , SQLITE3_TEXT);
    }
    
    notes = $webdata['notes'];
    if (!preg_match("/^[a-zA-Z\s]*$/",$webdata['notes'])) {
        $formerror['route'] = '<span>Not valid on server: Only letters and white space allowed for the notes field.</span>'; 
        //echo "Only letters and white space allowed";
    $valid = FALSE ;
    }else{
        $stmt->bindValue(":notes" ,$webdata['notes'] , SQLITE3_TEXT);
    }
    
    $stmt->bindValue(":status" ,$webdata['status'] , SQLITE3_TEXT);
    echo "<p>Posting form...</p>";
    
    if(!$valid){
        echo "Please ensure that the data is valid";
    }else{
        $result = $stmt->execute();
        echo "<p>Form posted. A member will inform you whether your walk proposal has been accepted or rejected in a few days</p>"; 
    }
    
}else{
    echo "<p>Form is empty</p>";

    $sql='select id, name, walk_date, start_time from walk';
    $result = $db->query($sql) or die('Query failed');     
    echo "<p>associative array: array uses named fields<p>";
    while ($row = $result->fetchArray())
    {
        echo "<p></p>associative array:" . htmlspecialchars($row['name'])  . " : " . htmlspecialchars($row['name'])."</p>"; //this s needed for more control over what is shown
    }   
}
echo "<p><a href='WalkingEventApplication.html'>Back to Creat a Walking Event Screen</a></p>";
?>