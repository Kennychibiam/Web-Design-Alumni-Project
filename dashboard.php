<?php
 session_start();
include "head.php"

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
	display:inline-block;

}
#searchwrap{
	display:none;
	
}

#picform{
	
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
<div id="dashboardHeader" >
<div id="userpic">
<form  id="picform" action="dashboard.php" method="post" enctype="multipart/form-data">
<div class="pictureUploadDiv">
<label for="pictureupload" id="labelForInputFile"> 
	 <img id="profileavatarimg" width=80px; height=80px; name="profileImage" style="background-color:#DCE1E3;border-radius: 50%;padding:10px"/>

  </label>
<input type="file" name="dashboardpic" id="pictureupload" onchange="" >
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
<div  id="myAccount">

</div>
<div id="history"></div>

</div>
</body>




</html>

<script>
document.getElementById("username").innerHTML="<?php echo $_SESSION['username'];?>";

var avatar="<?php  echo $_SESSION['avatar'];?>";
if(avatar!=null || avatar!=""){
	document.getElementById('profileavatarimg').src="useruploads/"+avatar;
document.getElementById('profileavatarimg').style.backgroundColor='';
}
else{

	document.getElementById('profileavatarimg').src="images/defaultUserPic.png";
	document.getElementById('profileavatarimg').style.backgroundColor='#DCE1E3';

}




</script>
<?php
   if (isset($_POST['avatarapprove']) AND strlen($_FILES["dashboardpic"]["name"])>0 ) {
	   $check_if_image = getimagesize($_FILES["dashboardpic"]["tmp_name"]);
            if($check_if_image !== false) {

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
		   $_SESSION["avatar"]="useruploads/".$filename;
            //echo "<script>alert('Image uploaded successfully');</script>";
			echo "<script>
			  document.getElementById('profileavatarimg').src='$folder';
			  document.getElementById('profileavatarimg').style.backgroundColor='';
			  
			  document.getElementById('avatarimg').src='$folder';
			  document.getElementById('avatarimg').style.backgroundColor='';
			</script>";
        }else{
            echo "<script>alert('Image upload failed');</script>";
      }
	   
	   
        }
	  // echo "<script>document.getElementById('pictureupload').value=null;</script>";
			}
   }
   
  

?>