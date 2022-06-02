
<?php include('header.php');


?>
<div class="content">
<div class="wrap">
    <div class="content-top">
            <div class="section group">
                <div class="about span_1_of_2">	
                    <h3 style="color:black;" class="text-center">Istoric rezervări</h3>
                    
                    <style><?php include 'C:\xampp\htdocs\cinema\css\historybooking.css'; ?></style>
                    <?php

include("config.php");

if ($result = $con->query("SELECT * FROM reservation ORDER BY reservation_id"))
{ 
if ($result->num_rows > 0)
{

    echo "<table border='1' cellpadding='10'>";

    echo "<tr>
    <th> Nume film </th>
    <th>Dată</th>
    <th>Oră</th>
    <th>Număr locuri</th>
    </tr>";
    while ($row = $result->fetch_object())
    {

        echo "<tr>";
        
        echo "<td>" . $row->movie_name . "</td>";
        echo "<td>" . $row->date . "</td>";
        echo "<td>" . $row->time . "</td>";
        echo "<td>" . $row->seats . "</td>";
        
        
        echo "</tr>";
    }
    echo "</table>";
}

else
{
    echo "Nu există rezervări!";
}
}

else
{ echo "Error: " . $con->error(); }

$con->close();
?>
