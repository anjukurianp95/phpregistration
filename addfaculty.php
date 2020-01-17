<?php 
	include_once("connection.php");
	

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$id=$_POST['facid'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$qua=$_POST['qualification'];
		$batch=$_POST['batch'];
		$designation=$_POST['designation'];
		$jdate=$_POST['joiningdate'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$sql="INSERT INTO faculty(facid,name,designation,mobile,email,joiningdate,qualification,gender,dob,batch,address,password) VALUES('".$id."','".$name."','".$designation."','".$mobile."','".$email."','".$jdate."','".$qua."','".$gender."','".$dob."','".$batch."','".$address."','".$password."')";
		if(mysqli_query($conn,$sql))
		
		{
			
				require_once "adminhome.php";
			
		}
		
	}
	else if(isset($_POST['savef']))
	{
		$name=$_POST['name'];
		$id=$_POST['facid'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$qua=$_POST['qualification'];
		$batch=$_POST['batch'];
		$designation=$_POST['designation'];
		$jdate=$_POST['joiningdate'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		$sql="UPDATE faculty SET facid='".$id."',name='".$name."',designation='".$designation."',mobile='".$mobile."',email='".$email."',joiningdate='".$jdate."',qualification='".$qua."',gender='".$gender."',dob='".$dob."',batch='".$batch."',address='".$address."',password='".$password."' where facid='".$id."'";
		if(mysqli_query($conn,$sql))
		
		{
			
				require_once "fac_profile.php";
			
		}
		
	}
	else if(isset($_POST['saves']))
	{
		$name=$_POST['name'];
		$id=$_POST['stid'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		
		$batch=$_POST['batch'];
		$adno=$_POST['adno'];
		$adate=$_POST['addate'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		$sql="UPDATE student SET stid='".$id."',name='".$name."',mobile='".$mobile."',email='".$email."',admissiondate='".$adate."',admissionno='".$adno."',gender='".$gender."',dob='".$dob."',batch='".$batch."',address='".$address."',password='".$password."' where stid='".$id."'";
		if(mysqli_query($conn,$sql))
		
		{
			
				require_once "view_student_details.php";
			
		}
		
	}
	else if(isset($_POST['stuapply']))
	{ 
		$name=$_POST['name'];
		$batch=$_POST['batch'];
		$fd=$_POST['fromdate'];
		$td=$_POST['todate'];
		$reason=$_POST['reason'];
		
		$sql="INSERT INTO leaves(name,batch,fromdate,todate,reason)VALUES('".$name."','".$batch."','".$fd."','".$td."','".$reason."')";
		if(mysqli_query($conn,$sql))
		
		{
			
				require_once "student_applyleave.php";
			
		}
		else
		{
			echo "error";
		}
			
	}
	else if(isset($_POST['addmark']))
	{
		$id=$_POST['stid'];
		$name=$_POST['name'];
		$batch=$_POST['batch'];
		$ano=$_POST['assno'];
		$sub1=$_POST['sub1'];
		$sub2=$_POST['sub2'];
		$sub3=$_POST['sub3'];
		$sql="INSERT INTO mark(stid,name,batch,assno,sub1,sub2,sub3)VALUES('".$id."','".$name."','".$batch."','".$ano."','".$sub1."','".$sub2."','".$sub3."')";
		if(mysqli_query($conn,$sql))
		
		{
			
				require_once "view_stud_marks.php";
			
		}
		else{
			echo "error";
		}
	}
	else if(isset($_POST['aprv']))
	{
		$id=$_POST['id'];
		$sql="UPDATE leaves SET status='Approved' where id='".$id."'";
		if(mysqli_query($conn,$sql))
		
		{
			
				require_once "viewleavestud.php";
			
		}
		
	}
	else if(isset($_POST['addatt']))
	{
		$id=$_POST['stid'];
		$name=$_POST['name'];
		$batch=$_POST['batch'];
		$date=$_POST['date'];
		$h1=$_POST['h1'];
		$h2=$_POST['h2'];
		$h3=$_POST['h3'];
		$h4=$_POST['h4'];
		$sql="INSERT INTO atte(stid,name,batch,date,h1,h2,h3,h4)VALUES('".$id."','".$name."','".$batch."','".$date."','".$h1."','".$h2."','".$h3."','".$h4."')";
		if(mysqli_query($conn,$sql))
		
		{
			
				require_once "view_stud_attendance.php";
			
		}
		else{
			echo "error";
		}
	}
mysqli_close($conn);
?>