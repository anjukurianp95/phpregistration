<?php 
	include_once("connection.php");
	session_start();

	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select username FROM admin WHERE username='".$username."' and password='".$password."'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) 
		{
			while($row = mysqli_fetch_assoc($result)) 
			{ 
				
				$_SESSION['user']=$username;
				require_once "adminhome.php";
			}
		}
		else 
		{
			$sql1="select name FROM faculty WHERE name='".$username."' and password='".$password."'";
			$result1 = mysqli_query($conn, $sql1);
			if(mysqli_num_rows($result1)> 0) 
			{
				while($row = mysqli_fetch_assoc($result1)) 
				{
					
					$_SESSION['user']=$row['name'];
					header('location:faculty_home.php');
				}
			}
			else
				$sql2="select name FROM student WHERE name='".$username."' and password='".$password."'";
				$result2 = mysqli_query($conn, $sql2);
				if(mysqli_num_rows($result2)> 0) 
				{
					while($row = mysqli_fetch_assoc($result2)) 
					{
						
						$_SESSION['user']=$row['name'];	
						header('location:student_home.php');
					}
				}
			
		}
	}

mysqli_close($conn);
?>

