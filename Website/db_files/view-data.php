<?php
define('ISITSAFETORUN', TRUE);
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
    while ($i<$numofrows)
    {
        $row=pg_fetch_array($result);
        echo $row["emp_id"];
        $i++;
    }
pg_close($con);

?>
