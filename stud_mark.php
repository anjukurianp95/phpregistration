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
   
    <div class="form">
        <h1> STUDENT MARKS</h1><br><br>
        <table style="color:rgb(10, 10, 10)" >
            <thead>
				<?php
					include_once 'connection.php';
					session_start();
					$sql="select * from mark  ";
					$result = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($result)) 
					{
						
						?>
                <tr> 
                    <th>ID</th>
                    <th>Name</th>
					<th>Batch</th>
                    <th>AssNo</th>
                    <th>sub 1</th>
                    <th>sub 2</th>
                    <th>sub 3</th>
                    

                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td> <?php echo $row['stid'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['batch'] ?></td>
					<td><?php echo $row['assno'] ?></td>
                    <td><?php echo $row['sub1'] ?></td>
                    <td><?php echo $row['sub2'] ?></td>
                    <td><?php echo $row['sub3'] ?></td>
                    
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
    </div>
    </div>
</body>
</html>