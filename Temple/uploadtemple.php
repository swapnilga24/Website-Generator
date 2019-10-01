<?php 
  if(isset($_POST['submit']))
  {
    include 'connection.php';

    $a=$_POST["c1"];
    $b=$_POST["c2"];
    $c=$_POST["c3"];
    $d=$_POST["c4"];
    $e=$_POST["c5"];
    $f=$_POST["c6"];
    $g=$_POST["c7"];
    $h=$_POST["c8"];
    $i=$_POST["c9"];
  
    $imagename1 = $_FILES['simg1']['name'];
    $tempname1 = $_FILES['simg1']['tmp_name'];
    move_uploaded_file($tempname1,"dataimg/$imagename1");

    $imagename2 = $_FILES['simg2']['name'];
    $tempname2 = $_FILES['simg2']['tmp_name'];
    move_uploaded_file($tempname2,"dataimg/$imagename2");
    
    
    $imagename3 = $_FILES['simg3']['name'];
    $tempname3 = $_FILES['simg3']['tmp_name'];
    move_uploaded_file($tempname3,"dataimg/$imagename3");
    

    $imagename4 = $_FILES['simg4']['name'];
    $tempname4 = $_FILES['simg4']['tmp_name'];
    move_uploaded_file($tempname4,"dataimg/$imagename4");
    

    $imagename5 = $_FILES['simg5']['name'];
    $tempname5 = $_FILES['simg5']['tmp_name'];
    move_uploaded_file($tempname5,"dataimg/$imagename5");
    

    $imagename6 = $_FILES['simg6']['name'];
    $tempname6 = $_FILES['simg6']['tmp_name'];
    move_uploaded_file($tempname6,"dataimg/$imagename6");
    

    $imagename7 = $_FILES['simg7']['name'];
    $tempname7 = $_FILES['simg7']['tmp_name'];
    move_uploaded_file($tempname7,"dataimg/$imagename7");
    
    $imagename8 = $_FILES['simg8']['name'];
    $tempname8 = $_FILES['simg8']['tmp_name'];
    move_uploaded_file($tempname8,"dataimg/$imagename8");
    
    $imagename9 = $_FILES['simg9']['name'];
    $tempname9 = $_FILES['simg9']['tmp_name'];
    move_uploaded_file($tempname9,"dataimg/$imagename9");
    
    $imagename10 = $_FILES['simg10']['name'];
    $tempname10 = $_FILES['simg10']['tmp_name'];
    move_uploaded_file($tempname10,"dataimg/$imagename10");
    
    $qry="INSERT INTO `temple`(`Id`,`Name`,`Basic`,`History`,`Contact`,`Email`,`Address`,`Reach_air`,`Reach_bus`,`Reach_Train`,`Phome1`,`Phome2`,`Phome3`,`Bapho1`,`Hipho1`,`P6`,`P7`,`P8`,`P9`,`P10`) VALUES (NULL,'$a','$b','$c','$d','$e','$f','$g','$h','$i','$imagename1','$imagename2','$imagename3','$imagename4','$imagename5','$imagename6','$imagename7','$imagename8','$imagename9','$imagename10');";
  
    $run=mysqli_query($con,$qry);

    $search=$_POST["c4"];

    $sql1 = "SELECT * FROM `temple` where Contact=$search";
    
    $run1 = mysqli_query($con,$sql1);
    
    $data1=mysqli_fetch_assoc($run1);
     
    $x=$data1['Id'];
    header("location:websitetemple.php?Id=$x");
   }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload Information For Advanced Website</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="css1/bootstrap1.css"/>
    <link rel="stylesheet" href="css1/style1.css"/>
 
 </head>
 
 <body style="background-color: #FFE4C4">

<a href="looktemple.php" style="background-color: #4CAF50;color: white;padding: 10px 50px;display: inline-block;font-size: 18px; cursor: pointer;margin-top: 20px; margin-left: 20px;"class="button">Back</a>

  <div class="container">
  <div class="col-md-6" style="margin:0 auto; float:none;">

<form method="post" action="uploadtemple.php" enctype="multipart/form-data">
     <h1 align="center" style="color: red">Enter Information for Genrating Website</h1>
     <br/>
     <div class="form-group">
      <label>Enter Name for Temple </label>
      <input type="text" name="c1" placeholder="Temple name"  pattern="[A-Za-z ]{1,100}" class="form-control">
     </div>

     <div class="form-group">
      <label>Enter Information For Temple </label>
      <textarea name="c2" class="form-control" autocomplete="on"  rows = "3" cols = "80" placeholder="Enter Basic Information about Temple"></textarea>
     </div>

    
     <div class="upload-btn-wrapper">
      <label>Upload Photo Which Will be Displayed on home page:-1</label><br>
      <button class="btn">Upload an image</button>
      <input type="file" name="simg1"  >
     </div>


     <div class="upload-btn-wrapper">
      <label>Upload Photo Which Will be Displayed on home page:-2</label><br>
      <button class="btn">Upload an image</button>
      <input type="file" name="simg2" >
     </div>


     <div class="upload-btn-wrapper">
      <label>Upload Photo Which Will be Displayed on home page:-3</label><br>
      <button class="btn">Upload an image</button>
      <input type="file" name="simg3"  >
     </div>

     <div class="form-group">
      <label>Enter Information About History,Architecture of the temple </label>
      <textarea name="c3" class="form-control" autocomplete="on" required rows = "6" cols = "80" placeholder="Enter Information About History,Architecture of the temple"></textarea>
     </div>

     <div class="upload-btn-wrapper">
      <label>Upload Photo Which Will be Displayed With History,Architecture of the temple:1</label><br>
      <button class="btn">Upload an image</button>
      <input type="file" name="simg4"  >
     </div>

     <div class="upload-btn-wrapper">
      <label>Upload Photo Which Will be Displayed With History,Architecture of the temple:2</label><br>
      <button class="btn">Upload an image</button>
      <input type="file" name="simg5"  >
     </div>

     <div class="form-group">
      <label>Upload Photo Which Will be Displayed On Photo Gallary</label>
      <div class="upload-btn-wrapper">
	      <button class="btn">Upload an image</button>
	      <input type="file" name="simg6" >
	  </div>
	  <div class="upload-btn-wrapper">  
	      <button class="btn">Upload an image</button>
	      <input type="file" name="simg7" >
	  </div>
	      <br>
	   <div class="upload-btn-wrapper">   
	      <button class="btn">Upload an image</button>
	      <input type="file" name="simg8" >
	    </div>  
	    <div class="upload-btn-wrapper">
	      <button class="btn">Upload an image</button>
	      <input type="file" name="simg9" >
	  </div>
	      <br>
	     <div class="upload-btn-wrapper">
	      <button class="btn">Upload an image</button>
	      <input type="file" name="simg10" >
	     </div>
	      <br>
	  </div>

     <div class="form-group">
      <label>Enter contact no.</label>
      <input type="text" name="c4" size="10" placeholder="10 Digits required" class="form-control"  autocomplete="on" pattern="[0-9]{10}" title="Use Only Numbers with limit 10" />
     </div>

     <div class="form-group">
      <label>Enter Email Address </label>
      <input type="email" name="c5" class="form-control" placeholder="Enter Email address"  autocomplete="on"/>
     </div>

     <div class="form-group">
      <label>Enter  Address of Temple </label>
      <textarea name="c6" class="form-control" autocomplete="on" rows = "2" cols = "80" placeholder="Enter Address of temple"></textarea>
     </div>


     <div class="form-group">
      <label>How to Reach - Using Air </label>
      <textarea name="c7" class="form-control" autocomplete="on" required rows = "2" cols = "80" placeholder="Enter Address of temple"></textarea>
     </div>


     <div class="form-group">
      <label>How to Reach - Using Bus </label>
      <textarea name="c8" class="form-control" autocomplete="on" required rows = "2" cols = "80" placeholder="Enter Address of temple"></textarea>
     </div>


     <div class="form-group">
      <label>How to Reach - Using Train </label>
      <textarea name="c9" class="form-control" autocomplete="on" required rows = "2" cols = "80" placeholder="Enter Address of temple"></textarea>
     </div>

     <br>
     <div class="form-group" align="center">
      <input type="submit" name="submit" class="btn btn-info" value="submit" style="width: 300px;height: 50px;" />
     </div>
     <br>

 	</form>
   </div>
  </div>
 </body>
</html>