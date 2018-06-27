<?php include 'header.html' ?>
<body>
    <div class="content">
        <h2>Stay Interview</h2>
        <form method="POST" action="sqlite-form-database.php" name="form1" >
            
            <p><label for="emp_id">Name:</label>
            <input type="text" name="emp_id" id="emp_id" placeholder="Insert Your ID Here" required></p>
            
            <label for="rate1">Please rate your relationship with your team:</label><br>
            <p><input type="range" min="1" max="5" name="rate1" id="rate1" required></p>
                      
            <label for="rate2">Please rate your relationship with your chapter lead:</label><br>
            <p><input type="range" min="1" max="5" name="rate1" id="rate2" required></p>
            
            <label for="rate3">Do you have all the resources that you needed?</label><br>
            <p><input type="range" min="1" max="5" name="rate1" id="rate3" required></p>
            
            <label for="rate4">How would you rate the organisation? </label><br>
            <p><input type="range" min="1" max="5" name="rate1" id="rate4" required></p>
            
            <label for="q1">What is it about your job that makes you want to jump out of bed in the morning?</label><br>
            <p><textarea id="q1" cols="70" rows="10" name="q1"></textarea></p>
            
            <label for="q2">What makes it a great day at work?</label><br>
            <p><textarea id="q2" cols="70" rows="10" name="q2"></textarea></p>
            
            <label for="q3">Do you feel that your work makes a difference in the company?</label><br>
            <p><textarea id="q3" cols="70" rows="10" name="q3"></textarea></p>
            
            <label for="q4">Do you feel that your coworkers think that you make a difference in the company?</label><br>
            <p><textarea id="q4" cols="70" rows="10" name="q4"></textarea></p>
            
            <label for="q5">Do you feel “fully utilized” in your current role?</label><br>
            <p><textarea id="q5" cols="70" rows="10" name="q5"></textarea></p>
            
            <label for="q6">Are there additional things that we can do to more fully utilize your talents and interests?</label><br>
            <p><textarea id="q6" cols="70" rows="10" name="q6"></textarea></p>
            
            <label for="q7">If you were the chapter lead, what would you differently?</label><br>
            <p><textarea id="q7" cols="70" rows="10" name="q7"></textarea></p>
            
            <label for="q8">Where would you like to be in the organization two years from now?</label><br>
            <p><textarea id="q8" cols="70" rows="10" name="q8"></textarea></p>
            
            <input type="submit" id="submit" name="submit" value="Submit Application">
        </form>
    </div>
</body>
<?php include 'footer.html' ?>