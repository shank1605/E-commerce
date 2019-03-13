<?php include('header.php'); ?>
<!-- header ended -->
 
 
<?php include('nav.php'); ?>
<!-- menu ended -->
 
 
 
<?php include('slider.php'); ?> 
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
				<h2>Welcome to Profile Maker</h2>
				<h4>Category list</h4>
				
				<div id="catdiv">
				

<?php
        $query="select * from cat order by cid desc  limit 9";
				$res=mysqli_query($con,$query);
				while($row=mysqli_fetch_array($res)):
?>
				<a href="showsubcat.php?cnm=<?php echo $row[1]; ?>">
				<div id="catdivp">
				<center>
				<img src="uploads/<?php echo $row[2]; ?>" height='100' width='150' />
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
				<h3>Social Links</h3>
				<ul class="list">
					<li class="first"><a href="#">Facebook</a></li>
					<li><a href="#">LinkedIn</a></li>
					<li><a href="#">Gmail</a></li>
					<li><a href="#">Twitter</a></li>
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
