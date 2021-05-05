<?php  session_start();
    
	
?>

<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

#fileImageUpload{
	display:none;
	

	
}
form input{
	border-left:none;
    border-right:none;
	border-top:none;
	background-color:#ffffff;
    width:100%;
	height:50px;
	
} 
form input:focus{
	
	outline:none;
    box-shadow: 0 0 10px #719ECE;
	

	
}
#labelforfileimageupload{
	       
		cursor:pointer;

}
#uploadsButton{
	position:absolute;
    width:100%;
	background-color:yellow;
    
}
#uploaditemform{
	position:absolute;
	background-color:red;
	height:100%;
	top: 50%;
    left: 50%;
    margin-right: -50%;
    margin-bottom:50%;
    transform: translate(-50%, -50%);
}
#itemName{
	width:100%;
	margin-bottom:150px;
}
#itemDescription{
width:100%;
rows:400;
max-width:100%;
resize:vertical;
margin-top:100px;
}

#submit{
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
 #submit:hover{
		background-color: #4CAF50; 
}


</style>
</head>
<body>
<div id="uploadsButton">
<form id="uploaditemform" method="post" action="upload.php" enctype="multipart/form-data">
<div id="itemNameId">
<input type="text" placeholder="Item Name" id="itemName"  name="itemName"required></div>
<div>
<label for="fileImageUpload" id="labelforfileimageupload"  >
<img id="fileuploadimage" src="images/fileupload.png" width=250px;height=250px; required />

</label>
<input type="file" name="fileImageUpload" id="fileImageUpload">

</div>
<div>
<textarea  name="itemDescription" id="itemDescription" placeholder="Item description" rows="20" required></textarea>
</div>

<input type="submit" name="submit" value="UPLOAD" id="submit">
</form>

</div>











</body>
</html>


<?php
      if (isset($_POST['submit']) AND strlen($_FILES["fileImageUpload"]["name"])>0 ) {
	   $check_if_image = getimagesize($_FILES["fileImageUpload"]["tmp_name"]);
            if($check_if_image !== false) {

	    $host = "localhost";
        $username = "root";
        $databasepassword = "database1234567";
        $databasename= "alumni_donate";
		
		
		$filename = $_FILES["fileImageUpload"]["name"];
        $tempname = $_FILES["fileImageUpload"]["tmp_name"];
		
		$itemName=$_POST["itemName"];
		$itemDescription=$_POST["itemDescription"];
		$itemID=0;
		
		
		$folder="productImages/".$filename;
	   
	   $conn=mysqli_connect($host,$username,$databasepassword,$databasename);
    if(!$conn){

	die("Connection failed: " . mysqli_connect_error());

	
}

    else{
		$usermatric=$_SESSION['matricno'];
		$sql="SELECT * FROM fileupload";
		$result=mysqli_query($conn,$sql);
		$count=0;
		$itemID=1;
		
		
		
		if(mysqli_num_rows($result)>0){
		 
		while($row=mysqli_fetch_assoc($result)){
			$itemID+=1;
		}
		
		
		}else{
			
			$itemID=1;
		}
		

			
		
		
		$sql="INSERT INTO fileupload(item_id,matricno,item_name,item_description,product_image,date_created,date_modified) VALUES($itemID,$usermatric,'$itemName','$itemDescription','$filename',CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);" ;

	   mysqli_query($conn,$sql);
	   
	   if (move_uploaded_file($tempname, $folder))  {
		   $_SESSION["productImage"]="productImages/".$filename;
		   $_SESSION["itemID"]=$itemID;
		   $_SESSION["itemDescription"]=$itemDescription;
   		   $_SESSION["itemName"]=$itemName;

           
		   
            echo "<script>alert('Product uploaded successfully');</script>";
			echo "<script> window.parent.location.href = 'displayProducts.php'; </script>";

			
			
			
        }else{
            echo "<script>alert('Product upload failed');</script>";
      }
	   	mysqli_close($conn);

	   
        }
	  // echo "<script>document.getElementById('pictureupload').value=null;</script>";
			}
   }
   



?>