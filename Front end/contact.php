<!DOCTYPE html>
<html>
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
        h1{
            font-family: sans-serif;
            font-size: 30px;
            margin: 10px 00px ;
            text-decoration: underline;
            color: black;
        }
        
        h3 {
            margin-left: 75%;
        }
        
body{
    background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(6309632422_068f46f94a_o.jpg);
    background-size: cover;
    width: 100%;
    display: table;
    font-family: sans-serif;}

    </style>
<body>

    <table width=850; border="5" align="center">
    <caption><h1>CONTACT DETAILS</h1></caption>
        <tr>
            <th>Branch Loacation</th>
            <th>Contact no</th>
            </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','adoption_centre');
            $Query = "CALL contact()";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $branch_location = $Datarows['branch_location'];
                $contact_no= $Datarows['contact_no'];
                ?>
        <tr>
        <td><?php echo $branch_location; ?></td>
        <td><?php echo $contact_no; ?></td>
            </tr>
            
    <?php    } ?>    
    </table>
    <h3> <a href="index.php">HOME</a></h3>
</body>
</html>
