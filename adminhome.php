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
                        <li><a href="#">Attendance</a></li>
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
    </div>
   
</body>
</html>