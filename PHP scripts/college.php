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
$College_id =  $_POST['College_id'];
$College_name = $_POST['College_name'];
$College_rank =$_POST['College_rank'];
$College_city = $_POST['College_city'];
$College_contact =  $_POST['College_contact'];
 
// Attempt insert query execution
$sql = "INSERT INTO `college`(`C_ID`, `C_name`, `C_rank`, `C_city`, `C_contact`) VALUES ('$College_id','$College_name','$College_rank','$College_city','$College_contact')";
if(mysqli_query($conn, $sql))
{
  echo '<script type="text/javascript"> alert("Record successfully inserted") </script>';
} 
else
{
  echo '<script type="text/javascript"> alert("Could not insert! Try again!") </script>'; 
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
    <title>Add College</title>
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
    <form name="college_add" method="POST" action="">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>College ID</label>
            <input type="number" class="form-control" id="College_id" name="College_id" placeholder="College ID" required>
          </div>
          <div class="form-group col-md-6">
            <label >College Name</label>
            <input type="text" class="form-control" id="College_name" name="College_name" placeholder="College Name">
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-4">
            <label>College Rank</label>
            <input type="number" class="form-control" id="College_rank" name="College_rank" placeholder="College Rank">
          </div>
          <div class="form-group col-md-4">
            <label>College City</label>
            <input type="text" class="form-control" id="College_city" name="College_city" placeholder="City">
          </div>
          <div class="form-group col-md-4">
            <label>College Contact Number</label>
            <input type="number" class="form-control" id="College_contact" name="College_contact" placeholder="Contact Number">
          </div>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary mybtn" onclick="myfunc()">SUBMIT</button>
      </form>
    </div>
    <script>
        function myfunc() {
            var x = document.forms["college_add"]["College_id"].value;
            if (x == "") {
                alert("College ID must be filled out");
                return false;
            }
            }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>