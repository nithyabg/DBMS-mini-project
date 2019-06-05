<?php
    
if(isset($_POST["Save"])){
    global $connection;  
    $cat_id = $_POST["cat_id"];
    $id_no= $_POST["id_no"];
    $vaccinated= $_POST["vaccinated"];
    $location_found= $_POST["location_found"];
        
$connection = mysqli_connect('localhost','root','','adoption_centre');
$Query = "INSERT INTO catalog(cat_id,id_no,vaccinated,location_found)             VALUES($cat_id,$id_no,'$vaccinated','$location_found')"; 
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
    background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(cute-cow-FTR.jpg);
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
        <h2>Enter Catalog details.</h2>
        <form id="insertion" action="insertc.php" method="post">
            <b>Catalog ID* : </b><input type="int" name="cat_id" placeholder="Enter Catalog_id" required><br><br>
            <b>Animal ID no. : </b><input type="int" name="id_no" placeholder="Enter Animal ID"><br><br>
            <b>Vaccinated : </b><input type="text" name="vaccinated" placeholder="Is the Animal vaccinated?"><br><br>
            <b>Location found : </b><input type="text" name="location_found" placeholder="Enter the location found"><br><br>
<br><br>`
            <input type="submit" id="button" name="Save" value="SAVE">&ensp;
    
        </form>
    </div>
        
    </center>
     <h3> <a href="index.php">HOME</a></h3>
</body>
</html>
