<?php
 session_start();
include "head.php";

?>
<! DOCTYPE html>

<html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body{
	
}
#dashboardHeader{
	position:absolute;
	left:0;
	top:70;
	width:100%;
}
#userpic{
	display:inline-block;
	width:40%;

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

#history{
	display:inline-block;
	top: 50%;
		margin-left:100px;	

  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  position:relative;
   padding-left:5px;
  padding-right:5px;
  padding-bottom:7px;
  padding-top:3px;

}
#accountInfo{
	display:inline-block;
	top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  position:relative;
  padding-left:5px;
  padding-right:5px;
  padding-bottom:7px;
  padding-top:3px;
	
}
#product{
	display:inline-block;
	margin-left:100px;	
	top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  position:relative;
  padding-left:5px;
  padding-right:5px;
  padding-bottom:7px;
  padding-top:3px;
	
}
#upload{
	display:inline-block;
	margin-left:100px;	
	top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  position:relative;
  padding-left:5px;
  padding-right:5px;
  padding-bottom:7px;
  padding-top:3px;
	
}


.propertyclass{
		margin-bottom:30px;

	
}
.linkclass{
	text-decoration:none;
	color:black;
	
	
	
}
#iframes{
	position:relative;
	top:200;
	width:50%;
	margin:auto;
	
	
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
<a href="accountinfo.php" target="dashboardPreview" class="linkclass">
<div  id="accountInfo" onmouseover="accountInfoHover()" onmouseout="accountInfoHoverOut()" >
<div style="margin:auto;width:50%">
<img id="accountInfoImage" src="images/accountimage.png" width=30;height=30; >
</div>
<span id="accountInfoText" class="propertyclass">Account Info</span>
</div>
</a>

<a href="history.php" target="dashboardPreview" class="linkclass">

<div id="history"  onmouseover="historyHover()" onmouseout="historyHoverOut()">
<div style="margin:auto;width:50%">
<img id="historyImage" src="images/history.png" width=30;height=30; >
</div>
<span id="historyText" class="propertyclass">Order History</span>
</div>
</a>



<a href="product.php" target="dashboardPreview" class="linkclass">

<div id="product" onmouseover="productHover()" onmouseout="productHoverOut()">

<div style="margin:auto;width:50%">
<img id="productImage" src="images/product.png" width=30;height=30; >
</div>
<span id="productText" class="propertyclass">Products</span>
</div>
</a>



<a href="upload.php" target="dashboardPreview" class="linkclass">

<div id="upload" onmouseover="uploadHover()" onmouseout="uploadHoverOut()">

<div style="margin:auto;width:50%">
<img id="uploadImage" src="images/upload.png" width=30;height=30; >
</div>
<span id="uploadText" class="propertyclass">Upload</span>
</div>
</a>















</div>
<div id="iFrames" >
<iframe scrolling="no"  style="border: none;width:100%; height:1000px " name="dashboardPreview" ></iframe>

</div>
</body>




</html>

<script>
document.getElementById("username").innerHTML="<?php echo $_SESSION['username'];?>";

var status="<?php echo $_SESSION['avatar']; ?>";

if(status=="alumni"){
	
	document.getElementById("history").style.display='none';
	
}
else if(status=="undergraduate"){
		document.getElementById("product").style.display='none';
		document.getElementById("upload").style.display='none';


	
	
}

var avatar="<?php echo $_SESSION['avatar']; ?>";
 
 if(avatar){
	 document.getElementById('profileavatarimg').src="useruploads/"+avatar;
        document.getElementById('profileavatarimg').style.backgroundColor='';
 }
else{
	

	document.getElementById('profileavatarimg').src="images/defaultuserPic.png";

        document.getElementById('profileavatarimg').style.backgroundColor='#DCE1E3'; 
}

function accountInfoHover(){
	
	document.getElementById("accountInfo").style.backgroundColor="grey";
	document.getElementById("accountInfoImage").src="images/accountimagewhite.png";
	document.getElementById("accountInfoText").style.color="white";
}

function accountInfoHoverOut(){
	
	document.getElementById("accountInfo").style.backgroundColor="";
	document.getElementById("accountInfoImage").src="images/accountimage.png";
	document.getElementById("accountInfoText").style.color="black";
}

function historyHover(){
	
	document.getElementById("history").style.backgroundColor="grey";
	document.getElementById("historyImage").src="images/historywhite.png";
	document.getElementById("historyText").style.color="white";
}

function historyHoverOut(){
	
	document.getElementById("history").style.backgroundColor="";
	document.getElementById("historyImage").src="images/history.png";
	document.getElementById("historyText").style.color="black";
}

function productHover(){
	
	document.getElementById("product").style.backgroundColor="grey";
	document.getElementById("productImage").src="images/productwhite.png";
	document.getElementById("productText").style.color="white";
}


function productHoverOut(){
	
	document.getElementById("product").style.backgroundColor="";
	document.getElementById("productImage").src="images/product.png";
	document.getElementById("productText").style.color="black";
}


function uploadHover(){
	
	document.getElementById("upload").style.backgroundColor="grey";
	document.getElementById("uploadImage").src="images/uploadwhite.png";
	document.getElementById("uploadText").style.color="white";
}


function uploadHoverOut(){
	
	document.getElementById("upload").style.backgroundColor="";
	document.getElementById("uploadImage").src="images/upload.png";
	document.getElementById("uploadText").style.color="black";
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