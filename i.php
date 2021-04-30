
<?php   session_start();
 include "head.php";



?>
<script>
 
 var avatar="<?php echo $_SESSION['avatar'];?>";
 if(avatar!=null){
	 	document.getElementById('avatarimg').src="useruploads/"+avatar;
        document.getElementById('avatarimg').style.backgroundColor='';
 }
 
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


 </script>
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



<div class="slideshow">
<img class="slideimage fade" src="images/slideshow1.jpg"/>

<img class="slideimage fade" src="images/slideshow2.jpg" />



<img class="slideimage fade" src="images/slideshow3.jpg" />

</div>

</body>

 
</html>