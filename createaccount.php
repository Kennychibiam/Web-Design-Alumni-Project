<?php   
 include "head.php";



?>


<!DOCTYPE html>

<html>

<head>
<title>Create Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>







#createaccountform{

	position:absolute;
     top: 50%;
    left: 50%;
    margin-right: -50%;
	margin-bottom:50%;
    transform: translate(-50%, -50%);
	
}



#spancreateaccount{
	text-align:center;
	
}
form input{
	border-left:none;
    border-right:none;
	border-top:none;
	background-color:#ffffff;

	height:50px;
	
}
form input:focus{
	
	outline:none;
    box-shadow: 0 0 10px #719ECE;
	

	
}
#submitbutton{
	margin-top:30px;
	display:block;
	width:100%;
	background-color: #FF7500; 
    border: none;
    color: white;
    padding: 15px 32px;
   text-decoration: none;
   font-size: 16px;
    cursor: pointer;
	
}
#submitbutton:hover{
		background-color: #4CAF50; 

	
}
#searchwrap{
	display:none;
	
}
</style>

</head>

<body>






<div id="createaccountform">
<div  id="spancreateaccount" style="margin-bottom:30px"><span   style="font-size:30px;color:grey;">CREATE AN ACCOUNT</span></div>



<form   action="createaccount.php" method="POST" autocomplete="on" >
<div style="display:inline-block">  <input type="text" placeholder="First Name" name="firstname" style="width:300px" required>  </div>
<div style="display:inline-block;margin-left:20px" >  <input type="text" placeholder="Last Name" name="lastname"style="width:300px" required>  </div>

<div class="matricpassword" style="margin-top:50px">

<div style="display:inline-block;"><input type="email" name="email" placeholder="Email" style="width:300px" required></div>

<div  style="display:inline-block;margin-left:20px" ><input type="text" name="matricno" placeholder="Matric No" style="width:300px" required></div>
</div>

<div style="margin-top:50px;" >
<div style="display:inline-block"><span style="margin-right:10px;color:grey">(+234)</span><input type="tel" placeholder="Phone" name="phone" size="11" style="width:230px" required></div>

<div  style="display:inline-block;margin-left:20px">

<div><span style="color:grey">You can change this later</span></div>
<label style="position:relative;color:grey" for="alumni">Alumni</label> <input style="position:relative;top:20px;bottom:0px" id="alumni"type="radio" name="selectstatus" value="alumni"required>

<label style="margin-left:20px;color:grey" for="undergrad">Undergraduate</label> <input style="margin-left:20px;position:relative;top:20px" id="undergrad" type="radio" name="selectstatus" value="undergraduate" required > </div>

</div>


<div style="display:inline-block" ><input style="margin-top:50px;width:300px" type="password" name="password" placeholder="Password" value="" required></div>
<div style="display:inline-block"  ><input style="margin-top:50px;width:300px;margin-left:20px"type="password" name="confirm" placeholder="Confirm "  required></div>

<input type="submit" id="submitbutton" value="CREATE ACCOUNT" >







</form>

</div>







<script>

function userDashDropDownHover(){
document.getElementById("dashdropdown").style.display="block";
}
function userDashDropDownHoverOut(){
document.getElementById("dashdropdown").style.display="none";
}
function cartHover(){
document.getElementById("tooltip").style.display="block";
document.getElementById("tooltext").style.display="block";
document.getElementById("cartimage").src="images/cartorange.png";


}
function myAccountHover(){
document.getElementById("myaccount").style.backgroundColor="#FF7500";
document.getElementById("myaccountspan").style.color="white";
document.getElementById("myaccountimage").src="images/dashboardwhite.png";



}
function loginHover(){
document.getElementById("login").style.backgroundColor="#FF7500";
document.getElementById("loginspan").style.color="white";
document.getElementById("loginimage").src="images/loginwhite.png";
}

function loginHoverOut(){
document.getElementById("login").style.backgroundColor="white";
document.getElementById("loginspan").style.color="black";
document.getElementById("loginimage").src="images/login.png";
}

function myAccountHoverOut(){
document.getElementById("myaccount").style.backgroundColor="white";
document.getElementById("myaccountspan").style.color="black";
document.getElementById("myaccountimage").src="images/dashboard.png";

}

function cartHoverOut(){
document.getElementById("tooltip").style.display="none";
document.getElementById("tooltext").style.display="none";
document.getElementById("cartimage").src="images/cart.png";

}
</script>



</body>

</html>

​<?php
      
	$formNames=["matricno","firstname","lastname","email","phone","password","confirm","selectstatus"];
	$canProcess=true;
	
	foreach($formNames as $field){
		if(!isset($_POST[$field])){
			$canProcess=false;
			
		}
	}

	if($canProcess){
$host = "localhost";
$username = "root";
$databasepassword = "database1234567";
$databasename= "alumni_donate";


$matricno= $_POST["matricno"];
$firstname= $_POST["firstname"];
$lastname= $_POST["lastname"];
$email= $_POST["email"];
$phone= $_POST["phone"];
$password= $_POST["password"];
$confirm= $_POST["confirm"];
$status= $_POST["selectstatus"];





if($password==$confirm){
 
 
$conn=mysqli_connect($host,$username,$databasepassword,$databasename);
if(!$conn){

	die("Connection failed: " . mysqli_connect_error());

	
}
else{
	
	$sql="Insert Into user(matricno,firstname,lastname,email,phone,password,status) VALUES($matricno,'$firstname','$lastname','$email','$phone','$password','$status');";
	mysqli_query($conn, $sql);
	mysqli_close($conn);
	
	$_SESSION["firstname"]=$firstname;
	$_SESSION["lastname"]=$lastname;
	$_SESSION["status"]=$status;
	$_SESSION["matricno"]=$matricno;
	$_SESSION["email"]=$email;
	$_SESSION["password"]=$password;
	$_SESSION["phone"]=$phone;
    $_SESSION["isLoggedIn"]=true;

	
				echo "<script> window.location.assign('dashboard.php'); </script>";

	
}
}
	else{
		
	}
	
	}
	



?>



