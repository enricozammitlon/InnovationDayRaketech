<?php
define('ISITSAFETORUN', TRUE);

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host="ec2-54-228-251-254.eu-west-1.compute.amazonaws.com" ;
$dbname="d59p9596i46fc";
$user= "kpglhkjfgjqlly";
$password= "512690195e545eb8afc2567aa9992944220bacf1222154d7ff2d386c6421c300";


echo '<p><b>Creating new SQLite database table...</b></p>';

$con = pg_connect("host=$host dbname=$dbname user=$user password=$password")
    or die ("Could not connect to server\n");


$query = "SELECT VERSION()";
$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
$row = pg_fetch_row($rs);

echo $row[0] . "\n";

?>
<?php

$columns = '"id" INTEGER PRIMARY KEY NOT NULL , "emp_id" TEXT, "rate1" INTEGER, "rate2" INTEGER, "rate3" INTEGER, "rate4" INTEGER, "q1" TEXT, "q2" TEXT, "q3" TEXT , "q4" TEXT, "q5" TEXT, "q6" TEXT, "q7" TEXT, "q8" TEXT, "box1" INTEGER, "q9" TEXT';

$sql = 'CREATE TABLE "form_data" (' . $columns . ')';
pg_query($con, $sql) or die('Create table failed');


echo '<p>Database table created with columns:</p>';
echo "<p>$columns</p>";
echo '<p><b>Adding example data to the database table...</b></p>';

$sql="INSERT INTO 'form_data' VALUES (1,'ABC123', 1, 1, 1, 1, 'text', 'text', 'text', 'text', 'text', 'text', 'text', 'text', 1, 'text')";
pg_query($con, $sql) or die('Add data failed');


echo '<p>Data added to table:</p>';

echo '<pre>';
$results = pg_query($con,"SELECT * FROM form_data");
$row = pg_fetch_row($rs);

echo $row[0] . "\n";

echo '</pre>';
pg_close($con);

?>
