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
            <h1>FACULTY</h1>
            <ul>
                <li><a href="faculty_home.php"> HOME</a></li>
                <li><a href="fac_profile.php">MY PROFILE</a></li>
                <li><a href="#">STUDENT DETAILS</a>
                    <div class="submenu">
                        <ul>
                            <li><a href="view_stud_details.php">Personal details</a></li>
                            <li><a href="view_stud_attendance.php">Attendance</a>
                               <!-- <div class="submenu">
                                    <ul>
                                        <li><a href="{% url 'jsd2attendance' %}">JSD2</a></li>
                                        <li><a href="{% url 'jsd2attendance' %}">JSD1</a></li>
                                    </ul>
                                    </div> -->
                                </li> 
                            <li><a href="view_stud_marks.php">Mark</a></li>
                        </ul>
                     </div>
                </li>
            
                    <li><a href="view_timetable.php">TIME TABLE</a></li>
                    <li><a href="fac_applyleave.php">APPLY LEAVE</a></li>
                    <li><form action="logout.php" method="post">
                      
                             <input type="submit" value="Logout" name="logout" class="sbm" >
                        </form>
                    </li>
            </ul>
        </div>
        <div style="color:rgb(163, 39, 163)">
            
             <h1> MY PROFILE</h1>
            <form action="addfaculty.php" method="post">
            <?php
				
				include_once 'connection.php';
				session_start();
				
				$sql="select * from faculty where name='".$_SESSION['user']."'";
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result)) 
				{
			?>
            <table>
                    <tr></tr>
                    <tr><td>Name</td><td>:</td><td><input class="inp" type="text" value="<?php echo $row['name'] ;?>" name="name"></td></tr>
					<tr><td>ID</td><td>:</td><td><input class="inp" type="text" value="<?php echo $row['facid'] ;?>" name="facid"></td></tr>
                    <tr><td>Address</td><td>:</td><td><input class="inp" type="text" value="<?php echo $row['address'] ;?>" name="address"></td></tr>
                    <tr><td>Date of birth</td><td>:</td><td><input class="inp" type="date" value="<?php echo $row['dob'] ;?>" name="dob"></td></tr>
                    <tr><td>Gender</td><td>:</td><td><input class="inp" type="text" value="<?php echo $row['gender'] ;?>" name="gender"></td></tr>
					<tr><td>Designation</td><td>:</td><td><input class="inp" type="text" value="<?php echo $row['designation'] ;?>" name="designation"></td></tr>
					<tr><td>Joining Date</td><td>:</td><td><input class="inp" type="date" value="<?php echo $row['joiningdate'] ;?>" name="joiningdate"></td></tr>
                    <tr><td>Qualification</td><td>:</td><td><input class="inp" type="text" value="<?php echo $row['qualification'] ;?>" name="qualification"></td></tr>
					<tr><td>Batch incharge</td><td>:</td><td><input class="inp" type="text" value="<?php echo $row['batch'] ;?>" name="batch"></td></tr>
                    <tr><td>Email</td><td>:</td><td><input class="inp" type="text" value="<?php echo $row['email'] ;?>" name="email"></td></tr>
                    <tr><td>Password</td><td>:</td><td><input class="inp" type="text" value="<?php echo $row['password'] ;?>" name="password"></td></tr>
                    <tr><td>Mobile</td><td>:</td><td><input class="inp" type="" value="<?php echo $row['mobile'] ;?>" name="mobile"></td></tr>
            </table>
			<?php
					}
					?>
                    <input type="submit" value="Save" class="sbm" name="savef">
            </form>
            
        </div>
</div>   
</body>
</html>
