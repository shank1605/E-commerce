<?php include('header.php'); ?>
<!-- header ended -->
 
 
<?php include('nav.php'); ?>
<!-- menu ended -->
 
 
 
<?php include('slider.php'); ?> 
 <!-- slider ends -->

<script>
	function getCity(sid)
	{
		var xhttp=new XMLHttpRequest()
		xhttp.open('GET','city.php?sid='+sid,true)
	  xhttp.send()
	  
	  xhttp.onreadystatechange=function()
	   {
	     if(xhttp.readyState==4 && xhttp.status==200)
	     {
	      document.getElementById('city').innerHTML=xhttp.responseText
	     }
	   }
	}
</script> 

 
	<div id="page">
		<div id="content">
			<div class="box">
				<h2>Register here!!!</h2>
				
				<form method="post">
				<table>
				 <tr>
				 <td>Name</td>
				 <td><input type="text" name="nm"/></td>
				 </tr>
				 <tr>
				 <td>Email(Username)</td>
				 <td><input type="text" name="unm"/></td>
				 </tr>
				 <tr>
				 <td>Password</td>
				 <td><input type="password" name="pass"/></td>			</tr>
				  <tr>
				 <td>Phone</td>
				 <td><input type="text" name="phone"/></td>			</tr>
				 <tr>
				 <td>Address</td>
				 <td><textarea rows='5' cols='27' name="address"></textarea></td>
				 </tr>
				 
				 <tr>
				 <td>Gender</td>
				 <td>
				 Male <input type="radio" name="gender" value="male"/>
				 &nbsp;&nbsp;
				 Female <input type="radio" name="gender" value="female"/>
				 </td>
				 </tr>
				 
				 <tr>
				 <td>State</td>
				 <td>
				 <select onchange="getCity(this.value)" name="state">
				 <option>Select state</option>
				 <?php
$query="select * from state";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)):
 echo "<option value='$row[0]'>$row[1]</option>";
endwhile;
?>
				 </select>
				 </td>
				 </tr>
				 
				 <tr>
				 <td>City</td>
				 <td>
				 <select name="city" id="city">
				 <option>Select city</option>
				 </select>
				 </td>
				 </tr>
				 
			<tr>
				 <td><input type="submit" name="s" value="Register" /></td>
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
 $query="insert into register values(NULL,'$nm','$unm','$pass','$phone','$address','$gender',$state,$city,'user')";
 if(mysqli_query($con,$query)):
 	
$ch = curl_init();
$user="bankeyshashank@gmail.com:123456";
$receipientno=$phone;
$senderID="TEST SMS";
$msgtxt="Welcome to PostKrde.com.....";
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
curl_close($ch);
 	
echo "<script>window.location='http://localhost/phpbatch34/myapp/emailapi/examples/myemail.php?emailid=$unm&nm=$nm'</script>"; 	
endif;
}
?>













