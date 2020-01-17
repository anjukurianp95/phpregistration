<!doctype html>
<html>
<head>
<style>
table,th,td{border:2px solid green; border-collapse:collapse; text-align:center;}
</style>
<link rel="stylesheet"  href="css/style.css">
</head>
<body class="bd">
    <div style="display: inline-flex">
    
    <div class="b">
        <h1>ADMIN</h1>
        <ul>
            <li><a href="adminhome.php"> HOME</a></li>
            <li><a href="faculty_signup.php">ADD FACULTY</a></li>
            <li><a href="student_signup.php">ADD STUDENT</a></li>
            <li><a href="#">STUDENT DETAILS</a>
            <div class="submenu">
                <ul>
                    <li><a href="stud_details.php">Personal details</a></li>
                    <li><a href="stud_attendance.php">Attendance</a></li>
                    <li><a href="stud_mark.php">Mark</a></li>
                </ul>
            </div>
            </li>
            <li><a href="#">FACULTY DETAILS</a>
                <div class="submenu">
                    <ul>
                        <li><a href="fac_details.php">Personal Details</a></li>
                        
                    </ul>
                </div>    
            </li>
            
            <li><a href="#">LEAVE MANAGEMENT</a>
                <div class="submenu">
                    <ul>
                        
                        <li><a href="viewleavestud.php">Student leave</a></li>
                    </ul>

                </div>
            </li>
            <li><form action="logout.php" method="post">
                     <input type="submit" value="Logout" name="logout" class="sbm" >
                </form>
            </li>
        </ul>
        </div>
        <div style="color:rgb(39, 4, 39)">
            <h1>  STUDENT LEAVE </h1>
            <table>
            <thead>
                <tr> 
					<th>ID</th>
                    <th>Name</th>
					<th>Batch</th>
                    <th>from date</th>
                    <th>to date </th>
                    <th>reason</th>
                    <th>status</th>

                </tr>
                
            </thead>
            <tbody>
                <?php
				
				include_once 'connection.php';
				session_start();
				
				$sql="select * from leaves";
				$result = mysqli_query($conn, $sql);
				while($row = mysqli_fetch_assoc($result)) 
				{
			?>
                <tr>
					<td><?php echo $row['id'] ;?></td>
                   <td><?php echo $row['name'] ;?></td>
                    <td><?php echo $row['batch'] ;?></td>
                    <td><?php echo $row['fromdate'] ;?></td>
                    <td><?php echo $row['todate'] ;?></td>
                    <td><?php echo $row['reason'] ;?></td>
                    <td><?php echo $row['status'] ;?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <br><br>
        
            <form action="addfaculty.php" method="post">
               
               id: <input type="text" name="id" class="inp">
               <input type="submit" value="Approve" name="aprv" class="sbm">
            </form>
        </div>
    </div>
   
</body>
</html>
