

<!DOCTYPE html>
<html>

<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans);


body{
background-color: #DCE1E3;
}
.header{
background-color:#ffffff;
padding:10px;

position:fixed;
top:0px;
left:0px;
right:0px;
z-index:2px;
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
  right:50px;
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
#myaccount{
padding-left:8px;
padding-right:8px;
margin:auto;
}
#login{
padding-left:8px;
padding-right:8px;
margin:auto;
}
.header a[href="#index"]{
text-decoration:none;
color:black;
}

.slideshow{
position:absolute;
  z-index:-1;
  margin-top:80px;
  left:0px;
  right:0px;

}
.slideimage{
  float:left;

object-fit:fill;
width:70%;
height:500px;
display:none;
}

#searchimage{
position:absolute;
top: 50%;
left:50%; 
 transform: translate(-50%, -50%);
}


#searchwrap{
position:absolute;
display:inline-block;
margin:auto;
top: 50%;
left:50%; 
 transform: translate(-50%, -50%);
}

.searchTerm {
  width: 350px;
  border: 3px solid #777777;  
  height: 40px;
  border-radius: 5px 5px 5px 5px;
  outline: none;
  color: gray;
  margin:0px;
  padding:0px;
}


#searchButton {
position:relative;
left:0;
  width: 40px;
  height:auto;
  border: 1px solid #00B4CC;
  background: #DCE1E3;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  margin:0;
  padding:0;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


</style>
<head>
<title>
AluminiDonate
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div class="header">
<a href="#index" >
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


<div id="cart" style="display:inline-block; position:relative" >
<a href="">

<img src="images/cart.png" id="cartimage" width="50px" height="35px" onmouseover="cartHover()" onmouseout="cartHoverOut()">
</a>

<div id="tooltip" >
<span id="tooltext">View Cart</span>
</div>

</div>

</div>
</div>


<div class="slideshow">
<img class="slideimage fade" src="images/slideshow1.jpg"/>

<img class="slideimage fade" src="images/slideshow2.jpg" />



<img class="slideimage fade" src="images/slideshow3.jpg" />

</div>

</body>

 <script>
 var slideIndex=0;
 var slide=document.getElementsByClassName("slideimage");
 showslides();

 function showslides(){

 for(i=0;i<slide.length;++i){

 if(i!=slideIndex){
 slide[i].style.display="none";
 }
 else{
  slide[i].style.display="block";

 }
 }
 ++slideIndex;
 if(slideIndex==slide.length){
 slideIndex=0;
 }
setTimeout(showslides,5000);

 
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

function login(){
	

}

 </script>
</html>