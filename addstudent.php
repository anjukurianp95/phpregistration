<?php 
	include_once("connection.php");
	

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$id=$_POST['stid'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		
		$batch=$_POST['batch'];
		$adno=$_POST['admissionno'];
		$adate=$_POST['admissiondate'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$sql="INSERT INTO student(stid,name,mobile,email,dob,gender,batch,admissionno,admissiondate,address,password) VALUES('".$id."','".$name."','".$mobile."','".$email."','".$dob."','".$gender."','".$batch."','".$adno."','".$adate."','".$address."','".$password."')";
		if(mysqli_query($conn,$sql))
		
		{
			
				require_once "addstudent.php";
			
		}
		
	}

mysqli_close($conn);
?>