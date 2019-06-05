<!DOCTYPE html>
<html lang="">
<head>
        <title>DISPLAY</title>
</head>
    <style>
        table {
            padding: 5px;
            text-align: center;
            font-size: 20px;
            background-color: #ffffff;
            opacity: 0.7;
        }
        h3 {
            margin-left: 75%;
        }
        html, body {
    margin: 0;
    padding: 0;
    width: 100%;
}
body{
    background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(http://www.bonaireturtles.org/wp/wp-content/uploads/2016/01/Green-Turtle-1024x768.jpg);
	background-size: cover;
    width: 100%;
    height: 100vh;
    display: table;
    font-family: sans-serif;

}

    </style>
<body>

    <table width=850; border="5" align="center">
    <caption><h1>DETAILS</h1></caption>
        <tr>
       
            <th>Animal ID</th>
            <th>Branch ID</th>
            <th>Breed code</th>
            </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','adoption_centre');
            $Query = "SELECT * FROM animals";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $id_no = $Datarows['id_no'];
                $branch_id=$Datarows['branch_id'];
                $bcode=$Datarows['bcode'];
                ?>
        <tr>
        <td><?php echo $id_no; ?></td>
        <td><?php echo $branch_id;?></td>
        <td><?php echo $bcode;?></td>
            </tr>
            
    <?php    } ?>    
    </table>
    <h3> <a href="index.php">HOME</a></h3>
</body>
</html>
