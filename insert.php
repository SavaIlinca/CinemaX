<?php
    include('config.php');
    

if(isset($_POST['submit1'])){
    
    $id = isset($_POST['id']);
    $first_name = $_POST['first_name'] ;
    $last_name = $_POST['last_name'] ;
    $movie_name= $_POST['movie_name'] ;
    $date = $_POST['date'] ;
    $time = $_POST['time'] ;
    $seats = $_POST['seats'] ;

       $query = "insert into reservation (id,first_name,last_name,movie_name,date,time,seats) values ('$id', '$first_name', '$last_name', '$movie_name', '$date', '$time', '$seats')" ;
       $run = mysqli_query($con, $query) or die(mysql_error($con));

       if($run){
           echo ("<script LANGUAGE='JavaScript'>
            window. alert('Rezervarea a fost realizată cu succes');
			window. location. href='index.php';
			</script>");

       }
       else{
           echo "Rezervarea nu s-a putut realiza" ;


    }
}
        
else {
        echo "Toate câmpurile sunt obligatorii!" ;


    }
   
    

?>