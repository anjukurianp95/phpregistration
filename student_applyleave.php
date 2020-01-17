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
            <div class=form>
                <h1> APPLY LEAVE</h1>
                <form action="addfaculty.php" method="post">
                  
                    <input type="text" placeholder="Name" name="name" class="inp">
					<input type="text" placeholder="Batch" name="batch" class="inp">
                    <input type="date" placeholder="fromDate" name="fromdate" class="inp">
                    <input type="date" placeholder="todate" name="todate" class="inp">
                    <input type="text" placeholder="reason" name="reason" class="inp">
                   
                    <input type="submit" placeholder="APPLY" class="sbm" name="stuapply">
                </form>
            </div>
            <div class="form">
                <h1> MY LEAVE APPLICATIONS</h1>
                <table>
						
                <thead>
                    <tr> 
                        <th>Name</th>
						<th>Batch</th>
                        <th>from date</th>
                        <th>to date </th>
                        <th>Reason</th>
                        <th>Status</th>
    
                    </tr>
                </thead>
                <tbody>
                    <?php
					include_once 'connection.php';
					session_start();
					$sql="select * from leaves where name='".$_SESSION['user']."'";
					$result = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($result)) 
					{
						
						?>
                    <tr>
						<td><?php echo $row['name']?></td>
						<td><?php echo $row['batch']?></td>
                        <td><?php echo $row['fromdate']?></td>
                        <td><?php echo $row['todate']?></td>
                        <td><?php echo $row['reason']?></td>
                        <td><?php echo $row['status']?></td>
                        
                    </tr>
					<?php } ?>
                    
                </tbody>
            </table>
        </div>
        </div>
</body>
</html>