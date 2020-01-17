<!DOCTYPE html>
<html>
<head>
<title>
home
</title>
<style>
table,th,td{border:2px solid green; border-collapse:collapse; text-align:center;}
</style>
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
            <h1> ADD MARKS</h1>
            <form action="addfaculty.php" method="post">
                
                <br><br>
                <input type="text" placeholder="stid" name="stid" class="inp">
				<input type="text" placeholder="name" name="name" class="inp">
				<input type="text" placeholder="batch" name="batch" class="inp">
                <input type="text" placeholder="AssessmentNo" name="assno" class="inp">
                <input type="text" placeholder="sub1" name="sub1" class="inp">
                <input type="text" placeholder="sub2" name="sub2" class="inp">
                <input type="text" placeholder="sub3" name="sub3" class="inp">
                
                <input type="submit" value="add marks" name="addmark" class="sbm">
        
            </form>
        </div>
        <div class="form">
            <h1> STUDENT MARKS</h1><br><br>
            <table style="color:rgb(10, 10, 10)" >
                <thead>
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
							<?php
					include_once 'connection.php';
					session_start();
					$sql="select * from mark";
					$result = mysqli_query($conn, $sql);
					while($row = mysqli_fetch_assoc($result)) 
					{
						
						?>
					<tr>
                        <td> <?php echo $row['stid']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['batch']?></td>
                        <td><?php echo $row['assno']?></td>
                        <td><?php echo $row['sub1']?></td>
                        <td><?php echo $row['sub2']?></td>
						<td><?php echo $row['sub3']?></td>
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            
        </div>
     </div>

    

</body>
</html>
