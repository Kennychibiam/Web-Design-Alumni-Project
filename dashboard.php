<?php include "head.php"

?>
<! DOCTYPE html>

<html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body{
	
}

#userpic{
	position:relative;
	margin-top:80px;
	margin-left:auto;
	margin-right:auto;
	width:50%;

}
#picform{
	position:absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
	margin-bottom:50%;
    transform: translate(-50%, -50%);
	padding:0;
}
input[type="file"]{
         
    display:none;
}
#labelForInputFile,#labelForAvatarRemove{
			cursor: pointer;
			
			

}
#avatarsubmit,#avatarremove{
	display:none;
	
}
#labelForAvatarSubmit{
	cursor:pointer;
	
}
.pictureUploadDiv{
	display:inline-block;
	
}
#username{
	display:block;
	margin-bottom:30px;
	text-transform: uppercase;
}
</style>
</head>

<body>
<div id="userpic">
<form  id="picform" action="dashboard.php" method="post" enctype="multipart/form-data">
<div class="pictureUploadDiv">
<label for="pictureupload" id="labelForInputFile"> 
	 <img id="avatarimg" width=80px; height=80px; src="images/defaultUserPic.png" style="background-color:#DCE1E3;border-radius: 50%;padding:10px"/>

  </label>
<input type="file" name="dashboardpic" id="pictureupload">
</div>
<div class="pictureUploadDiv" ">
<span id="username"></span>

<label id="labelForAvatarSubmit" for="avatarsubmit"><img width=20px; height=20px; src="images/accept.png" style="background-color:#DCE1E3;padding:3px"/>  </label>
<input type="submit" id="avatarsubmit" name="avatarapprove">

<label id="labelForAvatarRemove" for="avatarremove"><img width=20px; height=20px; src="images/remove.png" style="background-color:#DCE1E3;padding:3px"/>  </label>
<input type="submit" id="avatarremove" name="avatardelete">
</div>
</form>
</div>
</body>




</html>

<script>
document.getElementById("username").innerHTML="<?php echo $_SESSION['username'];?>";
//document.getElementById('avatarimg').src='$folder';
var test="sup"
<?php

//if(is_null($_SESSION["avatar"])){
	echo "<script>
			  alert(test);
			</script>";
	
//}

?>


</script>
<?php
   if (isset($_POST['avatarapprove'])) {
	    $host = "localhost";
        $username = "root";
        $databasepassword = "database1234567";
        $databasename= "alumni_donate";
		
		
		$filename = $_FILES["dashboardpic"]["name"];
        $tempname = $_FILES["dashboardpic"]["tmp_name"];
		
		$folder="useruploads/".$filename;
	   
	   $conn=mysqli_connect($host,$username,$databasepassword,$databasename);
    if(!$conn){

	die("Connection failed: " . mysqli_connect_error());

	
}

    else{
		$usermatric=$_SESSION['matricno'];
	   $sql="UPDATE user SET avatar='$filename' WHERE matricno=$usermatric";
	   mysqli_query($conn,$sql);
	   
	   if (move_uploaded_file($tempname, $folder))  {
		   $_SESSION["avatar"]=$folder;
            echo "<script>alert('Image uploaded successfully');</script>";
			echo "<script>
			  document.getElementById('avatarimg').src='$folder';
			  document.getElementById('avatarimg').style.backgroundColor='';
			</script>";
        }else{
            echo "<script>alert('Image upload failed');</script>";
      }
	   
	   
        }
	   
	   
	   
   }

?>