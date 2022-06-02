<?php // connectare bazadedate
include("connection_admin.php");
//Modificare datelor
// se preia id din pagina vizualizare
$error='';
if (!empty($_POST['id']))
{ if (isset($_POST['submit1']))
{ // verificam daca id-ul din URL este unul valid
    if (is_numeric($_POST['id']))
    { // preluam variabilele din URL/form
        $user_id = isset($_POST['user_id']);
        $first_name = $_POST['first_name'] ;
        $last_name = $_POST['last_name'] ;
        $movie_name= $_POST['movie_name'] ;
        $date = $_POST['date'] ;
        $time = $_POST['time'] ;
        $seats = $_POST['seats'] ;
// verificam daca numele, prenumele, an si grupa nu sunt goale
        if ($user_id == '' || $first_name == ''||$last_name==''||$movie_name==''||$date==''||$time==''||$seats=='')
        { // daca sunt goale afisam mesaj de eroare
            echo "<div> ERROR: Completati campurile obligatorii!</div>";
        }else
        { // daca nu sunt erori se face update name, code, image, price, descriere, categorie
            if ($stmt = $mysqli->prepare("UPDATE reservation SET
Prenume=?,Nume=?,Nume film=?,Dată=?,Oră=?, Număr locuri=? WHERE id='112'"))
            {
                $stmt->bind_param("sssdss", $first_name,
                    $last_name,$movie_name,$date,$time,$seats);
                $stmt->execute();
                $stmt->close();
            }// mesaj de eroare in caz ca nu se poate face update
            else
            {echo "ERROR: nu se poate executa update.";}
        }
    }
// daca variabila 'id' nu este valida, afisam mesaj de eroare
    else
    {echo "id incorect!";} }}?>
<html> <head><title> <?php if ($_GET['id'] != '') { echo "Modificare rezervare"; }?> </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8"/></head>
<body>
<h1><?php if($_GET['id'] != '') { echo "Modificare Inregistrare";}?></h1>
<?php if ($error != '') {
    echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error."</div>";} ?>
<form action="" method="post">
    <div>
        <?php if ($_GET['id'] != '') { ?>
        <input type="hidden" name="id" value="<?php echo $_GET['id'];?>"/>
        <p>ID: <?php echo $_GET['id'];
            if ($result = $mysqli->query("SELECT * FROM reservation where reservation_id='".$_GET['id']."'"))
            {
            if ($result->num_rows > 0)
            { $row = $result->fetch_object();?></p>
        <strong>Prenume: </strong> <input type="text" name="nume" value="<?php echo$row->nume;?>"/><br/>
        <strong>Nume: </strong> <input type="text" name="code" value="<?php echo$row->code;?>"/><br/>
        <strong>Nume film: </strong> <input type="text" name="code" value="<?php echo$row->code;?>"/><br/>
        <strong>Dată: </strong> <input type="text" name="price" value="<?php echo$row->price; ?>"/><br/>
        <strong>Oră: </strong> <input type="text" name="descriere" value="<?php echo$row->descriere;?>"/><br/>
        <strong>Număr locuri: </strong> <input type="text" name="categorie" value="<?php echo $row->categorie;}}}?>"/><br/>
        <br/>
        <input type="submit" name="submit" value="Submit" />
        <a href="historybooking_admin.php">Index</a>
    </div></form></body> </html>
