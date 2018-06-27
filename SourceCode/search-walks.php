<?php
define('ISITSAFETORUN', TRUE);
$databasename = 'walkingclub.sqlite';
$mytable = walk;
$db = new SQLite3($databasename);

echo '<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="stylesheet2.css">
        <title>Walking Event Search </title>
    </head>
    <body>
        <div id="banner">
            <img id="logo" alt="Open University Logo" src="OULogo.png">
            <p id="title">OU Running Club</p>
            <p id="link"><a href="WalkingEventApplication.html">Create a Walk</a></p>
        </div>
        <div id="form">
            <main>
                <header>
                    View Walking Events
                </header>
                <form method="POST" id="form1" name="form1" >
                        <p><label for="daydif">Day Difference:</label>
                        <input type="number" name="daydif" id="daydif" placeholder="" required></p>
                        <p class="descriptor">Insert day difference of runs you wish to view here.</p>
                        <input type="submit" id="submit" name="submit" value="Search Walks">
                </form>
            </main>
        </div>
    </body>' ;

if(!empty($_POST)){
    foreach ($_POST as $key => $value)
    {
        $webdata[$key] = $value;
    }
    
    if (preg_match("/^[0-9\-\/]+$/", $webdata['daydiff'])) {
        die("Please enter a number in the appropriate field.");
    }

    $number = $webdata['daydif']; 
    $d=strtotime("+" . $number . " Days");
    $selected_date = date("Y-m-d", $d);
        
    $sql="SELECT id, name, walk_date, start_time, leader, meeting_point, meeting_latlong, distance, route, notes, status FROM walk WHERE walk_date = '$selected_date'";
    
    $result = $db->query($sql) or die('Query failed'); 
        while ($row = $result->fetchArray())
        {
            echo "<div class=results> <p> Name: " . htmlspecialchars($row['name']) . "</p>" .
                "<p>Date: " . htmlspecialchars($row['walk_date']) . "</p>" . 
                "<p>Start Time: " .  htmlspecialchars($row['start_time']) . "</p>" . 
                "<p>Leader: " .  htmlspecialchars($row['leader']) . "</p>" . 
                "<p>Meeting Point: " .  htmlspecialchars($row['meeting_point']) . "</p>" . 
                "<p>Meeting Coordinates: " .  htmlspecialchars($row['meeting_latlong']) . "</p>" .
                "<p>Walk Distance: " .  htmlspecialchars($row['distance']) . "km</p>" . 
                "<p>Route: " .  htmlspecialchars($row['route']) . "</p>" .
                "<p>Notes: " .  htmlspecialchars($row['notes']) . "</p>" . 
                "<p>Status: " .  htmlspecialchars($row['status']) . "</p>" .
                "<p>--------------------------------------" . "</p></div>";
            echo "</p>";
        }
}else{
    echo '<p class="results">Please input a value for the data to show</p>';
}
?>
