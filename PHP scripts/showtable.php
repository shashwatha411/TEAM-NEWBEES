<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="showtable.css">
    <title>Show Tables</title>
    <link rel = "icon" href = "logo.png" type = "image/x-icon">
  </head>
  <body>
    <div class="list">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
        <a  href="adminhome.html"><img src="logo.png" width="50" height="40" alt="logo"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">College</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Cutoff</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Student</a>
        </li>
        <li class="nav-item">
          <a href="index.html" onclick="alert('Successfully Logged out!')"class="btn btn-md btn-primary active" style="font-weight:bolder;"role="button" aria-pressed="true">Log Out</a>
        </li>
      </ul>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <table class="table table-hover table-dark mytable">
                <thead>
                  <tr>
                    <th scope="col">College ID</th>
                    <th scope="col">College Name</th>
                    <th scope="col">College Rank</th>
                    <th scope="col">City</th>
                    <th scope="col">Contact</th>
                    
                  </tr>
                </thead>
                <?php

                      $conn = mysqli_connect("localhost","root","","cap");

                      if($conn-> connect_error){
                        die("Connection failed:". $conn-> connect_error);
                      }

                      $sql = "SELECT * FROM college";
                      $res = $conn->query($sql);

                      if($res->num_rows >0){
                        while($row = $res-> fetch_assoc()){
                          echo "<tr><td>". $row["C_ID"]."</td><td>". $row["C_name"]."</td><td>". $row["C_rank"]. "</td><td>". $row["C_city"]. "</td><td>". $row["C_contact"] ."</td><td>" ;
                        }
                        echo "</table>";
                      }
                      else{
                        echo "Error";
                      }
                      $conn->close();
                ?>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
        <table class="table table-hover table-dark mytable">
                <thead>
                  <tr>
                    <th scope="col">College ID</th>
                    <th scope="col">Course Name</th>
                    <th scope="col">Year</th>
                    <th scope="col">Cutoff</th>
                    <th scope="col">Fees</th>
                    
                  </tr>
                </thead>
                <?php

                      $conn = mysqli_connect("localhost","root","","cap");

                      if($conn-> connect_error){
                        die("Connection failed:". $conn-> connect_error);
                      }

                      $sql = "SELECT * FROM cutoff";
                      $res = $conn->query($sql);

                      if($res->num_rows >0){
                        while($row = $res-> fetch_assoc()){
                          echo "<tr><td>". $row["C_ID"]."</td><td>". $row["course"]."</td><td>". $row["year"]. "</td><td>". $row["cutoff"]. "</td><td>". $row["fees"] ."</td><td>" ;
                        }
                        echo "</table>";
                      }
                      else{
                        echo "Error";
                      }
                      $conn->close();
                ?>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <table class="table table-hover table-dark mytable">
                <thead>
                  <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Marks</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    
                  </tr>
                </thead>
                <?php

                      $conn = mysqli_connect("localhost","root","","cap");

                      if($conn-> connect_error){
                        die("Connection failed:". $conn-> connect_error);
                      }

                      $sql = "SELECT * FROM student";
                      $res = $conn->query($sql);

                      if($res->num_rows >0){
                        while($row = $res-> fetch_assoc()){
                          echo "<tr><td>". $row["S_ID"]."</td><td>". $row["S_name"]."</td><td>". $row["S_marks"]. "</td><td>". $row["S_age"]. "</td><td>". $row["S_email"] ."</td><td>" . $row["S_phone"] ."</td><td>" ;
                        }
                        echo "</table>";
                      }
                      else{
                        echo "Error";
                      }
                      $conn->close();
                ?>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>