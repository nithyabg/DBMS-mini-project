<?php
    
if(isset($_POST["Save"])){
    global $connection;  
    $branch_id = $_POST["branch_id"];
    $branch_location= $_POST["branch_location"];
    $mgr_id= $_POST["mgr_id"];
    $mgr_startdate= $_POST["mgr_startdate"];
    $contact_no= $_POST["contact_no"];
        
$connection = mysqli_connect('localhost','root','','adoption_centre');
$Query = "INSERT INTO branch(branch_id,branch_location,mgr_id,mgr_startdate,contact_no)             VALUES($branch_id,'$branch_location',$mgr_id,'$mgr_startdate',$contact_no)"; 
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
    
body{
    background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(6309632422_068f46f94a_o.jpg);
    background-size: cover;
    width: 100%;
    display: table;
    font-family: sans-serif;
}

        .container{
            margin-top: 130px;
        
            
        }
        h2{

            font-size: 40px;
            font-family: sans-serif;
            color: white;
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
        <h2>Enter branch details.</h2>
        <form id="insertion" action="insertb.php" method="post">
            <b>Branch ID* : </b><input type="int" name="branch_id" placeholder="Enter Branch_id" required><br><br>
            <b>Branch Location : </b><input type="text" name="branch_location" placeholder="Enter branch location"><br><br>
            <b>Manager ID : </b><input type="int" name="mgr_id" placeholder="Enter Manager ID"><br><br>
            <b>Manager StartDate : </b><input type="date" name="mgr_startdate" placeholder="Enter Manager StartDate"><br><br>
            <b>Contact no.: </b><input type="int" name="contact_no" placeholder="Enter Contact no."><br><br>
            
<br><br>`
            <input type="submit" id="button" name="Save" value="SAVE">&ensp;
    
        </form>
    </div>
        
    </center>
     <h3> <a href="index.php">HOME</a></h3>
</body>
</html>
