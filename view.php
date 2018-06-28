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
    <div class="graph-content">
        <h1>Leave Interview Average Rating Data</h1>
        <div id="graphDiv1"></div>
    </div>
	<br />
	<!--[if IE]><script src="excanvas.js"></script><![endif]-->
	<script src="resources/js/html5-canvas-bar-graph.js"></script>
	<script>(function () {
	
		function createCanvas(divName) {
			
			var div = document.getElementById(divName);
			var canvas = document.createElement('canvas');
			div.appendChild(canvas);
			if (typeof G_vmlCanvasManager != 'undefined') {
				canvas = G_vmlCanvasManager.initElement(canvas);
			}	
			var ctx = canvas.getContext("2d");
			return ctx;
		}
		
		var ctx = createCanvas("graphDiv1");
		
		var graph = new BarGraph(ctx);
		graph.maxValue = 5;
		graph.margin = 2;
        graph.width = 450;
		graph.height = 300;
		graph.colors = ["#7CFC00", "#7CFC00", "#7CFC00", "#7CFC00", "#7CFC00", "#7CFC00"];
		graph.xAxisLabelArr = ["Rate1", "Rate2", "Rate3", "Rate4", "Box1-Yes", "Box1-No"];
		setInterval(function () {
			graph.update([5, 5, 5, 5, 5, 5]);
		}, 1000);

	}());</script>
        
    <div class="bg-contact3">
    <div class="container-contact3">
    <div class="wrap-contact3">
        <form class="contact3-form validate-form" method="post" action="website/db_files/view-data.php" name="input2">           
            <span class="contact3-form-title">View Forms</span>          
            <div class="wrap-input3">
                <p><input class="input3" type="text" name="emp_id" placeholder="Insert Employee ID Here"></p>
                <span class="focus-input3"></span>
            </div>   
            <div class="container-contact3-form-btn">
                 <button class="contact3-form-btn" id="submit" type="submit" name="submit" value="Submit">View Submitted Form</button>
            </div>
            <div id="generated-form"></div>          
        </form>
    </div>
    </div>
    </div>
    
    <div class="bg-contact3">
    <div class="container-contact3">
    <div class="wrap-contact3">
        <form class="contact3-form validate-form" name="output1">
            <div class="slider-section">

              <label for="rate1">Please rate your relationship with your team: <span id="status1"></span></label><br>
              <p><input type="range" min="1" max="5" name="rate1" id="rate1" readonly></p>

              <label for="rate2">Please rate your relationship with your chapter lead: <span id="status2"></span></label><br>
              <p><input type="range" min="1" max="5" name="rate2" id="rate2" readonly></p>

              <label for="rate3">Do you have all the resources that you needed? <span id="status3"></span></label><br>
              <p><input type="range" min="1" max="5" name="rate3" id="rate3" readonly></p>

              <label for="rate4">How would you rate the organisation? <span id="status4"></span></label><br>
              <p><input type="range" min="1" max="5" name="rate4" id="rate4" readonly></p>
            </div>


            <div class="question-section">
              <div class="wrap-input3 validate-input">
                <label for="q1">What is it about your job that makes you want to jump out of bed in the morning?</label><br>
                <p><textarea class="input3" id="q1" cols="70" rows="10" name="q1" readonly></textarea></p>
                <span class="focus-input3"></span>
              </div>

              <div class="wrap-input3 validate-input">
                <label for="q2">What makes it a great day at work?</label><br>
                <p><textarea class="input3" id="q2" cols="70" rows="10" name="q2" readonly></textarea></p>
                <span class="focus-input3"></span>
              </div>

              <div class="wrap-input3 validate-input">
                <label for="q3">Do you feel that your work makes a difference in the company?</label><br>
                <p><textarea class="input3" id="q3" cols="70" rows="10" name="q3" readonly></textarea></p>
                <span class="focus-input3"></span>
              </div>

              <div class="wrap-input3 validate-input">
                <label for="q4">Do you feel that your coworkers think that you make a difference in the company?</label><br>
                <p><textarea class="input3" id="q4" cols="70" rows="10" name="q4" readonly></textarea></p>
                <span class="focus-input3"></span>
              </div>

              <div class="wrap-input3 validate-input">
                <label for="q5">Do you feel “fully utilized” in your current role?</label><br>
                <p><textarea class="input3" id="q5" cols="70" rows="10" name="q5" readonly></textarea></p>
                <span class="focus-input3"></span>
              </div>

              <div class="wrap-input3 validate-input">
                <label for="q6">Are there additional things that we can do to more fully utilize your talents and interests?</label><br>
                <p><textarea class="input3" id="q6" cols="70" rows="10" name="q6" readonly></textarea></p>
                <span class="focus-input3"></span>
              </div>

              <div class="wrap-input3 validate-input">
                <label for="q7">If you were the chapter lead, what would you differently?</label><br>
                <p><textarea class="input3" id="q7" cols="70" rows="10" name="q7" readonly></textarea></p>
                <span class="focus-input3"></span>
              </div>

              <div class="wrap-input3 validate-input">
                <label for="q8">Where would you like to be in the organization two years from now?</label><br>
                <p><textarea class="input3" id="q8" cols="70" rows="10" name="q8" readonly></textarea></p>
                <span class="focus-input3"></span>
              </div>

              <div class="wrap-input3 validate-input">
                <label for="q9">Would you like to add anything else? </label><br>
                <p><textarea class="input3" id="q9" cols="70" rows="10" name="q9" readonly></textarea></p>
                <span class="focus-input3"></span>
              </div>
            </div>

            <div class="wrap-contact3-form-radio">
  						<div class="contact3-form-radio m-r-42">
                <div class="radio-section">
                  <label for="box1">Would you recommend Raketech to your family and friends?</label><br>
                  <p><input class="input3" type="text" name="emp_id" readonly></p>
                </div>
              </div>
            </div>
        </form>   
    </div>
    </div>
    </div>
    
</body>
 <?php include 'footer.php' ?>
