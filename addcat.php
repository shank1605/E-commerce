<?php include('header.php'); ?>
<!-- header ended -->
 
 
<?php include('adminnav.php'); ?>
<!-- menu ended -->
 
 
	<div id="page">
	<center>	
				<h2>Add Category Here!!!</h2>
			  <form method="post" enctype="multipart/form-data">

			  <label>Category name</label>
			  <input type="text" name="cnm" />
  			<br/><br/>
  			<label>Select Category icon</label>
        <input type="file" name="cicon"/>
        <br/><br/>
        <input type="submit" name="s" value="Add Category" />			  
			  
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
 $cnm=$_REQUEST['cnm'];
 $fnm=time().'-'.$_FILES['cicon']['name'];
 $tmp_name=$_FILES['cicon']['tmp_name'];
 $destination="uploads/$fnm";
 $res=move_uploaded_file($tmp_name,$destination);
 
 $query="insert into cat values(NULL,'$cnm','$fnm')";
 $res1=mysqli_query($con,$query);
 
 if($res && $res1):
 	echo "<script>alert('Category added successfully');</script>";
 else:
  echo "<script>alert('Category not added');</script>"; 
 endif; 
 echo "<script>window.location='addcat.php'</script>";
 
}
?>









