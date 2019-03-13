<?php
if(!isset($_SESSION['sunm']) || $_SESSION['srole']!='user')
{
	echo "<script>alert('Invalid user please login first, IP tracking')</script>";
	echo "<script>window.location='login.php'</script>";
}
?>
 <div id="menu">
		<ul>
   <li class="first"><a href="userhome.php">User Home</a></li>
	    <li >
				<span class="opener">Manage Product<b></b></span>
				<ul>
					<li><a href="addproductuser.php">Add Product</a></li>
					<li><a href="">Manage Product</a></li>
				</ul>
			</li>
			<li >
				<span class="opener">Account settings<b></b></span>
				<ul>
					<li><a href="">View Profile</a></li>
					<li><a href="">Change Password</a></li>
					<li><a href="login.php">Logout</a></li>
				</ul>
			</li>
		</ul>
		<br class="clearfix" />
	</div>
