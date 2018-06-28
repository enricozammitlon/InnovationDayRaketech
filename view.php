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
        <span class="contact3-form-title">Leave Interview Average Rating Data</span>
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
    <div class="wrap-cotnact3">
        <form class="contact3-form validate-form" method="post" action="website/db_files/view-data.php" name="view1">

            <label for="emp_id" class="contact3-form-title">Input Employee ID Here:</label>
            <div class="container-contact3-form-btn">
                 <button class="contact3-form-btn" id="submit" type="submit" name="submit" value="Submit">View Submitted Form</button>
            </div>

        </form>
    </div>
    </div>
    </div>
    
</body>
 <?php include 'footer.php' ?>
