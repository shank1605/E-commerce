<?php
if(isset($_SESSION['sunm']))
{
	session_destroy();
}
?>
 <div id="menu">
		<ul>
   <li class="first"><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
   <li><a href="contact.php">Contact</a></li>
   <li >
				<span class="opener">Services<b></b></span>
				<ul>
					<li><a href="service.php">Service 1</a></li>
					<li><a href="#">Service 2</a></li>
				</ul>
			</li>
			<li><a href="register.php">Register</a></li>
			<li class="last"><a href="login.php">Login</a></li>
		</ul>
		<br class="clearfix" />
	</div>
