<?php
define('ISITSAFETORUN', TRUE);

error_reporting(E_ALL);
ini_set('display_errors', 1);

$databasename ='formcreator.sqlite';
$db = new SQLite3($databasename);

echo '<p><b>Removing any existing SQLite form database table...</b></p>';

$sql = 'DROP TABLE IF EXISTS "form_data"';
$db->exec($sql) or die('Drop table failed');

echo '<p>Database table removed.</p>'; 
echo '<p><b>Creating new SQLite database table...</b></p>';

$columns = '"id" INTEGER PRIMARY KEY NOT NULL , "emp_id" TEXT, "rate1" INTEGER, "rate2" INTEGER, "rate3" INTEGER, "rate4" INTEGER, "q1" TEXT, "q2" TEXT, "q3" TEXT , "q4" TEXT, "q5" TEXT, "q6" TEXT, "q7" TEXT, "q8" TEXT, "box1" INTEGER, "q9" TEXT';

$sql = 'CREATE TABLE "form_database" (' . $columns . ')';
$db->exec($sql) or die('Create table failed');

echo '<p>Database table created with columns:</p>'; 
echo "<p>$columns</p>";
echo '<p><b>Adding example data to the database table...</b></p>';

$sql="INSERT INTO walk VALUES (1,'ABC123', 1, 1, 1, 1, 'text', 'text', 'text', 'text', 'text', 'text', 'text', 'text', 1, 'text')";
$db->exec($sql) or die('Add data failed');


echo '<p>Data added to table:</p>'; 

echo '<pre>';
$results = $db->query("SELECT * FROM form_data");
while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
    var_dump($row);
}
echo '</pre>';

?>
