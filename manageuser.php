<?php include('header.php'); ?>
<!-- header ended -->
 
 
<?php include('adminnav.php'); ?>
<!-- menu ended -->
 
 
	<div id="page">
	<center>	
	<h2>View All User's List</h2>
	<table border='3' cellspacing='5' cellpadding='5'>
	<tr>
		<th>RegID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Address</th>
		<th>Gender</th>
		<th>Action</th>
	</tr>
	<?php
	$query="select * from register where role='user'";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)):
		echo "<tr>";
		echo "<td>$row[0]</td>";
		echo "<td>$row[1]</td>";
		echo "<td>$row[2]</td>";
		echo "<td>$row[4]</td>";
		echo "<td>$row[5]</td>";
		echo "<td>$row[6]</td>";
		echo "<td><a href='manageuser.php?regid=$row[0]' title='Delete User'><img src='images/delete.png' height='50' width='50' /></a></td>";
		echo "</tr>";
	endwhile;
	?>		  
	</table>
	</center>	
	</div>
 <!-- page ends -->
 
 
</div>
<!-- wrapper ended --> 
 
<?php include('footer.php'); ?> 
<?php
if(isset($_REQUEST['regid']))
{
	$regid=$_REQUEST['regid'];
	$query="delete from register where regid=$regid";
	if(mysqli_query($con,$query)):
 	echo "<script>alert('User deleted');</script>";
 else:
  echo "<script>alert('Deletion failed');</script>"; 
 endif; 
 echo "<script>window.location='manageuser.php'</script>";
}

?>

















