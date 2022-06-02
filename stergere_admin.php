<?php
// conectare la baza de date database
include("connection_admin.php");
// se verifica daca id a fost primit
if (isset($_GET['reservation_id']) && is_numeric($_GET['reservation_id']))
{
// preluam variabila 'id' din URL
    $reservation_id = $_GET['id'];
// stergem inregistrarea cu ib=$id
    if ($stmt = $mysqli->prepare("DELETE FROM reservation WHERE reservation_id = ? LIMIT 1"))
    {
        $stmt->bind_param("i",$reservation_id);
        $stmt->execute();
        $stmt->close();
    }
    else
    {
        echo "ERROR: Nu se poate executa delete.";
    }
    $mysqli->close();
    echo "<div>Rezervarea a fost stearsa!!!!</div>";
}
echo "<p><a href=\"historybooking_admin.php\">Administrator</a></p>";
?>