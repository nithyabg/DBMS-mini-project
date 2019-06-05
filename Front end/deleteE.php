    <?php
    
if(isset($_POST["Delete"])){
    global $connection;
    $emp_id = $_POST["emp_id"];
$connection = mysqli_connect('localhost','root','','adoption_centre');
$Query = "DELETE FROM employee WHERE emp_id = '$emp_id'"; 
$Execute = mysqli_query($connection, $Query);

if($Execute)
{
    echo "DATA DELETED SUCCESSFULLY";
}
else
{
    echo "CANNOT BE DELETED";
}
    
}

?>


<!DOCTYPE html>
<html lang="">
<head>
    <title>DELETION</title>
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
            color: darkblue;
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
        input[type="text"] {
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
        <h2>DELETE</h2>
        <form id="insertion" action="deleteE.php" method="post">
            <b>Employee ID : </b><input type="text" name="emp_id" placeholder="Enter Employee ID."><br><br>
            <input type="submit"  name="Delete" id="button" value="DELETE">&ensp;
        </form>
    </div>
        
    </center>
    <h3> <a href="index.php">HOME</a></h3>&ensp;



    
    
    
    
    </body>
</html>
