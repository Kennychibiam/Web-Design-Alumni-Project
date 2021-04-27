
<?php session_start();?>

<!DOCTYPE html>

<html>

<head>
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
#homepagename{
text-decoration:none;
}


.header a[href="#index"]{
text-decoration:none;
color:black;
}






</style>

</head>

<body>
<div class="header">
<a id="homepagename" href="i.php" >
<span style="font-size:35px;font-family:Verdana,sans-serif;">
<img src="images/alumnicon.png" width="50px" height="50px" style="vertical-align:middle"/>AlumniDonate</span>
</a>


<div id="searchwrap" >
   <form action="" method="GET">
      <input type="text" class="searchTerm" placeholder="Search..." name="inputsearch">
      
	  <!--<button type="submit" id="searchButton">
        <img id="searchimage" src="images/search.png" width="30px" height="40px"/>
     </button>-->
	 </form>
</div>






<div class="usericons">



<div id="dashboardinfo" style="margin-right:20px; display:inline-block; position:relative" onmouseover="userDashDropDownHover()" onmouseout="userDashDropDownHoverOut()">

<a href="">

<img id="avatarimg"  width="50px" height="35px" style="border-radius:50%;background-color:#DCE1E3;padding:3px"/>
</a>
<div id="dashdropdown">
<div id="myaccount" style="padding-bottom:13px;" onmouseover="myAccountHover()" onmouseout="myAccountHoverOut()">

<a href="">
<span id="myaccountspan" > <img id="myaccountimage" src="images/dashboard.png" width="20px" height="20px" style="vertical-align:middle;margin-right:10px"/>My Account</span>
</a>
</div>
<a href="login.php" target="_blank">
<div style="padding-bottom:13px;" id="login" onmouseover="loginHover()" onmouseout="loginHoverOut()" >

<span  id="loginspan"><img id="loginimage" src="images/login.png" width="20px" height="20px" style="vertical-align:middle;margin-right:10px"/>Login</span>
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

<div></div>

</div>

</div>














<script>

 var avatar="<?php 
 if(empty($_SESSION['avatar'])){
	echo null; 
 }
 else{
 echo $_SESSION['avatar'];}?>";
 if(avatar!=null  || avatar!=""){
	 	document.getElementById('avatarimg').src="useruploads/"+avatar;
        document.getElementById('avatarimg').style.backgroundColor='';

 }
 else{
	 	 alert("null");

	document.getElementById('avatarimg').src="images/defaultUserPic.png";
        document.getElementById('avatarimg').style.backgroundColor='#DCE1E3'; 
 }


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

​
