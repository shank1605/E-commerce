<?php include('header.php'); ?>
<!-- header ended -->
 
 
<?php include('nav.php'); ?>
<!-- menu ended -->
 
 
 
<?php include('slider.php'); 
$scnm=$_REQUEST['scnm'];
$query="select * from product where scnm='$scnm' order by pid desc";
$res=mysqli_query($con,$query);
$num=mysqli_num_rows($res);
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
				<h4>Product list  >>  <?php echo $scnm; ?></h4>
				<p>Total Products : <?php echo $num; ?></p>
				
<?php
while($row=mysqli_fetch_array($res)):

$name=$row[1];
$price=$row[2];
$item_no=1;
?>

<table height='150' width='600' style="border:3px solid rgb(0, 125, 125);border-radius:30px;">
<tr>
<td width='40%' rowspan="3">
<center>
<img src="uploads/<?php echo $row[5]; ?>" height='100' width='150' />
</center>
</td>
<td><b>Product-Name : <?php echo $name; ?></b></td>
</tr>
<tr>
<td><b>Product-Price : &#8377; <?php echo $price; ?></b></td>
</tr>
<tr>
<td>
<a href="login.php?pid=<?php echo $row[0]; ?>">Purchase Product</a>
</td>
</tr>
</table>
<br/><br/>


<?php
endwhile; 
?>
				
				
			</div>
			
			<br class="clearfix" />
		</div>
		<div id="sidebar">
			<div class="box">
				<h3>Categories list</h3>
				<ul class="list">
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
