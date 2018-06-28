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

$total1 = 0;
$i=0;
  while ($i<pg_num_rows($result))
  {
      $row=pg_fetch_array($result);
      $total1 = $total1 + $row["rate1"];
      $i++;
  }
$value1 = round($total1 / pg_num_rows($result));

$total2 = 0;
$j=0;
  while ($j<pg_num_rows($result))
  {
      $row=pg_fetch_array($result);
      $total2 = $total2 + $row["rate2"];
      $j++;
  }
$value2 = round($total2 / pg_num_rows($result));

$total3 = 0;
$k=0;
  while ($k<pg_num_rows($result))
  {
      $row=pg_fetch_array($result);
      $total3 = $total3 + $row["rate3"];
      $k++;
  }
$value3 = round($total3 / pg_num_rows($result));

$total4 = 0;
$l=0;
  while ($l<pg_num_rows($result))
  {
      $row=pg_fetch_array($result);
      $total4 = $total4 + $row["rate4"];
      $l++;
  }
$value4 = round($total4 / pg_num_rows($result));

////--------------------------
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
        var number1 = <?php echo $value1 ?>;
        var number2 = <?php echo $value2 ?>;
        var number3 = <?php echo $value3 ?>;
        var number4 = <?php echo $value4 ?>;
		graph.maxValue = 5;
		graph.margin = 2;
        graph.width = 450;
		graph.height = 300;
		graph.colors = ["#7CFC00", "#7CFC00", "#7CFC00", "#7CFC00"];
		graph.xAxisLabelArr = ["Rate1", "Rate2", "Rate3", "Rate4"];
		setInterval(function () {
			graph.update([number1, number2, number3, number4]);
		}, 1000);

	}());</script>
        
    <div class="bg-contact3">
    <div class="container-contact3">
    <div class="wrap-contact3">
       <form class="contact3-form validate-form" method="post" action="view-data.php" name="input2">
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

</body>
 <?php include 'footer.php' ?>
