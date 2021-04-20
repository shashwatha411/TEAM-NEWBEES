<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="studenthome.css">
    <title>Student Home</title>
    <link rel = "icon" href = "logo.png" type = "image/x-icon">
  </head>
  <body>
    <ul>
        <li><a  href="customerhome.html">Home</a></li>
        <li><a  href="areapreference.php">Area Preference</a></li>
        <li><a class="active"href="coursepreference.php">Course Preference</a></li>
        <li><a href="rankpreference.php">Rank Preference</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a onclick="alert('Successfully Logged out!')"href="index.html">Logout</a></li>
    </ul>
    
      <div style="margin-left:26%;padding:50px 30px;height:1000px;" class="custcontent">
        <form method="POST" action="">
            <label>Course Name</label>
            <select name="Course_name" class="form-control">
              <option value="Computer S">Computer Science & Engineering</option>
              <option value="Civil">Civil Engineering</option>
              <option value="Chemical">Chemical Engineering</option>
              <option value="ECE">Electronics & Communication Engineering</option>
            </select>
            <label>Enter Your Rank</label>
            <input type="number" class="form-control" id="rank" name="rank" placeholder="Your Rank" required>
                       
            <button type="submit" name="submit" class="btn btn-primary mybtn">SUBMIT</button>
        </form>
      <table class="table table-hover table-dark mytable">
        <thead>
          <tr>
            <th scope="col">College ID</th>
            <th scope="col">College Name</th>
            <th scope="col">College Rank</th>
            <th scope="col">Contact Number</th>
          </tr>
        </thead>
        <?php

              $conn = mysqli_connect("localhost","root","","cap");

              if($conn-> connect_error){
                die("Connection failed:". $conn-> connect_error);
              }
              if(isset($_POST['submit']))
              {
              $course = $_POST['Course_name'];
              $rank = $_POST['rank'];
              $sql = "SELECT DISTINCT a.C_ID, a.C_name,a.C_rank, a.C_contact FROM college a,cutoff b WHERE b.course='$course' AND b.cutoff > '$rank' ";
              $res = $conn->query($sql);

              if($res->num_rows >0){
                while($row = $res-> fetch_assoc()){
                  echo "<tr><td>". $row["C_ID"]."</td><td>". $row["C_name"]."</td><td>". $row["C_rank"]. "</td><td>". $row["C_contact"]. "</td><td>";
                }
                echo "</table>";
              }
              else{
                echo "error";
              }
              $conn->close();
            }
        ?>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>