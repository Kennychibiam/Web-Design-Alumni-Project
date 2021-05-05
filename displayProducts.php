<?php
session_start();
include "head.php";
?>

<!DOCTYPE html>
<html>

<style>
#product{
	text-align:center;
	position:relative;
	width:100%;
	margin:auto;
}
#productImage{
		margin-top:160px;
       object-fit: cover;
}
#prodcutName{}
#productDescription{}
#alumniName{}
#requestProduct{
     margin:auto;
	 margin-top:20px;
	 margin-bottom:200px;
	display:block;
	width:auto;
	background-color: #FF7500; 
    border: none;
    color: white;
    padding: 15px 32px;
   text-decoration: none;
   font-size: 16px;
    cursor: pointer;
    white-space: nowrap;
	
}
button:focus{
	
	outline:none;
    box-shadow: 0 0 10px #719ECE;
	

	
}

</style>

<body>
<div id="product">
<div>
<img id="productImage" width=300;height=300; src="images/defaultuserPic.png"/>

</div>
<div>
<span id="alumniName"> Product Owner</span>
</div>
<div><span id="productID"></span></div>
<div><span id="productName"></span></div>
<div><span id="productDescription"></span></div>
<button id="requestProduct">ADD TO CART</button>
</div>
</body>

</html>



<?php

$host = "localhost";
$username = "root";
$databasepassword = "database1234567";
$databasename= "alumni_donate";




 $conn=mysqli_connect($host,$username,$databasepassword,$databasename);
 if(!$conn){
	 
	 	die("Connection failed: " . mysqli_connect_error());

	 
 }
 else{
	 $matricno=$_SESSION["matricno"];
	 
	$sql="SELECT firstname,lastname FROM user WHERE matricno= $matricno"; 
    $result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0){
		 
		while($row=mysqli_fetch_assoc($result)){
			
			
			$_SESSION["temp_firstname"]=$row["firstname"];
			$_SESSION["temp_lastname"]=$row["lastname"];

		}

	}
 mysqli_close($conn);}

?>
<script>

var productImage="<?php   echo $_SESSION['productImage']; ?>";
var productID="<?php   echo $_SESSION['itemID']; ?>";
var productDescription="<?php   echo $_SESSION['itemDescription']; ?>";
var alumniName="<?php   echo $_SESSION['temp_firstname']; ?>";
var alumni_lastname="<?php   echo $_SESSION['temp_lastname']; ?>";
var productName="<?php   echo $_SESSION['itemName']; ?>";


document.getElementById("productImage").src=""+productImage;
document.getElementById("productName").innerHTML="Name: "+productName;
document.getElementById("productID").innerHTML="Product ID: "+"#"+productID;

document.getElementById("productDescription").innerHTML="Description: "+productDescription;
document.getElementById("alumniName").innerHTML="Product Owner: "+alumniName+" "+alumni_lastname;

</script>