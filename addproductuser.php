<?php include('header.php'); ?>
<!-- header ended -->
 
 
<?php include('usernav.php'); ?>
<!-- menu ended -->

<script>
function getSubCat(cnm)
{
  var xhttp=new XMLHttpRequest()
		xhttp.open('GET','subcnm.php?cnm='+cnm,true)
	  xhttp.send()
	  
	  xhttp.onreadystatechange=function()
	   {
	     if(xhttp.readyState==4 && xhttp.status==200)
	     {
	      document.getElementById('scnm').innerHTML=xhttp.responseText
	     }
	   }
}
</script> 
 
	<div id="page">
	<center>	
	<h2>Add Product Here!!!!</h2>
	<form method="post" enctype="multipart/form-data">
	
	<label>Product Name</label>
	<input type="text" name="pnm" />
	<br/><br/>
	
	<label>Product Price</label>
	<input type="text" name="price" />
	<br/><br/>
	
	<label>Select category</label>
	<select onchange="getSubCat(this.value)"  name="cnm">
				 <option>Select category</option>
				 <?php
$query="select * from cat";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result)):
 echo "<option>$row[1]</option>";
endwhile;
?>
				 </select>
	<br/><br/>
	
	<label>Select sub category</label>
	<select name="scnm" id="scnm">
				 <option>Select sub category</option>
	</select>
	<br/><br/>
	
	<label>Product image</label>
	<input type="file" name="picon" />
	<br/><br/>
	
	<input type="submit" name="s" value="Add Product" />
	
	</form>			
	</center>	
	</div>
 <!-- page ends -->
 
 
</div>
<!-- wrapper ended --> 
 
<?php include('footer.php'); ?> 
<?php
if(isset($_REQUEST['s']))
{
  extract($_REQUEST);
  $fnm=time().'-'.$_FILES['picon']['name'];
 $tmp_name=$_FILES['picon']['tmp_name'];
 $destination="uploads/$fnm";
 $res=move_uploaded_file($tmp_name,$destination);
 
 $query="insert into product values(NULL,'$pnm','$price','$cnm','$scnm','$fnm')";
 $res1=mysqli_query($con,$query);
 
 if($res && $res1):
 	echo "<script>alert('Product added successfully');</script>";
 else:
  echo "<script>alert('Product not added');</script>"; 
 endif; 
 echo "<script>window.location='addproductuser.php'</script>";
}
?>




