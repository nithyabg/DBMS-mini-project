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
    background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(Puppy-Heroes-600x400.jpg);
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
            <th>Employee ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Date of birth</th>
            <th>Address</th>
            <th>Salary</th>
            <th>Department</th>
        </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','adoption_centre');
            $Query = "SELECT * FROM employee";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $emp_id = $Datarows['emp_id'];
                $fname = $Datarows['fname'];
                $lname = $Datarows['lname'];
            	$dob = $Datarows['dob'];
                $address = $Datarows['address'];
                $salary = $Datarows['salary'];
                $department = $Datarows['department'];
            ?>
        <tr>
        <td><?php echo $emp_id; ?></td>
        <td><?php echo $fname; ?></td>
        <td><?php echo $lname; ?></td>
        <td><?php echo $dob; ?></td>
        <td><?php echo $address; ?></td>
        <td><?php echo $salary; ?></td>
        <td><?php echo $department; ?></td>
            </tr>
            
    <?php    } ?>    
    </table>
    <h3> <a href="index.php">HOME</a></h3>
</body>
</html>
