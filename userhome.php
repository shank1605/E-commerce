<?php include('header.php'); ?>
<!-- header ended -->
 
 
<?php include('usernav.php'); ?>
<!-- menu ended -->
 
 
	<div id="page">
	<center>	
				<h2>Welcome to User panel</h2>
			<?php
				if(isset($_SESSION['sunm']))
				{
				  echo '<h3> welcome user: '.$_SESSION['sunm'].'</h3>';
				}
				?>
	</center>	
	</div>
 <!-- page ends -->
 
 
</div>
<!-- wrapper ended --> 
 
<?php include('footer.php'); ?> 
