<?php include 'header.html' ?>

<?php
$mytable = form_data;
$host="ec2-54-228-251-254.eu-west-1.compute.amazonaws.com" ;
$dbname="d59p9596i46fc";
$user= "kpglhkjfgjqlly";
$password= "512690195e545eb8afc2567aa9992944220bacf1222154d7ff2d386c6421c300";
$con = pg_connect("host=$host dbname=$dbname user=$user password=$password")
    or die ("Could not connect to server\n");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


foreach ($_POST as $key => $value)
{
    $webdata[$key] = $value;
}

$emp_id = $webdata['emp_id'];


$result=pg_query_params($con,"SELECT * FROM form_data WHERE emp_id=$1", Array($emp_id)) or die('Insert values into table failed');

/*
pg_query_params($con,"INSERT INTO form_data(emp_id, rate1,rate2,rate3,rate4,q1,q2,q3,q4,q5,q6,q7,q8,box1,q9) VALUES ($1,$2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14,$15)",
 Array($emp_id, $rate1, $rate2, $rate3, $rate4, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8,$box1, $q9)) or die('Insert values into table failed');

*/
/*
$i=0;
while ($i<pg_num_rows($result))
{
*/
$row=pg_fetch_array($result);


    /*echo $row["emp_id"];
    $i++;
}*/


?>
<div class="bg-contact3">
<div class="container-contact3">
<div class="wrap-contact3">
        <div class="slider-section">

          <label for="rate1">Please rate your relationship with your team: <span id="status1"></span> <?php echo $row['rate1'] ?> </label><br>
          <p><input type="range" min="1" max="5" name="rate1" id="rate1" readonly value=<?php echo $row['rate1'] ?> ></p>

          <label for="rate2">Please rate your relationship with your chapter lead:<span id="status2"></span><?php echo $row['rate2'] ?></label><br>
          <p><input type="range" min="1" max="5" name="rate2" id="rate2" readonly value=<?php echo $row['rate2'] ?>></p>

          <label for="rate3">Do you have all the resources that you needed? <span id="status3"></span><?php echo $row['rate3'] ?></label><br>
          <p><input type="range" min="1" max="5" name="rate3" id="rate3" readonly value=<?php echo $row['rate3'] ?>></p>

          <label for="rate4">How would you rate the organisation? <span id="status4"></span><?php echo $row['rate4'] ?></label><br>
          <p><input type="range" min="1" max="5" name="rate4" id="rate4" readonly value=<?php echo $row['rate4'] ?>></p>
        </div>


        <div class="question-section">
          <div class="wrap-input3 validate-input">
            <label for="q1">What is it about your job that makes you want to jump out of bed in the morning?</label><br>
            <p><textarea class="input3" id="q1" cols="70" rows="10" name="q1" readonly><?php echo $row['q1'] ?></textarea></p>
            <span class="focus-input3"></span>
          </div>

          <div class="wrap-input3 validate-input">
            <label for="q2">What makes it a great day at work?</label><br>
            <p><textarea class="input3" id="q2" cols="70" rows="10" name="q2" readonly ><?php echo $row['q2'] ?></textarea></p>
            <span class="focus-input3"></span>
          </div>

          <div class="wrap-input3 validate-input">
            <label for="q3">Do you feel that your work makes a difference in the company?</label><br>
            <p><textarea class="input3" id="q3" cols="70" rows="10" name="q3" readonly ><?php echo $row['q3'] ?></textarea></p>
            <span class="focus-input3"></span>
          </div>

          <div class="wrap-input3 validate-input">
            <label for="q4">Do you feel that your coworkers think that you make a difference in the company?</label><br>
            <p><textarea class="input3" id="q4" cols="70" rows="10" name="q4" readonly ><?php echo $row['q4'] ?></textarea></p>
            <span class="focus-input3"></span>
          </div>

          <div class="wrap-input3 validate-input">
            <label for="q5">Do you feel “fully utilized” in your current role?</label><br>
            <p><textarea class="input3" id="q5" cols="70" rows="10" name="q5" readonly><?php echo $row['q5'] ?></textarea></p>
            <span class="focus-input3"></span>
          </div>

          <div class="wrap-input3 validate-input">
            <label for="q6">Are there additional things that we can do to more fully utilize your talents and interests?</label><br>
            <p><textarea class="input3" id="q6" cols="70" rows="10" name="q6" readonly ><?php echo $row['q6'] ?></textarea></p>
            <span class="focus-input3"></span>
          </div>

          <div class="wrap-input3 validate-input">
            <label for="q7">If you were the chapter lead, what would you differently?</label><br>
            <p><textarea class="input3" id="q7" cols="70" rows="10" name="q7" readonly ><?php echo $row['q7'] ?></textarea></p>
            <span class="focus-input3"></span>
          </div>

          <div class="wrap-input3 validate-input">
            <label for="q8">Where would you like to be in the organization two years from now?</label><br>
            <p><textarea class="input3" id="q8" cols="70" rows="10" name="q8" readonly ><?php echo $row['q8'] ?></textarea></p>
            <span class="focus-input3"></span>
          </div>

          <div class="wrap-input3 validate-input">
            <label for="q9">Would you like to add anything else? </label><br>
            <p><textarea class="input3" id="q9" cols="70" rows="10" name="q9" readonly ><?php echo $row['q9'] ?></textarea></p>
            <span class="focus-input3"></span>
          </div>
        </div>

        <div class="wrap-contact3-form-radio">
          <div class="contact3-form-radio m-r-42">
            <div class="radio-section">
              <label for="box1">Would you recommend Raketech to your family and friends?</label><br>
              <input class="input-radio3" id="radio1" type="radio" name="box1" readonly value=<?php echo $row['box1'] ?> checked="checked">
                <label class="label-radio3" for="radio1">
                  Yes
                </label>
              <input class="input-radio3" id="radio2" type="radio" name="box1" value="no">
              <label class="label-radio3" for="radio2">
                No
              </label>
            </div>
          </div>
        </div>
</div>
</div>
</div>

<?php
pg_close($con);?>
<script>
function converter(p2) {
  p1=Number(p2);
  switch(p1) {
  case 1:
      return "Poor";
      break;
  case 2:
      return "Not good";
      break;
  case 3:
      return "Neutral";
      break;
  case 4:
      return "Good";
      break;
  case 5:
      return "Excellent";
      break;
  default:
      return "Neutral";
  }
}
</script>
<?php include 'footer.html' ?>
