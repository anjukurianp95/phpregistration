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
                            <li><a href="{% url 'stud_details' %}">Personal details</a></li>
                            <li><a href="{% url 'stud_attendance' %}">Attendance</a></li>
                            <li><a href="{% url 'stud_mark' %}">Mark</a></li>
                        </ul>
                     </div>
                </li>
                <li><a href="#">FACULTY DETAILS</a>
                    <div class="submenu">
                        <ul>
                            <li><a href="{% url 'fac_details' %}">Personal Details</a></li>
                            <li><a href="{% url 'fac_attendance' %}">Attendance</a></li>
                        </ul>
                    </div>    
                </li>
                <li><a href="{% url 'timetable' %}">TIME TABLE</a></li>
                
                <li><a href="#">LEAVE MANAGEMENT</a>
                    <div class="submenu">
                        <ul>
                            <li><a href="{% url 'viewleavefac' %}">Faculty leave</a></li>
                            <li><a href="{% url 'viewleavestud' %}">Student leave</a></li>
                        </ul>
    
                    </div>
                </li>
                <li><form action="{% url 'logout' %}" method="post">
                    
                         <input type="submit" value="Logout" name="logout" class="sbm" >
                    </form>
                </li>
            </ul>
        </div>
    <div class="form">
        <h1> ADD FACULTY</h1>
        <form action="addfaculty.php" method="post">
         
            <input type="text" placeholder="ID" name="facid" class="inp">
            <input type="text" placeholder="Name" name="name" class="inp">
            <input type="text" placeholder="Address" name="address" class="inp">
            <input type="date" placeholder="DOB" name="dob" class="inp">
            <input type="text" placeholder="Gender" name="gender" class="inp">
            <input type="text" placeholder="Qualification" name="qualification" class="inp">
            <input type="text" placeholder="Batch incharge" name="batch" class="inp">
			<input type="text" placeholder="Designation" name="designation" class="inp">
			<input type="date" placeholder="Joining Date" name="joiningdate" class="inp">
            <input type="text" placeholder="Email" name="email" class="inp">
            <input type="text" placeholder="Mobile" name="mobile" class="inp">
            <input type="password" placeholder="Password" name="password" class="inp">
            <input type="submit" value=" ADD " class="sbm" name="submit">
        </form>
    </div>
    
    
</div>
</body>
</html>