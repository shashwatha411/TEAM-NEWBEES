<?php
/* Attempt MySQL server connection.*/
$conn = mysqli_connect("localhost", "root", "", "cap");

// Check connection
if($conn === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['submit']))
 {
  // Escape user inputs for security
  $college_id =  $_POST['college_id'];
  $attr = $_POST['attr'];
  $new_val = $_POST['new_val'];
          
 // Attempt insert query execution
$sql = "UPDATE `college` SET $attr = '$new_val' WHERE C_ID = '$college_id'";
if( mysqli_query($conn, $sql))
{
  echo '<script type="text/javascript"> alert("Record successfully modified") </script>';
} 
else{
  echo '<script type="text/javascript"> alert("Could not modify! Try again!") </script>'; 
}
// Close connection
mysqli_close($conn);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="college.css">
    <title>College Modify</title>
    <link rel = "icon" href = "logo.png" type = "image/x-icon">
  </head>
  <body>
  <h1>
      <div class="form-row">
        <div class="form-group col-md-2">
          <a  href="adminhome.html"><img src="logo.png" width="50" height="40" alt="logo"></a>
        </div>
        <div class="form-group col-md-8">Enter the necessary Details </div>
        <div class="form-group col-md-2">
          <a href="index.html" onclick="alert('Successfully Logged out!')"class="btn btn-lg active" style="background-color:rgb(147, 142, 199);color:rgb(255, 255, 255);font-weight:bolder;"role="button" aria-pressed="true">Log Out</a>
        </div>
      </div>
    </h1>
    <div class="myform">
    <form name="college_modify" method="POST" action="">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>College ID</label>
            <input type="text" class="form-control" id="College_id" name="college_id"placeholder="College ID" required>
          </div>
          <div class="form-group col-md-6">
            <label>Attribute to be modified</label>
            <select name="attr" class="form-control">
              <option value ="C_name">College Name</option>
              <option value ="C_rank">College Rank</option>
              <option value ="C_city">College City</option>
              <option value ="C_contact">College Contact</option>
            </select>
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label>Enter the New Value</label>
                <input type="text" class="form-control" name="new_val" placeholder="New Value" required>
              </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary mybtn">SUBMIT</button>
    </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>