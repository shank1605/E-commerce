<?php include('header.php'); ?>
<!-- header ended -->
 
 
<?php include('nav.php'); ?>
<!-- menu ended -->
 
 
 
<?php include('slider.php'); 
$cnm=$_REQUEST['cnm'];
?> 
 <!-- slider ends -->

  <style>
  #catdiv
  {
   height:450px;
   width:600px;
  }
  #catdivp
  {
   height:150px;
   width:200px;
   float:left;
  }
  </style>
	<div id="page">
		<div id="content">
			<div class="box">
				<h4>Sub Category list >> <?php echo $cnm; ?></h4>
				
				<div id="catdiv">
				

<?php
				$query="select * from subcat where cnm='$cnm' order by subcid desc";
				$res=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($res)):
?>
				<a href="showproductlist.php?scnm=<?php echo $row[1]; ?>">
				<div id="catdivp">
				<center>
				<img src="uploads/<?php echo $row[3]; ?>" height='100' width='150' />
				<p><b><?php echo $row[1]; ?></b></p> 
				
				</center>
				</div>
				</a>
<?php endwhile; ?>
				
				</div>
				
			</div>
			
			<br class="clearfix" />
		</div>
		<div id="sidebar">
			<div class="box">
				<h3>Categories list</h3>
				<ul class="list">
				<?php
					$query="select * from cat";
				$res=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($res)):
					echo "<li><a href='showsubcat.php?cnm=$row[1]'>$row[1]</a></li>";
				endwhile;
				?>	
				</ul>
			</div>
			
		</div>
		<br class="clearfix" />
	</div>
 <!-- page ends -->
 
 
 
<?php include('bottom.php'); ?> 
<!-- bottom ends --> 

</div>
<!-- wrapper ended --> 
 
<?php include('footer.php'); ?> 
