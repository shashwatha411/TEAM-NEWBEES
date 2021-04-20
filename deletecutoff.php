<?php

// php code to Delete data from mysql database 

if (isset($_POST['submit'])) {
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $databaseName = "cap";

  // get id to delete
  $id = $_POST['College_id'];
  $course = $_POST['Course_name'];

  // connect to mysql
  $connect = mysqli_connect($hostname, $username, $password, $databaseName);

  // mysql delete query 
  $query = "DELETE FROM `cutoff` WHERE `C_ID` = $id AND `course`=$course ";

  $result = mysqli_query($connect, $query);

  if ($result) {
    echo '<script type="text/javascript"> alert("Record successfully Deleted!") </script>';
  } 
  else{
    echo '<script type="text/javascript"> alert("Could not delete! Try again!") </script>'; 
  }
  mysqli_close($connect);
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
  <title>Delete Cutoff</title>
  <link rel="icon" href="logo.png" type="image/x-icon">
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
    <form name="cutoff_del" method="POST" action="">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>College ID</label>
          <input type="text" class="form-control" id="College_id" name="College_id" placeholder="Enter the College ID of the record to be deleted" required>
        </div>
        <div class="form-group col-md-6">
          <label>Course Name</label>
          <select name="Course_name" class="form-control">
            <option value="Computer S">Computer Science & Engineering</option>
            <option value="Civil">Civil Engineering</option>
            <option value="Chemical">Chemical Engineering</option>
            <option value="ECE">Electronics & Communication Engineering</option>
          </select>
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