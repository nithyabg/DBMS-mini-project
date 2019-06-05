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
    background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(dev_holiday-kittens_2017dec14_0181_main.jpg);
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
            <th>Catalog ID</th>
            <th>Date of Adoption</th>
            </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','adoption_centre');
            $Query = "SELECT * FROM adoption";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $cat_id = $Datarows['cat_id'];
                $adoption_date = $Datarows['adoption_date'];
                ?>
        <tr>
        <td><?php echo $cat_id; ?></td>
        <td><?php echo $adoption_date; ?></td>
            </tr>
            
    <?php    } ?>    
    </table>
    <h3> <a href="index.php">HOME</a></h3>
</body>
</html>
