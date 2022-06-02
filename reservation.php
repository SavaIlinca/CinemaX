<?php include('header.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
?>
<div class="content">
	<div class="wrap">
		<div class="content-top">
        <h2 class="text-center" style="color:#f08080;">Rezervare bilete</h2>
<!doctype html>
<html>
<style>
    label {
    color: #ffffff;
    font-weight: bold;
    display: block;
  }
   
  
  form {
    background-image: url('images/background.jpg');
  }
</style>
<head>
    <title>Rezervare</title>
    
</head>
<body>
    <form class="text-center" style="font-size:20px;" action="insert.php" method="post"> 
        <label>Nume:</label><input type="text" name="last_name"  required ><br>
        <label>Prenume:</label><input type="text" name="first_name" required><br>
        <label>Nume film:</label>
        <select id="movie_name" name="movie_name">
  <option value="In Between">In Between</option>
  <option value="The 355">The 355</option>
  <option value="Unchrated">Uncharted</option>
  <option value="Dog">Dog</option>
        </select><br>
        <label>Dată:</label>
        <select id="date" name="date">
  <option value="2022-07-27">27/07/2022</option>
  <option value="2022-07-28">28/07/2022</option>
  <option value="2022-07-29">29/07/2022</option>
  <option value="2022-07-30">30/07/2022</option>
        </select><br>
        <label>Oră:</label>
        <select id="time" name="time">
  <option value="10:00">10:00</option>
  <option value="14:00">14:00</option>
  <option value="18:00">18:00</option>
  <option value="20:00">20:00</option>
        </select><br>
        <label>Număr bilete:</label><input type="text" name="seats"><br>
        <button type="submit" name="submit1">Rezervă</button>
    </form>
    </div>
					</div>
					<div class="clear"></div>
				</div>
</body>
</html>