<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<table width=850; border="5" align="center">
    <caption><h1>DETAILS</h1></caption>
        <tr>
            <th>Species ID</th>
            <th>ID number</th>
            <th>Vaccinated</th>
            <th>Date of birth</th>
            <th>location</th>
            <th>Branch</th>
            
        </tr><?php
        require 'adopt.php';  
$connection = mysqli_connect('localhost','root','','adoption_centre');
$Query ="SELECT c.cat_id,c.id_no,c.vaccinated,c.location_found,a.branch_id
from catalog c,animals a, breed b, species s
where c.id_no=a.id_no and b.breed_code=a.bcode and s.species_no=b.species_no and b.bname='$bname' and s.species_name='$species_name'  "; 
$Execute = mysqli_query($connection, $Query);
if($Execute)
{
    echo "The following animals are up for adoption.";
}
while($Datarows = mysqli_fetch_array($Execute))
            {
                $cat_id = $Datarows['cat_id'];
                $id_no = $Datarows['id_no'];
                $vaccinated = $Datarows['vaccinated'];
                $location_found = $Datarows['location_found'];
                $branch_id = $Datarows['branch_id'];
            ?>
        <tr>
        <td><?php echo $cat_id; ?></td>
        <td><?php echo $id_no; ?></td>
        <td><?php echo $vaccinated; ?></td>
        <td><?php echo $location_found; ?></td>
        <td><?php echo $branch_id; ?></td>
            </tr>
    

<?php    } ?>    
    </table>
</body>
</html>
