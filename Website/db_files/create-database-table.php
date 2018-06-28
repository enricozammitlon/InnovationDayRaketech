<?php
define('ISITSAFETORUN', TRUE);

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'database.php';


$query = "DROP TABLE IF EXISTS form_data";
pg_query($con, $query) or die("Cannot execute query: $query\n");


echo '<p><b>Creating new SQLite database table...</b></p>';

$query = "SELECT VERSION()";
$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
$row = pg_fetch_row($rs);

echo $row[0] . "\n";

?>
<?php

$columns = '"id" SERIAL PRIMARY KEY NOT NULL , "emp_id" TEXT, "rate1" INTEGER, "rate2" INTEGER, "rate3" INTEGER, "rate4" INTEGER, "q1" TEXT, "q2" TEXT, "q3" TEXT , "q4" TEXT, "q5" TEXT, "q6" TEXT, "q7" TEXT, "q8" TEXT, "box1" TEXT, "q9" TEXT';

$sql = 'CREATE TABLE form_data (' . $columns . ')';
pg_query($con, $sql) or die('Create table failed');


echo '<p>Database table created with columns:</p>';
echo "<p>$columns</p>";
echo '<p><b>Adding example data to the database table...</b></p>';

/*
$sql="INSERT INTO form_data VALUES (1,'ABC123', 1, 1, 1, 1, 'text', 'text', 'text', 'text', 'text', 'text', 'text', 'text', 1, 'text')";
pg_query($con, $sql) or die('Add data failed');


echo '<p>Data added to table:</p>';

echo '<pre>';
$results = pg_query($con,"SELECT * FROM form_data");
$row = pg_fetch_row($rs);

echo $row[0] . "\n";

echo '</pre>';
*/
pg_close($con);

?>
