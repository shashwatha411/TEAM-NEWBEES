<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="college.css">
    <title>Add Cutoff</title>
    <link rel = "icon" href = "logo.png" type = "image/x-icon">
  </head>
  <body>
    <h1>Enter the necessary Details</h1>
    <div class="myform">
    <form name="cutoff_add" method="POST">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>College ID</label>
            <input type="text" class="form-control" id="College_id" name="College_id"placeholder="College ID" required>
          </div>
          <div class="form-group col-md-6">
            <label>Course Name</label>
            <select name="Course_name" class="form-control">
              <option value="Computer S">Computer Science & Engineering</option>
              <option value="Civil">Civil Engineering</option>
              <option value="Chemical">Chemical Engineering</option>
            </select>
          </div>       
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Cutoff Rank</label>
            <input type="number" class="form-control" name="Cutoff_rank" placeholder="Cutoff Rank">
          </div>
          <div class="form-group col-md-4">
            <label>CutOff Year</label>
            <select name="Cutoff_year" class="form-control">
                <option value="2020">2020</option>
                <option value="2019">2019</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label>College Fees</label>
            <input type="text" class="form-control" name="College_fees" placeholder="Fees">
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