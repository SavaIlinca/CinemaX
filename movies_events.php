<?php include('header.php');?>
</div>
<div class="content">
	<div class="wrap">
		<div class="content-top">
			<center><h1 style="color:#555;">RULEAZĂ ACUM</h1></center>
			
			<?php
          	 $today=date("Y-m-d");
          	 $qry2=mysqli_query($con,"select * from movie ");
		
          	  while($m=mysqli_fetch_array($qry2))
                   {
                    ?>
                    
                    <div class="col_1_of_4 span_1_of_4">
					<div class="imageRow">
						  	<div class="single">
						  		<?php
						
						?>
						  		<a href="about.php?id=<?php echo $m['movie_id'];?>"><img src="<?php echo $m['image'];?>" alt="" /></a>
						  	</div>
						  	<div class="movie-text">
						  		<h4 class="h-text"><a href="about.php?id=<?php echo $m['movie_id'];?>" style="text-decoration:none;"><?php echo $m['movie_name'];?></a></h4>
						  		Distribuție: <Span class="color2" style="text-decoration:none;"><?php echo $m['cast'];?></span><br>
								
						  	</div>
		  				</div>
		  		</div>
		  		
  	    <?php
  	    	}
  	    	?>
			
			</div>
				<div class="clear"></div>		
			</div>
			<center><h3 style="color:#555;">PROGRAM DISPONIBIL</h3></center>
			
			<center><table style="width:70%" class="table table-hover table-bordered text-center">
								

								<thead>
										<tr>
											<th class="text-center" style="font-size:16px;"><b>Dată</b></th>
											<th class="text-center" style="font-size:16px;"><b>Oră</b></th>
											
										</tr>
									</thead>
									<tbody>
									<tr>
										
										<td >27/07/2022</td>
										<td >10:00</td>	
									</tr>
									<tr>
                                        
                                        <td>28/07/2022</td>
                                        <td>18:00</td>
                                        </tr>
									<tr>
                                       
                                        <td>29/07/2022</td>
                                        <td>14:00</td>
                                    </tr>
									<tr>
                                        
                                        <td>30/07/2022</td>
                                        <td>20:00</td>
                                    </tr>
									</tbody>
		</table></center>