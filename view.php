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
        <div id="graphDiv1"></div>
        <br />
        <div id="graphDiv2"></div>
        <!--[if IE]><script src="excanvas.js"></script><![endif]-->
        <script src="html5-canvas-bar-graph.js"></script>
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

            var ctx2 = createCanvas("graphDiv2");

            var graph2 = new BarGraph(ctx2);
            graph2.margin = 2;
            graph2.width = 450;
            graph2.height = 150;
            graph2.xAxisLabelArr = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M"];
            setInterval(function () {
                graph2.update([Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20, Math.random() * 20]);
            }, 1500);

        }());</script>
    </body>

 <?php include 'footer.php' ?>
