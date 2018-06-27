<?php include 'header.html' ?>
<body>
    <div class="content">
        <h2>Stay Interview</h2>
        <form method="POST" action="sqlite-form-database.php" name="form1" >
            
            <p><label for="emp_id">Name:</label>
            <input type="text" name="emp_id" id="emp_id" placeholder="Insert Your ID Here" required></p>
            
            <p><label for="rate1">Please rate your relationship with your team:</label>
            <input type="range" min="1" max="5" name="rate1" id="rate1" required></p>
                      
            <p><label for="rate2">Please rate your relationship with your chapter lead:</label>
            <input type="range" min="1" max="5" name="rate1" id="rate2" required></p>
            
            <p><label for="rate3">Do you have all the resources that you needed?</label>
            <input type="range" min="1" max="5" name="rate1" id="rate3" required></p>
            
            <p><label for="rate4">How would you rate the organisation? </label>
            <input type="range" min="1" max="5" name="rate1" id="rate4" required></p>
            
            <input type="submit" id="submit" name="submit" value="Submit Application">
        </form>
    </div>
</body>
<?php include 'footer.html' ?>