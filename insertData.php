

<?php

session_start();
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$dob=$_POST['dob'];
$cpass=$_POST['cpassword'];

 

// if pass and cpass mismatch
if($password != $cpass){
	header('location:http://localhost/amitCA2/home.html');	
}


$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'amitca');



	$q="insert into registration (firstname,lastname,email,gender,dob,password) values ('$firstname','$lastname','$email','$gender','$dob','$password')";
	$status=mysqli_query($con,$q);
	// if successful account created then divert to Farmer login  page
	
	if($status!=1){
        header('location:http://localhost/amitCA2/home.html');
    }

mysqli_close($con);
?>


<! DOCTYPE html>
<html>
<head>  <title> Insert php page </title>  </head>
<body>

	<p>
		<?php
			if($status==1){
				echo "  Record inserted: Name-> $firstname  $lastname";
				
			}
			else{
				echo "Record not inserted";
			
				
			}
		?>
		
	</p>
	If want to insert more require<a href="location:http://localhost/amitCA2/home.html" > Click here </a>;
	<br>
	 If you want to see the inserted data <a href="location:http://localhost/capstone/signup.php" > Click Here </a>;


</body>
</html>

