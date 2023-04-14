<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>user input</title>

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="User.css">
</head>
<body>
 	<div class="container" id="student">
  <h2>Departmental Details</h2>
  <form action="./departsql.php" method="post">
    <div class="form-group">
      <label for="ename">Department-Name:</label>
      <input type="text" class="form-control" id="ename" placeholder="Department-Name
      " name="dname">
    </div>
    <div class="form-group">
      <label for="eage">Department-Location:</label>	
      <input type="text" class="form-control" id="eage" placeholder="Department-Location" name="dloc">
    </div>

    
    <button type="submit" class="btn btn-success" name="btn2">Submit</button>
  </form>
</div>
<?php

   include('sidebar.php');


  ?>
  

</body>
</html>