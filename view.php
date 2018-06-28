<?php
define('ISITSAFETORUN', TRUE);
include 'header.html';
$host="ec2-54-228-251-254.eu-west-1.compute.amazonaws.com" ;
$dbname="d59p9596i46fc";
$user= "kpglhkjfgjqlly";
$password= "512690195e545eb8afc2567aa9992944220bacf1222154d7ff2d386c6421c300";
$con = pg_connect("host=$host dbname=$dbname user=$user password=$password")
    or die ("Could not connect to server\n");

//$sql="SELECT id, emp_id, rate1, rate2, rate3, rate4, q1, q2, q3, q4, q5, q6, q7, q8, box1, q9 FROM form_data";
$sql="SELECT * FROM form_data";
$result=pg_query($con, $sql) or die('Query failed');


$i=0;
  while ($i<pg_num_rows($result))
  {
      $row=pg_fetch_array($result);
      echo $row["emp_id"];
      $i++;
  }
pg_close($con);

?>

   <body>
      <div id="wrapper">
         <div class="chart">
            <h3>Population of endangered species from 2012 to 2016</h3>
            <table id="data-table" border="1" cellpadding="10" cellspacing="0"
            summary="The effects of the zombie outbreak on the populations
            of endangered species from 2012 to 2016">
               <caption>Population in thousands</caption>
               <thead>
                  <tr>
                     <td>&nbsp;</td>
                     <th scope="col">2012</th>
                     <th scope="col">2013</th>
                     <th scope="col">2014</th>
                     <th scope="col">2015</th>
                     <th scope="col">2016</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <th scope="row">Carbon Tiger</th>
                     <td>4080</td>
                     <td>6080</td>
                     <td>6240</td>
                     <td>3520</td>
                     <td>2240</td>
                  </tr>
                  <tr>
                     <th scope="row">Blue Monkey</th>
                     <td>5680</td>
                     <td>6880</td>
                     <td>6240</td>
                     <td>5120</td>
                     <td>2640</td>
                  </tr>
                  <tr>
                     <th scope="row">Tanned Zombie</th>
                     <td>1040</td>
                     <td>1760</td>
                     <td>2880</td>
                     <td>4720</td>
                     <td>7520</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </body>
 <?php include 'footer.php' ?>
