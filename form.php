<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>
</head>
<body>
	<fieldset>
 <form action="formsql.php" method="post">
 	<table align="center">
 		<tr>
 			<th align="left">Name:</th>
 			<td><input type="text" name="std-name"></td>
 		</tr>

 		<tr>
 			<th align="left"> Gender</th>
 			<td>
 				<input type="radio" name="std-gender" value="male" checked>MALE
 				 <input type="radio" name="std-gender" value="female" >FEMALE
 			</td>
 		</tr>

 		<tr>
 			<th align="left">Email:</th>
 			<td><input type="email" name="std-email"></td>
 		</tr>

 		<tr>
 			<th align="left">PASSWORD:</th>
 			<td><input type="password" name="std-password"></td>
 		</tr>

 		<tr>
 			<th align="left">DOB:</th>
 			<td><input type="number" name="std-dob"></td>
 		</tr>

 		<tr>
 			<th align="left">Education:</th>

 			<td><input type="checkbox" name="std-edu[]" value="HSC" checked>HSC
                <input type="checkbox" name="std-edu[]" value="SSC" checked>SSC
                <input type="checkbox" name="std-edu[]" value="UG" checked>UG
                <input type="checkbox" name="std-edu[]" value="PG" checked>PG

 			</td>
 		</tr>

   			<tr>
 				<th align="left">City</th>
 				<td><select name="std-city">
 					<option>Bhopal</option>
 					<option>Delhi</option>
 					<option value="ct-103"> Mumbai</option>
 					<option>Kolkata</option>
 				</select></td>
 			</tr>
 
			 <tr> 			
			 	<th align="left">Address:</th>
			 	<td><textarea name="std-add"></textarea></td>
			</tr>
 
      <tr>
      	<th colspan="2"><input type="submit" name="regbtn" value="Register"></th>
      </tr>

 	</table>
 </form>
 </fieldset>

 
</body>
</html>