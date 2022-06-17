<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}
              
.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="registration.php">Registration</a></li>
  <li><a href="addproduct.php">Add Product</a></li>
  <li><a class="active" href="product.php">Product</a></li>
  <li><a href="table.php">View</a></li>
</ul>
<h3><center>PRODUCT</center></h3>
                <p align="center">
					These are the <b>PRODUCT</b> Available in the company.</ul>
				</p>
			   &nbsp;
			   
			   <!-- Nav -->
<!-- Main -->
<div class="container">
<?php
								include 'config.php';
								$sql1 = "select * from aproduct";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$name=$row1['aname'];
						
						$pprice=$row1['price'];
								$image=$row1['aimage'];
								?>
    <div class="row" style="float: right; width: 30%">
      <div class="col">
        <div class="card" style="width: 20rem;">
			 <img src="image/<?php echo $image; ?>" alt="<?php echo $image; ?>" style="height:200px;width:300px;">
				<div class="card-block">
					            <h3><?php echo $name; ?></h3>
								<p>Rs. <?php echo $pprice; ?></p>
				<form method="post" action="">
				<input type="text" name="id[]" value="<?php echo $id; ?>" hidden="true">
				<input type="submit" name="delete" value="Delete" id="button">
				</form>
				</div>
		</div>
	</div>
</div>
<?php
if(isset($_POST['delete']))
{
	foreach ($_POST['id'] as $key => $value) 
	{	
		$selectid=$value;	
	}
	$query1 = "delete from aproduct where id='".$selectid."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	echo "<script> location.href='product.php'; </script>";
}
?>
<?php
								}
								}
								?>
</body>
</html>

