<?php include 'header.html' ?>
<body>
  <div class="bg-contact3">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form">
					<span class="contact3-form-title">
            Stay Interview
          </span>

        <form method="POST" action="sqlite-form-database.php" name="form1" >
          <div class="wrap-input3 validate-input">
            <input class="input3" type="text" name="emp_id" id="emp_id" placeholder="Insert Your ID Here" required></p>
          </div>

            <div class="slider-section">

              <label for="rate1">Please rate your relationship with your team:</label><br>
              <input id="ex1" data-slider-id="ex1Slider" type="range" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14" />

              <label for="rate2">Please rate your relationship with your chapter lead:</label><br>
              <p><input type="range" min="1" max="5" name="rate1" id="rate2" required></p>

              <label for="rate3">Do you have all the resources that you needed?</label><br>
              <p><input type="range" min="1" max="5" name="rate1" id="rate3" required></p>

              <label for="rate4">How would you rate the organisation? </label><br>
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
            <div class="radio-section">
              <label for="box1">Would you recommend Raketech to your family and friends?</label><br>
              <input type="radio" name="box1" value=1>Yes
              <input type="radio" name="box1" value=2>No
            </div>

				   <div class="container-contact3-form-btn">
             <button class="contact3-form-btn" id="submit" name="submit" value="SUBMIT">Submit</button>
           </div>

        </form>
    </div>
</body>

<script>
  .slider({
      ticks: [1, 2, 3, 4, 5],
      ticks_labels: ['Bad', 'Not Good', 'Neutral', 'Good', 'Very Good'],
      ticks_snap_bounds: 1
  });
</script>
<?php include 'footer.html' ?>
