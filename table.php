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
  <li><a href="product.php">Product</a></li>
  <li><a class="active" href="table.php">View</a></li>
</ul>
<?php
include 'config.php';
$sql1 = "select * from registration";
$result1 = mysqli_query($con,$sql1);
$num1=mysqlI_num_rows($result1);
$sl=0;
if($num1 > 0)
{
while($row1 = mysqli_fetch_array($result1))
{
$sl+=1;
$id=$row1[0];
$image=$row1['image'];
$fname=$row1['fname'];
$mname=$row1['mname'];
$lname=$row1['lname'];
$email=$row1['email'];
$faname=$row1['father'];
$faoccu=$row1['fo'];
$maname=$row1['mother'];
$maoccu=$row1['mo'];
$add=$row1['cadd'];
$padd=$row1['padd'];
$dob=$row1['dob'];
$age=$row1['age'];
$gender=$row1['gender'];
}
}
?>
<form actiom="#" method="POST" enctype="multipart/form-data">
<table border="1px">
<thead>
<tr>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Father Name</th>
<th>Father Occupation</th>
<th>Mother Name</th>
<th>Mother Occupation</th>
<th>Current Address</th>
<th>Permanent Addtress</th>
<th>Date_of_birth</th>
<th>Age</th>
<th>Gender</th>
<th>Image</th>
</tr>
<tr>
<td><?php echo $fname; ?></td>
<td><?php echo $mname; ?></td>
<td><?php echo $lname; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $faname; ?></td>
<td><?php echo $faoccu; ?></td>
<td><?php echo $maname; ?></td>
<td><?php echo $maoccu; ?></td>
<td><?php echo $add; ?></td>
<td><?php echo $padd; ?></td>
<td><?php echo $dob; ?></td>
<td><?php echo $age; ?></td>
<td><?php echo $gender; ?></td>
<td><img class="card-img-top" src="image/<?php echo $image; ?>" alt="<?php echo $image;?>" height="200" width="200"></td>
</form>

</table>
</body>
</html>