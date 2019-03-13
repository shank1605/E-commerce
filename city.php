<option>Select city</option>
<?php
$sid=$_REQUEST['sid'];
$con=mysqli_connect('localhost','root','root','phpbatch34') or die("<h1>Problem in db connection</h1>");
$query="select * from city where sid=$sid";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)):
 echo "<option value='$row[0]'>$row[2]</option>";
endwhile;
?>
