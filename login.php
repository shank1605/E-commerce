<?php include('header.php'); ?>
<!-- header ended -->
 
 
<?php include('nav.php'); ?>
<!-- menu ended -->
 
 
 
<?php include('slider.php'); ?> 
 <!-- slider ends -->
 
 
 
	<div id="page">
		<div id="content">
			<div class="box">
				<h2>Login here!!!</h2>
				
				<form method="post">
				<table>
				 <tr>
				 <td>Email(Username)</td>
				 <td><input type="text" name="unm"/></td>
				 </tr>
				 <tr>
				 <td>Password</td>
				 <td><input type="password" name="pass"/></td>
				 </tr>
				 
			<tr>
				 <td><input type="submit" name="s" value="Login" /></td>
				 </tr>
			  
			
				 
				</table>
				
				</form>
				
				
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
<?php
if(isset($_REQUEST['s']))
{
 extract($_REQUEST);
 $query="select * from register where unm='$unm' && pass='$pass'";
 $result=mysqli_query($con,$query);
 $num=mysqli_num_rows($result);
 if($num>0)
 {
 	echo "<script>alert('Login successfully')</script>";
 	$row=mysqli_fetch_array($result);
 	$_SESSION['sunm']=$unm;
 	$_SESSION['srole']=$row[9];
 	if($row[9]=='admin')
 		echo "<script>window.location='adminhome.php'</script>";
 	else
{ 	
if(isset($_REQUEST['pid']))
{
$pid=$_REQUEST['pid'];
	echo "<script>window.location='buyproductuser.php?pid=$pid'</script>";
}
else
{
 		echo "<script>window.location='userhome.php'</script>";	
 		}
} 		
 }
 else
 {
  echo "<script>alert('Login failed')</script>";
 }	
}
?>














