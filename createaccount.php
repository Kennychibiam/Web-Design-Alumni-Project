


<!DOCTYPE html>

<html>

<head>
<title>Create Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

body{
background-color: #ffffff;

}

.header{
background-color:#ffffff;
padding:10px;

position:fixed;
top:0px;
left:0px;
right:0px;
z-index:30px;
}
#dashdropdown  {
  position:absolute;
  z-index: 2;
  min-width:170px;
  height:auto;
  background-color:#FFFFFF;opacity:0.9;
  display:none;
  padding-top:7px;
}

.usericons{
   top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  display:inline-block;
  position:absolute;
  right:45px;
}
div#dashdropdown a{
text-decoration:none;
color:black;
}

#tooltip{
  position:absolute;
  border-radius: 6px;
  background-color:#FFFFFF;opacity:0.9;
  min-width:80px;
  margin-top:5px;
    display:none;

}
#tooltext{
  text-align:center;
  font-size:18px;
    display:none;

}
#cartlink{
	text-decoration:none;
	color:black;
	
}
#myaccount{
padding-left:8px;
padding-right:8px;
margin:auto;
}



.header a[href="#index"]{
text-decoration:none;
color:black;
}


form{
	
}

#createaccountform{

	position:absolute;
     top: 50%;
    left: 50%;
    margin-right: -50%;
	margin-bottom:50%;
    transform: translate(-50%, -50%);
	
}

#login{
padding-left:8px;
padding-right:8px;
margin:auto;
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

</style>

</head>

<body>
<div class="header">
<a href="#index" >
<span style="font-size:35px;font-family:Verdana,sans-serif;">
<img src="images/alumnicon.png" width="50px" height="50px" style="vertical-align:middle"/>AlumniDonate</span>
</a>



<div class="usericons">



<div id="dashboardinfo" style="margin-right:20px; display:inline-block; position:relative" onmouseover="userDashDropDownHover()" onmouseout="userDashDropDownHoverOut()">

<a href="">

<img src="images/user.png" width="50px" height="35px" />
</a>
<div id="dashdropdown">
<div id="myaccount" style="padding-bottom:13px;" onmouseover="myAccountHover()" onmouseout="myAccountHoverOut()">

<a href="">
<span id="myaccountspan" > <img id="myaccountimage" src="images/dashboard.png" width="20px" height="20px" style="vertical-align:middle;margin-right:10px"/>My Account</span>
</a>
</div>
<a href="login.php" target="_blank">
<div style="padding-bottom:13px;" id="login" onmouseover="loginHover()" onmouseout="loginHoverOut()" >

<span  id="loginspan"><img id="loginimage" src="images/login.png" width="20px" height="20px" style="vertical-align:middle;margin-right:10px"/>Login/Sign Up</span>
</div>
</a>
</div>

</div>

<a id="cartlink" href="">
<div id="cart" style="display:inline-block; position:relative" >


<img src="images/cart.png" id="cartimage" width="50px" height="35px" onmouseover="cartHover()" onmouseout="cartHoverOut()"/>

<div id="tooltip" >
<span id="tooltext">View Cart</span>
</div>
​</div>
</a>
</div>

</div>






<div id="createaccountform">
<div  id="spancreateaccount"><span   style="font-size:30px;color:grey;">CREATE AN ACCOUNT</span></div>



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

<input type="submit" id="submitbutton" value="CREATE ACCOUNT" onsubmit="processLogIn()">







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

	echo "<br><br>$canProcess";
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
}
}
	else{
		
	}
	
	}
	



?>



