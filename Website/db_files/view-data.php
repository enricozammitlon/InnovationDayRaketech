<?php
define('ISITSAFETORUN', TRUE);
<<<<<<< HEAD
$host="ec2-54-228-251-254.eu-west-1.compute.amazonaws.com" ;
$dbname="d59p9596i46fc";
$user= "kpglhkjfgjqlly";
$password= "512690195e545eb8afc2567aa9992944220bacf1222154d7ff2d386c6421c300";
$con = pg_connect("host=$host dbname=$dbname user=$user password=$password")
    or die ("Could not connect to server\n");

$sql="SELECT * FROM form_data";
$result=pg_query($con, $sql) or die('Query failed');
$numofrows=0;
while (pg_fetch_row($result))
{
  $numofrows++;
}


//$sql="SELECT id, emp_id, rate1, rate2, rate3, rate4, q1, q2, q3, q4, q5, q6, q7, q8, box1, q9 FROM form_data";
$sql="SELECT * FROM form_data";
$result=pg_query($con, $sql) or die('Query failed');


$i=0;
    while ($i<pg_num_rows())
    {
        $row=pg_fetch_array($result);
        echo $row["emp_id"];
        $i++;
    }
pg_close($con);

?>
=======
$databasename = 'formcreator.sqlite';
$mytable = form_data;
$db = new SQLite3($databasename);

$sql="SELECT id, emp_id, rate1, rate2, rate3, rate4, q1, q2, q3, q4, q5, q6, q7, q8, box1, q9 FROM form_data";
    
$result = $db->query($sql) or die('Query failed'); 
    while ($row = $result->fetchArray())
    {
        echo 
        "<div class=results> 
            <p> Form ID: " . htmlspecialchars($row['id']) . "</p>" .
            "<p>emp_id: " . htmlspecialchars($row['emp_id']) . "</p>" . 
            "<p>rate1: " .  htmlspecialchars($row['rate1']) . "</p>" . 
            "<p>rate2: " .  htmlspecialchars($row['rate2']) . "</p>" . 
            "<p>rate3: " .  htmlspecialchars($row['rate3']) . "</p>" . 
            "<p>rate4: " .  htmlspecialchars($row['rate4']) . "</p>" .
            "<p>q1: " .  htmlspecialchars($row['q1']) . "km</p>" . 
            "<p>q2: " .  htmlspecialchars($row['q2']) . "</p>" .
            "<p>q3: " .  htmlspecialchars($row['q3']) . "</p>" . 
            "<p>q4: " .  htmlspecialchars($row['q4']) . "</p>" .
            "<p>q5: " .  htmlspecialchars($row['q5']) . "</p>" .
            "<p>q6: " .  htmlspecialchars($row['q6']) . "</p>" .
            "<p>q7: " .  htmlspecialchars($row['q7']) . "</p>" .
            "<p>q8: " .  htmlspecialchars($row['q8']) . "</p>" .
            "<p>box1: " .  htmlspecialchars($row['box1']) . "</p>" .
            "<p>q9: " .  htmlspecialchars($row['q9']) . "</p>" .
            "<p>--------------------------------------" . "</p>
        </div>";
        echo "</p>";
        }

?>
>>>>>>> fa5ec0fe7c8da8fa3e3204819dbddd44d835ab04
