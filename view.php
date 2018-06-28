<?php
define('ISITSAFETORUN', TRUE);
include 'header.html';
include 'database.php';

//$sql="SELECT id, emp_id, rate1, rate2, rate3, rate4, q1, q2, q3, q4, q5, q6, q7, q8, box1, q9 FROM form_data";
$sql="SELECT * FROM form_data";
$result=pg_query($con, $sql) or die('Query failed');


$i=0;
  while ($i<pg_num_rows($result))
  {
      $row=pg_fetch_array($result);
      echo "<p>$row["emp_id"]</p>";
      $i++;
  }
pg_close($con);

?>
