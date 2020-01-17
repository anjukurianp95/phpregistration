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
    </div>
    
</body>
</html>
