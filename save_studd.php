<!DOCTYPE html>
<html>
<head>
<title>
home
</title>
<link rel="stylesheet"  href="css/style.css">
</head>
<body class="bd">
        <div style="display: inline-flex">
            <div class="b">
                <h1>STUDENT</h1>
                <ul>
                    <li><a href="student_home.php"> HOME</a></li>
                    
                    <li><a href="#">MY PROFILE</a>
                        <div class="submenu">
                            <ul>
                                <li><a href="view_student_details.php">Personal details</a></li>
                                <li><a href="view_student_attendance.php">Attendance</a></li>
                                <li><a href="view_student_marks.php">Mark</a></li>
                            </ul>
                         </div>
                    </li>
                    
                    <li><a href="timetablestudent.php">TIME TABLE</a></li>
                    <li><a href="student_applyleave.php">APPLY LEAVE</a></li>
                
                    <li><form action="logout" method="post">
                    
                             <input type="submit" value="Logout" name="logout" class="sbm" >
                        </form>
                    </li>
                </ul>
            </div>
 

            <div style="color:rgb(163, 39, 163)">
                
                <h1 > MY PROFILE</h1>
                <form action="addfaculty.php" method="post">
                   
                <table>
						<?php
					include_once 'connection.php';
					session_start();
					$sql="select * from student where name='".$_SESSION['user']."'";
					$result = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($result)) 
					{
						
						?>
                        <tr></tr>

                        <tr><td>ID</td><td>:</td><td><input type="text" class="inp" name="stid" value="<?php echo $row['stid']?>"></td></tr>
                        <tr><td>Name</td><td>:</td><td><input type="text" class="inp" name="name" value="<?php echo $row['name']?>"></td></tr>
                        <tr><td>Address</td><td>:</td><td><input type="text" class="inp" name="address" value="<?php echo $row['address']?>"></td></tr>
                        <tr><td>Date of Birth</td><td>:</td><td><input type="text" class="inp" name="dob" value="<?php echo $row['dob']?>"></td></tr>
                        <tr><td>AdmissionNo</td><td>:</td><td><input type="text" class="inp" name="adno" value="<?php echo $row['admissionno']?>"></td></tr>
                        <tr><td>Admission Date</td><td>:</td><td><input type="text" class="inp" name="addate" value="<?php echo $row['admissiondate']?>"></td></tr>
                        <tr><td>Gender</td><td>:</td><td><input type="text" class="inp" name="gender" value="<?php echo $row['gender']?>"></td></tr>
                        <tr><td>Batch </td><td>:</td><td><input type="text" class="inp" name="batch" value="<?php echo $row['batch']?>"></td></tr>
                        <tr><td>Email</td><td>:</td><td><input type="text" class="inp" name="email" value="<?php echo $row['email']?>"></td></tr>
                        <tr><td>Mobile</td><td>:</td><td><input type="text" class="inp" name="mobile" value="<?php echo $row['mobile']?>"></td></tr>
						<tr><td>Password</td><td>:</td><td><input type="text" class="inp" name="password" value="<?php echo $row['password']?>"></td></tr>
                        
                </table>
					<?php } ?>
                <input type="submit" class="sbm" name="saves" value="Save">
                </form>
                
            </div>
        </div>
</body>
</html>