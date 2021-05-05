
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




.slideshow{
position:absolute;
  z-index:-1;
  margin-top:0px;
  left:0px;
  right:0px;
  width:100%;
   margin:auto;

}
.slideimage{

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

#productTable{
	top:600;
	position:relative;
	margin-bottom:200px;
}
table{padding-bottom:200px;}
td{text-align:center;
    width:25%;
}
caption{
	margin-bottom:50px
	
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
<div id="productTable">
<table>
<caption>PRODUCTS</caption>
<tr>
<td><div ><div><img  width=150; height=200;  src="productImages/laptopcase.jpg"/></div><div><span>Laptop Bag</span></div><div><span>Product Owner:Chijioke Ibiam</span></div></div></td>  
<td><div ><img  width=150; height=200;  src="productImages/newschoolbag.jpg"/><div><span>School Bag</span></div><div><span>Product Owner:Chijioke Ibiam</span></div></div></td>
<td><div ><img  width=150; height=200;  src="productImages/iron.jpg"/><div><span>Iron</span></div><div><span>Product Owner:Chijioke Ibiam</span></div></div></td>


</tr>

</table>
</div>
</body>

 
</html>