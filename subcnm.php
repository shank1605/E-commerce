<option>Select sub category</option>
<?php
$cnm=$_REQUEST['cnm'];
$con=mysqli_connect('localhost','root','root','phpbatch34') or die("<h1>Problem in db connection</h1>");
$query="select * from subcat where cnm='$cnm'";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)):
 echo "<option>$row[1]</option>";
endwhile;
?>
