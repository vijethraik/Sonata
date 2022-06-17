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
  <li><a  href="home.php">Home</a></li>
  <li><a href="registration.php">Registration</a></li>
  <li><a class="active" href="addproduct.php">Add Product</a></li>
  <li><a href="product.php">Product</a></li>
  <li><a href="table.php">View</a></li>
</ul>
<form action="#" method="post" enctype="multipart/form-data">
<center>
<p align="center"><h2>AddProduct</h2></p>
<table border="1">
<tbody>
  <tr>
    <td>Add Images</td>
    <td><input type="file" name="image"></td>
  </tr>
    <tr>
    <td>Add Name</td>
    <td><input type="text" name="addname"></td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="addprice"></td>
  </tr>
  <tr>
  <td><center><input type="submit" name="Add"></center></td>
  </tr>
  </tbody>
</table>
</center>
</form>
<?php 
// Include the database configuration file  
include 'config.php'; 
if(isset($_POST["Add"]))
{ 
	$name=$_POST['addname'];
	$pprice=$_POST['addprice'];
    $fname = $_FILES["image"]["name"];
	$filename = $name.$fname;
    $tempname = $_FILES["image"]["tmp_name"];   
        $folder = "image/".$filename;
        
         
              if (move_uploaded_file($tempname, $folder))  {
			
        $sql = "INSERT INTO aproduct (aname,price,aimage) VALUES ('".$name."','".$pprice."','".$filename."')";
		mysqli_query($con, $sql);
           echo "<script>
					alert('Upload Successful');
				</script>";
        }else{
            echo "<script>
					alert('Upload Failed, IMAGE should be less than 2GB');
				</script>";
      }
} 
?>
</body>
</html>
