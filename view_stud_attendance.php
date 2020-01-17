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
            
                    
                    <li><a href="fac_applyleave.php">APPLY LEAVE</a></li>
                    <li><form action="logout.php" method="post">
                      
                             <input type="submit" value="Logout" name="logout" class="sbm" >
                        </form>
                    </li>
            </ul>
        </div>
       <div class="form">
            <h1> ADD ATTENDANCE</h1>
            <form action="addfaculty.php" method="post">
                
                <br><br>
                <input type="text" placeholder="stid" name="stid" class="inp">
				<input type="text" placeholder="name" name="name" class="inp">
				<input type="text" placeholder="batch" name="batch" class="inp">
                <input type="date" placeholder="Date" name="date" class="inp">
                <input type="text" placeholder="Hour 1" name="h1" class="inp">
                <input type="text" placeholder="Hour 2" name="h2" class="inp">
                <input type="text" placeholder="Hour 3" name="h3" class="inp">
                <input type="text" placeholder="hour 4" name="h4" class="inp"><br><br>
                <input type="submit" value="ADD" name="addatt" class="sbm">
        
            </form>
        </div>
        <div class="form">
            <h1> STUDENT ATTENDANCE</h1><br><br>
            <table style="color:rgb(10, 10, 10)" >
                <thead>
                    <tr> 
                        <th>ID</th>
                        <th>Name</th>
						<th>Batch</th>
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
					$sql="select * from atte";
					$result = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($result)) 
					{
						
				?>
                    <tr>
                        <td> <?php echo $row['stid'] ;?></td>
                        <td><?php echo $row['name'] ;?></td>
                        <td><?php echo $row['batch'] ;?></td>
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
