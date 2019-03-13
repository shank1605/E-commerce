<?php include('header.php'); ?>
<!-- header ended -->
 
 
<?php include('adminnav.php'); ?>
<!-- menu ended -->
 
 
	<div id="page">
	<center>	
				<h2>Add Sub-Category Here!!!</h2>
			  <form method="post" enctype="multipart/form-data">

			  <label>Sub Category name</label>
			  <input type="text" name="scnm" />
  			<br/><br/>
  			<label>Select Category</label>
        <select  name="cnm">
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
  			<label>Select Category icon</label>
        <input type="file" name="cicon"/>
        <br/><br/>
        <input type="submit" name="s" value="Add  Sub Category" />			  
			  
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
 $scnm=$_REQUEST['scnm'];
 $cnm=$_REQUEST['cnm'];
 $fnm=time().'-'.$_FILES['cicon']['name'];
 $tmp_name=$_FILES['cicon']['tmp_name'];
 $destination="uploads/$fnm";
 $res=move_uploaded_file($tmp_name,$destination);
 
 $query="insert into subcat values(NULL,'$scnm','$cnm','$fnm')";
 $res1=mysqli_query($con,$query);
 
 if($res && $res1):
 	echo "<script>alert('Sub-Category added successfully');</script>";
 else:
  echo "<script>alert('Sub-Category not added');</script>"; 
 endif; 
 echo "<script>window.location='addsubcat.php'</script>";
 
}
?>









