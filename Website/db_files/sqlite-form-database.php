<?php

define('ISITDAFETORUN', TRUE);
$mytable = form_data;
$host="ec2-54-228-251-254.eu-west-1.compute.amazonaws.com" ;
$dbname="d59p9596i46fc";
$user= "kpglhkjfgjqlly";
$password= "512690195e545eb8afc2567aa9992944220bacf1222154d7ff2d386c6421c300";
$con = pg_connect("host=$host dbname=$dbname user=$user password=$password")
    or die ("Could not connect to server\n");
echo"<p>Connected to database</p>";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['submit'])) {
    foreach ($_POST as $key => $value)
    {
        $webdata[$key] = $value;
    }

    echo "<p>Preparing form to be posted to the database...</p>";
//$columns = '"id" INTEGER PRIMARY KEY NOT NULL , "emp_id" TEXT, "rate1" INTEGER, "rate2" INTEGER, "rate3" INTEGER, "rate4" INTEGER, "q1" TEXT, "q2" TEXT, "q3" TEXT , "q4" TEXT, "q5" TEXT, "q6" TEXT, "q7" TEXT, "q8" TEXT, "box1" INTEGER, "q9" TEXT';

    $sql="INSERT INTO $mytable VALUES ($id,$emp_id, $rate1, $rate2, $rate3, $rate4, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8,$box1, $q9)";

    $id = 5;
    $emp_id = $webdata['emp_id'];
    $rate1 = $webdata['rate1'];
    $rate2 = $webdata['rate2'];
    $rate3 = $webdata['rate3'];
    $rate4 = $webdata['rate4'];
    $q1 = $webdata['q1'];
    $q2 = $webdata['q2'];
    $q3 = $webdata['q3'];
    $q4 = $webdata['q4'];
    $q5 = $webdata['q5'];
    $q6 = $webdata['q6'];
    $q7 = $webdata['q7'];
    $q8 = $webdata['q8'];
    $q9 = $webdata['q9'];
    $box1 = $webdata['box1'];

    pg_query($con, $sql) or die('Insert values into table failed');
    pg_close($con);


}else{
  ?>
    <html>
    <body>

    Welcome <?php echo "$_POST['emp_id']"; ?><br>
    </body>
    </html> "
    echo "<p>Form is empty</p>";<?php
}
?>
