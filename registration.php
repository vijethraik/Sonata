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
#bg {
    background-color:maroon;
    border:2px solid whitesmoke;
  
    padding: 40px;
    position: absolute;
    margin-left: 340px;
    margin-top: 10px;
    height: 1200px;
    width: 780px;
    line-height:0px;
  }
  
  h1 {
    color: lightsalmon;
    text-align: center;
    padding: 0px;
    font-size: 30px;
  }
  #form {
    background-color:lightsalmon;
    border: 2px solid black;
  
    padding: 40px;
    position: absolute;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
    height: 950px;
    width: 700px;
    line-height:0px;
  }
  #table{
  
      height: 950px;
      width: 700px;
      text-align: justify;
      color: white;
      font-weight: bold;
      font-style: normal;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      
     
  }
  th{
    text-align: center;
  }
  td{
padding: 2px;
    justify-content: left;

      
  }
  
  tr{
  
    
  padding: 30px;
    width: 200px;
    border-collapse: separate;


    text-align: left;
  
  }
  #submit_p1{
    text-align: center;
    font-weight: bolder;
    font-size: xx-large;
    color:lawngreen;


  }

  #submit_p2{
    text-align: center;
    font-size: xx-large;
    font-weight: bold;
    color: purple;
  }

  a{
    text-align: center;
    font-size: xx-large;
    font-weight: bold;
    color: slateblue;

  }
  input,select {

    color: #5a5854;
    background-color: #f2f2f2;
    padding: 4px 4px 4px 2px;
    border-radius: 10px;
    
  
    margin-bottom: 1px;
}
    input:focus {
    background-color: #ffffff;
    border: 2px solid #b1e1e4;
    border-spacing: 2px 2px 2px 2px;
    
  }
    input#email {
    background-image:url("images/user-logo.png");
  
  background-repeat: no-repeat;
background-position: 1px;
background-size: 25px 25px;
padding: 4px;


margin-bottom: 10px;
    }
    input#twitter {
    background-image: url("");
  }
</style>
</head>
<body>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a class="active" href="registration.php">Registration</a></li>
  <li><a href="addproduct.php">Add Product</a></li>
  <li><a href="product.php">Product</a></li>
  <li><a href="table.php">View</a></li>
</ul>
</head>
 
<body>
<body>
<center>
    <div id="bg">
      <br>
      
       
        <b><u> <h1 >STUDENT REGISTRATION FORM</h1></u> </b> 
        <div id="form">
            <form action="#" method="post" enctype="multipart/form-data">
                <table id="table">
                    <tr>
                        <td>FIRST NAME:</td>
                        <td>
                            <input type="text" name="fname" size="30"
                            maxlength="30" placeholder="Enter first name" />
                        </td>
                    </tr>
					<tr>
                        <td>MIDDLE NAME:</td>
                        <td>
                            <input type="text" name="mname" size="30"
                            maxlength="30" placeholder="Enter middle name" />
                        </td>
                    </tr>
                    <tr>
                        <td>LAST NAME:
                            </td>
                        <td><input type="text" name="lname" size="30"
                            maxlength="30" placeholder="Enter last name" /> 
                            </td>
                    </tr>
					<tr>
                        <td>FATHER NAME:</td>
                        <td><input type="text" name="father" size="30"
                            maxlength="30" placeholder="Enter father name" /> 
                            </td>
                    </tr>
					<tr>
                        <td>FATHER OCCUPATION:</td>
                        <td><input type="text" name="fo" size="30"
                            maxlength="30" placeholder="Enter father occupation" /> 
                            </td>
                    </tr>
					<tr>
                        <td>MOTHER NAME:</td>
                        <td><input type="text" name="mother" size="30"
                            maxlength="30" placeholder="Enter mother name" /> 
                            </td>
                    </tr>
					<tr>
                        <td>MOTHER OCCUPATION:</td>
                        <td><input type="text" name="mo" size="30"
                            maxlength="30" placeholder="Enter mother occupation" /> 
                            </td>
                    </tr>
					<tr>
                        <td>EMAIL ID:
                            </td>
                        <td><input id="email" type="email" name="email" size="30" maxlength="100" />
                        </td>
                    </tr>
					<tr><td>CURRENT ADDRESS:</td>
                    <td><input type="text" name="cadd" rows="4" cols="40" id="comments">
                    </td></tr>
                    <tr><td>PERMANENT ADDRESS:</td>
                    <td><input type="text" name="padd" rows="4" cols="40" id="comments">
                    </td></tr>

					<tr><td>
                        DATE OF BIRTH:
                    </td>
                          <td>
                            <input type="date" name="dob">
                           
                          </td>  
                    </tr>
					<tr>
                        <td>AGE:</td>
                        <td><input type="text" name="age" size="30"
                            maxlength="30" placeholder="Enter age" /> 
                            </td>
                    </tr>
                    
                   
                    <tr>
                        <td>GENDER:</td>
                        <td><input id="female" type="radio" name="gender"
                            value="f">
                            <label for="female">Female</label>
                            <input id="male" type="radio" name="gender"
                            value="m">
                            <label for="male">Male</label>
                            </td>
                    </tr>
					</td>
					<tr>
                          <td>
                            <input type="file" name="image">
                           
                          </td>  
                    </tr>
                    
                    
                    
                <tr>
                    <td><center>
                        <button type="submit" name="register">Register</button>
						</center>
                </td>
                </tr>

                    
                
                    


                    
                </table>
            </form>


        </div>
 
     </div>
	 </center>
	 <?php
if(isset($_POST['register']))
{
error_reporting(1);
include("config.php");

$Email=$_POST['email'];

$sql = "select * from registration where email='$Email'";
$result = mysqli_query($con,$sql);
$count=mysqlI_num_rows($result);


if($count>0)
{

echo "<script>
alert('There is an existing account associated with this email.');
</script>";
echo "<script> location.href='registration.php'; </script>";
}
else
{
$FName=$_POST['fname'];
$MName=$_POST['mname'];
$LName=$_POST['lname'];
$Email=$_POST['email'];
$Father=$_POST['father'];
$FO=$_POST['fo'];
$Mother=$_POST['mother'];
$MO=$_POST['mo'];
$Caddress=$_POST['cadd'];
$Paddress=$_POST['padd'];
$Dob=$_POST['dob'];
$Age=$_POST['age'];
$Gender=$_POST['gender'];



$fname = $_FILES["image"]["name"];
$filename = $FName.$fname;
$tempname = $_FILES["image"]["tmp_name"];  
$folder = "image/".$filename;
 if (move_uploaded_file($tempname, $folder))  {

$query = "insert into registration(fname,mname,lname,email,father,fo,mother,mo,cadd,padd,dob,age,gender,image) values('".$FName."','".$MName."','".$LName."','".$Email."','".$Father."','".$FO."','".$Mother."','".$MO."','".$Caddress."','".$Paddress."','".$Dob."','".$Age."','".$Gender."','".$filename."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));


echo "<script>
alert('Registeration Completed, Please Login.');
</script>";
echo "<script> location.href='registration.php'; </script>";
}
else{
            echo "<script>
					alert('Upload Failed, IMAGE should be less than 2GB');
				</script>";
      }
}
}

?>
    
</body>
</body>
</html>
</body>
</html>