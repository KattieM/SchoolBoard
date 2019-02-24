<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School board</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<form id="student">
  <div class="form-group">
  <div class="col-sm-5">
    <label for="student_id">Student id:</label>
    <input type="text" class="form-control" id="student_id" placeholder="Student ID" name = "student_id">
    <small id="student_id_help" class="form-text text-muted">Please enter student's id.</small>
  </div>
  </div>
  <div class="form-group">
  <div class="col-sm-5">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </div>
</form>
</body>
</html>