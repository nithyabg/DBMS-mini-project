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
    background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(cute-cow-FTR.jpg);
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
            <th>Animal ID</th>
            <th>Species Name</th>
            <th>Breed Name</th>
            <th>Vaccinated</th>
            <th>Adaptability</th>
            <th>Other health conditions</th>
            <th>Branch Location</th>
            </tr>
        <?php
            global $connection;
            $connection = mysqli_connect('localhost','root','','adoption_centre');
            $Query = "SELECT c.cat_id,c.id_no,s.species_name,b.bname,c.vaccinated,ad.adaptability, o.other_healthcond,       br.branch_location FROM catalog c, animals a,species s,breed b,adaptability ad,other_healthcond o,branch br WHERE c.id_no=a.id_no and a.bcode=b.breed_code and b.species_no=s.species_no and a.id_no=ad.id_no and c.cat_id=o.cat_id and br.branch_id=a.branch_id";
            $Execute = mysqli_query($connection, $Query);
            while($Datarows = mysqli_fetch_array($Execute))
            {
                $cat_id = $Datarows['cat_id'];
                $id_no = $Datarows['id_no'];
                $species_name=$Datarows['species_name'];
                $bname=$Datarows['bname'];
                $vaccinated=$Datarows['vaccinated'];
                $adaptability=$Datarows['adaptability'];
                $other_healthcond=$Datarows['other_healthcond'];
                $branch_location=$Datarows['branch_location'];
                ?>
        <tr>
        <td><?php echo $cat_id; ?></td>
        <td><?php echo $id_no; ?></td>
        <td><?php echo $species_name; ?></td>
        <td><?php echo $bname; ?></td>
        <td><?php echo $vaccinated;?></td>
        <td><?php echo $adaptability;?></td>
        <td><?php echo $other_healthcond; ?></td>
        <td><?php echo $branch_location; ?></td>
            </tr>
            
    <?php    } ?>    
    </table>
    <h3> <a href="index.php">HOME</a></h3>
</body>
</html>
