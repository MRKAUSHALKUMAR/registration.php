#<?php
 #if (isset($_POST['regbtn'])) {
 	  ## $name=$_POST['std-name'];
 	  # $gender=$_POST['std-gender'];
# 	   $email=$_POST['std-email'];

# 	   $pass=md5($_POST['std-password']);

# 	   $dob=$_POST['std-dob'];
# 	   $city=$_POST['std-city'];

# 	   $address=addslashes($_POST['std-add']);

# 	   $dob1=date_create($dob);
# 	   $dob2=date_format($dob1,"d/m/Y");


# 	   echo "<br> $name";
# 	   echo"<br> $gender";
# 	   echo"<br> $email";
# 	   echo "<br> $pass";
# 	   echo "<br> $dob2";

 	   #doubt from here

# 	   if (isset($_POST['std-edu'])) {
# 	   	  $edu=$_POST['std-edu'];
# 	   	  echo "<br>".implode(',', $edu);
 	  # }
       # echo "<br> $city";
        #echo "<br> $address";
 #}else{
 	#echo "Invalid Access";
 #}
?>#


<?php
	
	if (isset($_POST['regbtn'])) {
		  $name=$_POST['std-name'];
		  $gender=$_POST['std-gender'];
		  $email=$_POST['std-email'];
		  $pass=md5($_POST['std-password']);
		  $dob=$_POST['std-dob'];
		  $city=$_POST['std-city'];
		  $address=addslashes($_POST['std-add']);
		  
   		  $dob1=date_create($dob);
		  $dob2=date_format($dob1,"d/m/Y");
		    $edu='';
		  if(isset($_POST['std-edu'])){
			  $edu=$_POST['std-edu'];			   
			}
 ?>

 
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Data</title>
</head>
<body>
	<table align=center border=1px cellpadding="8px">
		<caption>My Data</caption>
			<tr>
				<th align=left>Name :</th>
				<td><?=$name?></td>
			</tr>
			<tr>
				<th align=left>Gender :</th>
				<td><?=$gender?></td>
			</tr>
			<tr>
				<th align=left>Email :</th>
				<td><?=$email?></td>
			</tr>
			<tr>
				<th align=left>Password :</th>
				<td><?=$pass?></td>
			</tr>
			<tr>
				<th align=left>DOB :</th>
				<td><?=$dob2?></td>
			</tr>
			<tr>
				<th align=left>Education :</th>
				<td><?=implode(', ',$edu)?></td>
			</tr>
			<tr>
				<th align=left>City :</th>
				<td><?=$city?></td>
			</tr>
			<tr>
				<th align=left>Address :</th>
				<td><?=$address?></td>
			</tr>
			 
		</table>
</body>
</html>
<?php
	}else{
		echo"Invalid Access";
	}
 
?>