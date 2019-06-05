<?php
    
if(isset($_POST["Save"])){
    global $connection;  
    $emp_id = $_POST["emp_id"];
    $fname= $_POST["fname"];
    $lname= $_POST["lname"];
    $dob= $_POST["dob"];
    $address=$_POST["address"];
    $salary= $_POST["salary"];
    $department=$_POST["department"];
    
    
$connection = mysqli_connect('localhost','root','','adoption_centre');
$Query = "INSERT INTO employee(emp_id, fname,lname,dob,address,salary,department)             VALUES($emp_id,'$fname','$lname','$dob','$address',$salary,'$department')"; 
$Execute = mysqli_query($connection, $Query);
if($Execute)
{
    echo "DATA INSERTED SUCCESSFULLY";
}
    
}
?>


<!DOCTYPE html>
<html lang="">
<head>
    <title>Insertion</title>
</head>
<body>
    <style>
    html, body {
    margin: 0;
    padding: 0;
    width: 100%;
}
body{
	background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(Puppy-Heroes-600x400.jpg);
	background-size: cover;
    width: 100%;
    height: 100vh;
    display: table;
    font-family: sans-serif;
}

        .container{
            margin-top: 130px;
        
            
        }
        h2{
            font-family: sans-serif;
            font-size: 30px;
            margin: 10px 00px ;
            text-decoration: underline;
            color: black;
        }
        #button {
    
    padding: 10px;
    border-radius: 5px;
    outline: 0px;
            width: 100px;
}
        #insertion {
    width: 40%;
    background-color: #051019;
    opacity: 0.5;
    padding: 50px 0px;
            border-radius: 10px;
}
        input[type="text"], input[type="password"] {
                    width: 250px;
                    padding: 7px;
                    border-radius: 5px;
                    outline: 0px;
                }
        
        b {
            color: white;
        }
         h3 {
            margin-left: 75%;
        }
        a { 
            text-decoration: none;
        }

    </style>
    <center>
    <div class="container">
        <h2>Enter employee details.</h2>
        <form id="insertion" action="insertE.php" method="post">
            <b>Employee ID* : </b><input type="int" name="emp_id" placeholder="Enter emp_id" ><br><br>
            <b>First Name* : </b><input type="text" name="fname" placeholder="Enter fname"><br><br>
            <b>Last Name : </b><input type="text" name="lname" placeholder="Enter lname"><br><br>
            <b>DOB* : </b><input type="date" name="dob" placeholder="Date of birth"><br><br>
            <b>Address* : </b><input type="text" name="address" placeholder="Address"><br><br>
            <b>Salary : </b><input type="int" name="salary" placeholder="Enter Salary"><br><br>
            <b>Department* : </b><input type="text" name="department" placeholder="Enter the Department"><br><br>
<br><br>`
            <input type="submit" id="button" name="Save" value="SAVE">&ensp;
    
        </form>
    </div>
        
    </center>
     <h3> <a href="index.php">HOME</a></h3>
</body>
</html>
