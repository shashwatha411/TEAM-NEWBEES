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
$Student_id =  $_POST['Student_id'];
$Student_name = $_POST['Student_name'];
$Student_rank =$_POST['Student_rank'];
$Student_age = $_POST['Student_age'];
$Student_email =  $_POST['Student_email'];
$Student_phone = $_POST['Student_phone'];
$Student_pass = $_POST['Student_pass'];
 
// Attempt insert query execution
$sql = "INSERT INTO `student`(`S_ID`, `S_name`, `S_marks`, `S_age`, `S_email`, `S_phone`, `S_pass`) VALUES ('$Student_id','$Student_name','$Student_rank','$Student_age','$Student_email','$Student_phone','$Student_pass')";
if(mysqli_query($conn, $sql))
{
  echo '<script type="text/javascript"> alert("Record successfully inserted") </script>';
  header("location: studentlogin.html");
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
    <link rel="stylesheet" href="bootstrap-grid.min.css" >
    <link rel="stylesheet" href="bootstrap.min.css" >
    <!--OWN CSS-->
    <link rel="stylesheet" href="signup.css">
    <title>Student SignUp</title>
    <link rel = "icon" href = "logo.png" type = "image/x-icon">
  </head>
  <body >
    <div class="container adminsign-in">
          <div class="row">
              <div class="col"></div>
              <div class="col-8">
                <div class="card admin-card">
                    <div class="card-body">
                      <img src="logo.png" class="img-fluid admin-logo" alt="logo" >
                      <form class="admin-form" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="student_id">Student ID</label>
                            <input type="number" class="form-control" name="Student_id" aria-describedby="username" placeholder="Enter Student ID" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="Student_name" aria-describedby="username" placeholder="Enter Student Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="age">Age</label>
                                <input type="number" class="form-control" name="Student_age" aria-describedby="username" placeholder="Enter Age">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" name="Student_email" aria-describedby="username" placeholder="eg. xxx@gmail.com">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone Number</label>
                                <input type="number" class="form-control" name="Student_phone" aria-describedby="username" placeholder="eg. +9167......">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="rank">Your Rank</label>
                            <input type="number" class="form-control" name="Student_rank" placeholder="Rank">
                          </div>
                        <div class="form-group">
                          <label for="Password">Create Password</label>
                          <input type="text" class="form-control" name="Student_pass" placeholder="Password" required>
                        </div>
                        
                        <button type="submit" name="submit" onclick="myfunc()" class="btn btn-primary btn-block admin-button">SIGN UP</button>
                      </form>
                    </div>
                  </div>
              </div>
              <div class="col"></div>
          </div>
      </div>
      <script>
        function myfunc() {
            var x = document.forms["student_add"]["Student_id"].value;
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
    <script src="bootstrap.min.js"></script>
  </body>
</html>