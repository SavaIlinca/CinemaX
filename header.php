<?php
include('config.php');
session_start();
date_default_timezone_set('Europe/Bucharest');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>CINEMAX</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="header">
	<div class="header-top">
		<div class="wrap">
			<div class="h-logo">
			<a href="index.php"><img src="images/logo.png" alt="Logo Image Here"/></a>
		</div>
			  <div class="nav-wrap">
					<ul class="group" id="example-one" >
			           <li><a href="index.php" >Acasă</a></li>
			  		   <li><a href="movies_events.php">Filme</a></li>
			  		   <li><?php if(isset($_SESSION['user'])){
			  		   $us=mysqli_query($con,"select * from registration where user_id='".$_SESSION['user']."'");
        $user=mysqli_fetch_array($us);?><a href="historybooking.php"><?php echo $user['name'];?></a><a href="logout.php">Delogare</a><?php }else{?><a href="login.php">Autentificare</a> <a href="registration.php">Înregistrare</a><?php }?></li>
			          <li><a href="reservation.php">Rezervare</a></li>
				</ul>
			  </div>
 			<div class="clear"></div>
			
   		</div>
		
    </div>
     			<div class="clear"></div>
   	
<div class="block">
	<div class="wrap">
		
        <form action="process_search.php" id="reservation-form" method="post">
		       <fieldset>
		       	<div class="field" >
		       	
		       		     
                                <input type="text" placeholder="Introdu numele filmului" style="height:30px;width:300px"  required id="search111" name="search">
                                
                                <input type="submit" value="Căutare" style="height:34px;padding-top:3px" id="button111">
    </div>       	

		       </fieldset>
            </form>
            <div class="clear"></div>
   </div>
</div>

</body>
</html>