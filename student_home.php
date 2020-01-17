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
        </div>
</body>
</html>