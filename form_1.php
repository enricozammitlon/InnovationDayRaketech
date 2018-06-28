<?php include 'header.html' ?>
<body>
  <div class="bg-contact3">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form">
					<span class="contact3-form-title">
            Stay Interview
          </span>

        <form method="post" action="sqlite-form-database.php" name="form1" >
          <div class="wrap-input3 validate-input">
            <input class="input3" type="text" name="emp_id"></p>
          </div>
<!--
            <div class="slider-section">

              <label for="rate1">Please rate your relationship with your team: <span id="status1"></span></p></label><br>
              <p><input type="range" min="1" max="5" name="rate1" id="rate1" required></p>

              <label for="rate2">Please rate your relationship with your chapter lead: <span id="status2"></span></label><br>
              <p><input type="range" min="1" max="5" name="rate1" id="rate2" required></p>

              <label for="rate3">Do you have all the resources that you needed? <span id="status3"></span></label><br>
              <p><input type="range" min="1" max="5" name="rate1" id="rate3" required></p>

              <label for="rate4">How would you rate the organisation? <span id="status4"></span></label><br>
              <p><input type="range" min="1" max="5" name="rate1" id="rate4" required></p>
            </div>


            <div class="question-section">
              <div class="wrap-input3 validate-input">
                <label for="q1">What is it about your job that makes you want to jump out of bed in the morning?</label><br>
                <p><textarea class="input3" id="q1" cols="70" rows="10" name="q1"></textarea></p>
                <span class="focus-input3"></span>
              </div>

              <div class="wrap-input3 validate-input">
                <label for="q2">What makes it a great day at work?</label><br>
                <p><textarea class="input3" id="q2" cols="70" rows="10" name="q2"></textarea></p>
                <span class="focus-input3"></span>
              </div>

              <div class="wrap-input3 validate-input">
                <label for="q3">Do you feel that your work makes a difference in the company?</label><br>
                <p><textarea class="input3" id="q3" cols="70" rows="10" name="q3"></textarea></p>
                <span class="focus-input3"></span>
              </div>

              <div class="wrap-input3 validate-input">
                <label for="q4">Do you feel that your coworkers think that you make a difference in the company?</label><br>
                <p><textarea class="input3" id="q4" cols="70" rows="10" name="q4"></textarea></p>
                <span class="focus-input3"></span>
              </div>

              <div class="wrap-input3 validate-input">
                <label for="q5">Do you feel “fully utilized” in your current role?</label><br>
                <p><textarea class="input3" id="q5" cols="70" rows="10" name="q5"></textarea></p>
                <span class="focus-input3"></span>
              </div>

              <div class="wrap-input3 validate-input">
                <label for="q6">Are there additional things that we can do to more fully utilize your talents and interests?</label><br>
                <p><textarea class="input3" id="q6" cols="70" rows="10" name="q6"></textarea></p>
                <span class="focus-input3"></span>
              </div>

              <div class="wrap-input3 validate-input">
                <label for="q7">If you were the chapter lead, what would you differently?</label><br>
                <p><textarea class="input3" id="q7" cols="70" rows="10" name="q7"></textarea></p>
                <span class="focus-input3"></span>
              </div>

              <div class="wrap-input3 validate-input">
                <label for="q8">Where would you like to be in the organization two years from now?</label><br>
                <p><textarea class="input3" id="q8" cols="70" rows="10" name="q8"></textarea></p>
                <span class="focus-input3"></span>
              </div>

              <div class="wrap-input3 validate-input">
                <label for="q9">Would you like to add anything else? </label><br>
                <p><textarea class="input3" id="q9" cols="70" rows="10" name="q9"></textarea></p>
                <span class="focus-input3"></span>
              </div>

            </div>
            <div class="wrap-contact3-form-radio">
  						<div class="contact3-form-radio m-r-42">
                <div class="radio-section">
                  <label for="box1">Would you recommend Raketech to your family and friends?</label><br>
                  <input class="input-radio3" id="radio1" type="radio" name="box1" value="yes" checked="checked">
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

<button class="contact3-form-btn" id="submit" type="submit" name="submit2" value="submit">Submit2</button>
-->
				   <div class="container-contact3-form-btn">
             <input type="submit">
           </div>
           <?php //include "Website/db_files/sqlite-form-database.php"; ?>
        </form>
    </div>
</body>

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

var slider1 = document.getElementById("rate1");
var output1 = document.getElementById("status1");
output1.innerHTML = converter(slider1.value);

slider1.oninput = function() {
  output1.innerHTML = converter(this.value);
}

var slider2 = document.getElementById("rate2");
var output2 = document.getElementById("status2");
output2.innerHTML = converter(slider2.value);

slider2.oninput = function() {
  output2.innerHTML = converter(this.value);
}
var slider3 = document.getElementById("rate3");
var output3 = document.getElementById("status3");
output3.innerHTML = converter(slider3.value);

slider3.oninput = function() {
  output3.innerHTML = converter(this.value);
}

var slider4 = document.getElementById("rate4");
var output4 = document.getElementById("status4");
output4.innerHTML = converter(slider4.value);

slider4.oninput = function() {
  output4.innerHTML = converter(this.value);
}

</script>

<?php include 'footer.html' ?>
