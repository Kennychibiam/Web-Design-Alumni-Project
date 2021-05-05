<?php 

include "head.php"?>


<!DOCTYPE html>
<html>
<head>
<title>Log In</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
input:-webkit-autofill {
-webkit-box-shadow: 0 0 0 1000px white inset !important;}

#loginform{
	position:absolute;
     top: 50%;
    left: 50%;
    margin-right: -50%;
	margin-bottom:50%;
    transform: translate(-50%, -50%);
	
}
form input{
	border-left:none;
    border-right:none;
	border-top:none;
	background-color:#ffffff;
    width:100%;
	height:50px;
	
} 
#searchwrap{
	display:none;
	
}

#submit,.reset{
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

form input:focus{
	
	outline:none;
    box-shadow: 0 0 10px #719ECE;
	

	
}
  #submit:hover{
		background-color: #4CAF50; 
}
 .reset:hover{
		background-color: #4CAF50; 
}

#divpassword{
	margin-top:20px;
	
	
}
a[href="createaccount.php"]{
	color:#EE7500;
	text-decoration:none;
	
}
.hidden{display:none;}
body{
	
	
	
}





</style>


</head>

<body>



<div id="loginform">
<form id="form" method="POST" action="login.php" autocomplete="off">

<div><input type="text" id="matricno" name="matricno" placeholder="Matric No" autocomplete="off" required></div>

<div id="divpassword"><input type="password"  id="password" name="password"   placeholder="Password"   required></div>




<div>
<input type="submit" id="submit" value="LOG IN"  autocomplete="off">
</div>
<div><input type="reset" class="reset" value="RESET">
</div>
</form>


<div style="margin-top:10px">Don't have an account.<a href="createaccount.php" <span>Create Account</span></a></div>
</div>




</body>


</html>


<?php 
 
 
 if(isset($_POST["matricno"])&&isset($_POST["password"])){
	// $_SESSION["status"]="empty";
	 //$_SESSION["matricno"]="empty";
	 //$_SESSION["avatar"]="empty";
	 
	 
 $host = "localhost";
$username = "root";
$databasepassword = "database1234567";
$databasename= "alumni_donate";

$matricno= $_POST["matricno"];
$password= $_POST["password"];


 $conn=mysqli_connect($host,$username,$databasepassword,$databasename);
 if(!$conn){
	 
	 	die("Connection failed: " . mysqli_connect_error());

	 
 }
 else{
	$sql="SELECT * FROM user WHERE matricno= $matricno AND password='$password'"; 
    $result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0){
		 $_SESSION["isLoggedIn"]=true;
		 $checkIfUserNameExists=0;
		 
		while($row=mysqli_fetch_assoc($result)){
			if($row["username"]==null){
              $checkIfUserExists=null;
			$_SESSION["username"]=$row["firstname"];
			
			}else{
				$_SESSION["username"]=$row["username"];
                $checkIfUserNameExists=$row["username"];

			}
			
						
			$_SESSION["firstname"]=$row["firstname"];
			$_SESSION["lastname"]=$row["lastname"];
			$_SESSION["status"]=$row["status"];
	        $_SESSION["matricno"]=$row["matricno"];
			$_SESSION["avatar"]=$row["avatar"];
			$_SESSION["email"]=$row["email"];
			$_SESSION["password"]=$row["password"];
			$_SESSION["phone"]=$row["phone"];


            

		}         
		    
				        mysqli_close($conn);

			echo "<script> window.location.assign('dashboard.php'); </script>";
                   exit();
				   echo "<script>document.getElementById('matricno').value=null;
			document.getElementById('password').value=null;
			</script>";
			

	}else{
				 $_SESSION["isLoggedIn"]=false;

				echo "<script>alert('Account does not exist')</script>";


	}

 }
 
     $_POST=array();
 
 
 }


?>

