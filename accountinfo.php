<?php  session_start();
    
	
?>
<!DOCTYPE html>
<html>


<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
#createaccountform{

	position:relative;
	top:500;
	
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



<body>
<div id="createaccountform">
<div  id="spancreateaccount" style="margin-bottom:30px"><span   style="font-size:30px;color:grey;" >MY ACCOUNT</span></div>

<form   action="accountinfo.php" method="POST" autocomplete="on" >
<div style="display:inline-block">  <input id="firstname" type="text" placeholder="First Name" name="firstname" style="width:300px" required>  </div>
<div style="display:inline-block;margin-left:20px" >  <input id="lastname"  type="text" placeholder="Last Name" name="lastname"style="width:300px" required>  </div>

<div class="matricpassword" style="margin-top:50px">

<div style="display:inline-block;"><input id="email" type="email" name="email" placeholder="Email" style="width:300px" required></div>

<div  style="display:inline-block;margin-left:20px" ><input id="matricno" type="text" name="matricno" placeholder="Matric No" style="width:300px" required></div>
</div>

<div style="margin-top:50px;" >
<div style="display:inline-block"><span style="margin-right:10px;color:grey">(+234)</span><input id="phone" type="tel" placeholder="Phone" name="phone" size="11" style="width:230px" required></div>

<div  style="display:inline-block;margin-left:20px">

<label style="position:relative;color:grey" for="alumni">Alumni</label> <input id="alumni" style="position:relative;top:20px;bottom:0px" id="alumni"type="radio" name="selectstatus" value="alumni"required>

<label style="margin-left:20px;color:grey" for="undergrad">Undergraduate</label> <input id="undergrad" style="margin-left:20px;position:relative;top:20px" id="undergrad" type="radio" name="selectstatus" value="undergraduate" required > </div>

</div>


<div style="display:inline-block" ><input id="password" style="margin-top:50px;width:300px" type="password" name="password" placeholder="Password" value="" required></div>
<div style="display:inline-block"  ><input id="confirm" style="margin-top:50px;width:300px;margin-left:20px"type="password" name="confirm" placeholder="Confirm "  required></div>

<input type="submit" id="submitbutton" value="SAVE CHANGES" >

</form>

</div>



</body>

</html>



<?php
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


$matricno= $_SESSION["matricno"];
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
	if($_SESSION['firstname']!=$firstname){
		$sql="UPDATE user set firstname='$firstname' WHERE matricno='$matricno'";
			mysqli_query($conn, $sql);
			$_SESSION["firstname"]=$firstname;

	}
	if($_SESSION['lastname']!=$lastname){
		$sql="UPDATE user set lastname='$lastname' WHERE matricno='$matricno'";
			mysqli_query($conn, $sql);
			$_SESSION["lastname"]=$lastname;

	}
	
	if($_SESSION['email']!=$email){
		$sql="UPDATE user set email='$email' WHERE matricno='$matricno'";
			mysqli_query($conn, $sql);
           	$_SESSION["email"]=$email;

	}
	
	if($_SESSION['phone']!=$phone){
		$sql="UPDATE user set phone='$phone' WHERE matricno='$matricno'";
			mysqli_query($conn, $sql);
		    $_SESSION["phone"]=$phone;


	}
	if($_SESSION['password']!=$password){
		$sql="UPDATE user set password='$password' WHERE matricno='$matricno'";
					mysqli_query($conn, $sql);	
                    $_SESSION["password"]=$password;

	}
	
	if($_SESSION['status']!=$status){
		$sql="UPDATE user set status='$status' WHERE matricno='$matricno'";
					mysqli_query($conn, $sql);
                    $_SESSION["status"]=$status;


		

	}
	
	mysqli_close($conn);
	        
			
}
}
	
	
	}

?>


<script>

			
      document.getElementById("firstname").value="<?php echo $_SESSION['firstname'];?>";
      document.getElementById("lastname").value="<?php echo $_SESSION['lastname'];?>";
      document.getElementById("email").value="<?php echo $_SESSION['email'];?>";
      document.getElementById("matricno").value="<?php echo $_SESSION['matricno'];?>";
	  document.getElementById("password").value="<?php echo $_SESSION['password'];?>";
	  document.getElementById("phone").value="<?php echo $_SESSION['phone'];?>";
	  
	  var check="<?php echo $_SESSION['status'];?>";

	  if(check=="undergraduate"){
		  document.getElementById("undergrad").checked=true;
	  }
	  else{
		  		  document.getElementById("alumni").checked=true;

	  }


	  
	  




</script>