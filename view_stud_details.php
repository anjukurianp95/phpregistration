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
         <div>
        <h1> STUDENT DETAILS</h1><br><br>
        <table style="color:rgb(163, 39, 163)" >
            <thead>
                <tr> 
                    <th>ID</th>
                    <th> Name</th>
                    <th>Address</th>
                    <th>AdmNo</th>
                    <th>AdmDate</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Batch</th>
                    <th>Mobile</th>
                    <th>Email</th>

                </tr>
            </thead>
            <tbody>
                
                <tr><?php
					include_once 'connection.php';
					$sql="select * from student";
					$result = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($result)) 
					{
						
						?>
						<tr>
							<td> <?php echo $row['stid']?> </td>
							<td> <?php echo $row['name'] ?> </td>
							<td> <?php echo $row['address'] ?> </td>
							<td><?php echo$row['admissionno'] ?></td>
							<td><?php echo $row['admissiondate']?></td>
							<td> <?php echo $row['dob'] ?> </td>
							<td> <?php echo $row['gender'] ?> </td>
							<td> <?php echo $row['batch'] ?> </td>
							<td> <?php echo $row['mobile']?> </td>
							<td> <?php echo $row['email']?> </td>
							
						</tr>
                <?php
					}
				?>
                    
            </tbody>
        </table>
        
    </div>
       </div>
    

</body>
</html>
