<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<?php include 'C:\xampp\htdocs\cinema\admin\historybooking.css'; ?>
</style>
</head>
<body>

<div class="topnav">
  <a>Administrator</a>
  <a class="active" href="logout_admin.php">Delogare</a>
</div>



<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="section group">
					<div class="about span_1_of_2">	
						<h3 style="color:black;" class="text-center">Rezervări</h3>
						</body>
</html>
                        
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
        <th>Modificare</th>
        <th>Ștergere</th>
        </tr>";
        while ($row = $result->fetch_object())
        {

            echo "<tr>";
            
            echo "<td>" . $row->movie_name . "</td>";
            echo "<td>" . $row->date . "</td>";
            echo "<td>" . $row->time . "</td>";
            echo "<td>" . $row->seats . "</td>";
            echo "<td><a href='modificare_admin.php?id=" . $row->reservation_id . " '>Modifică</a></td>";
            echo "<td><a href='stergere_admin.php?id=" . $row->reservation_id . "'>Șterge</a></td>";
            
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
