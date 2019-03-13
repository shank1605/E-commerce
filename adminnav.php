<?php
if(!isset($_SESSION['sunm']) || $_SESSION['srole']!='admin')
{
	echo "<script>alert('Invalid user please login first, IP tracking')</script>";
	echo "<script>window.location='login.php'</script>";
}
?>
 <div id="menu">
		<ul>
   <li class="first"><a href="adminhome.php">Admin Home</a></li>
			<li><a href="manageuser.php">Manage Users</a></li>
      <li >
				<span class="opener">Manage App<b></b></span>
				<ul>
					<li><a href="addcat.php">Add Category</a></li>
					<li><a href="addsubcat.php">Add Sub Category</a></li>
					<li><a href="">Manage Category</a></li>
					<li><a href="">Manage Sub Category</a></li>
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
