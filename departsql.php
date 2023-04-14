<?php
  if (isset($_POST['btn2'])) {
  	   $DepartmentName=$_POST['dname'];
  	   $Departmentlocation=$_POST['dloc'];
  	   

  	   # STEP 1 CREATE DB VERIABLES

  	   	$host="localhost";
  	   	$dbuser="root";
  	   	$dbpass="";
  	   	$dbname="student";

  	  # STEP 2 CREATE DB Connection
  	   	$con=mysqli_connect($host,$dbuser,	$dbpass,$dbname);

  	 # STEP 3 CREATE SQL Query
  	   	$SQLquery="INSERT INTO tbl_department(dname,dlocation) VALUES(' $DepartmentName', '$Departmentlocation')";

  	 #STEP 4 Execute SQLQuery

  	   	$result=mysqli_query($con,$SQLquery);

  	  # STEP 5 Display Result

  	   	$msg="$result Record Inserted.";

  	  #STEP 6 Close Connection

  	   mysqli_close($con);

  	   header('Location:depart.php?msg='.$msg);

  }else{

  	  header('Location:./depart.php?msg=Invalid Request');

  }


?>