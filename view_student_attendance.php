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
                   
                    <li><a href="student_applyleave.php">APPLY LEAVE</a></li>
                
                    <li><form action="logout" method="post">
                    
                             <input type="submit" value="Logout" name="logout" class="sbm" >
                        </form>
                    </li>
                </ul>
            </div>
            <div class="form">
                <h1> MY ATTENDANCE</h1><br><br>
                <table style="color:rgb(10, 10, 10)" >
                    <thead>
                        <tr> 
                            
                            
                            <th>Date</th>
                            <th>Hour 1</th>
                            <th>Hour 2</th>
                            <th>Hour 3</th>
                            <th>Hour 4</th>
        
                        </tr>
                    </thead>
                    <tbody>
                    <?php
					include_once 'connection.php';
					session_start();
					$sql="select * from atte where name='".$_SESSION['user']."'";
					$result = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($result)) 
					{
						
					?>
                        <tr>
                            
                            <td><?php echo $row['date'] ;?></td>
                            <td><?php echo $row['h1'] ;?></td>
                            <td><?php echo $row['h2'] ;?></td>
                            <td><?php echo $row['h3'] ;?></td>
                            <td><?php echo $row['h4'] ;?></td>
                            
                        </tr>
					<?php } ?>
                    </tbody>
                </table>
                
            </div>
        </div>
</body>
</html>