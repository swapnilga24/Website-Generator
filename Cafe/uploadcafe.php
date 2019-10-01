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
    $j=$_POST["c10"];
    $k=$_POST["c11"];
    $l=$_POST["c12"];
    $m=$_POST["c13"];
    $n=$_POST["c14"];
    $o=$_POST["c15"];
    $p=$_POST["c16"];
    $q=$_POST["c17"];
    $r=$_POST["c18"];
    $s=$_POST["c19"];
    $t=$_POST["c20"];
    $u=$_POST["c21"];
    $v=$_POST["c22"];
    $w=$_POST["c23"];
    $x=$_POST["c24"];
    $y=$_POST["c25"];
    $z=$_POST["c26"];
    $aa=$_POST["c27"];

    $imagename1 = $_FILES['simg1']['name'];
    $tempname1 = $_FILES['simg1']['tmp_name'];
    move_uploaded_file($tempname1,"img/images/$imagename1");

    $imagename2 = $_FILES['simg2']['name'];
    $tempname2 = $_FILES['simg2']['tmp_name'];
    move_uploaded_file($tempname2,"img/images/$imagename2");
    
    
    $imagename3 = $_FILES['simg3']['name'];
    $tempname3 = $_FILES['simg3']['tmp_name'];
    move_uploaded_file($tempname3,"img/images/$imagename3");
    

    $imagename4 = $_FILES['simg4']['name'];
    $tempname4 = $_FILES['simg4']['tmp_name'];
    move_uploaded_file($tempname4,"img/images/$imagename4");
    

    $imagename5 = $_FILES['simg5']['name'];
    $tempname5 = $_FILES['simg5']['tmp_name'];
    move_uploaded_file($tempname5,"img/images/$imagename5");
    

    $imagename6 = $_FILES['simg6']['name'];
    $tempname6 = $_FILES['simg6']['tmp_name'];
    move_uploaded_file($tempname6,"img/images/$imagename6");
    

    $imagename7 = $_FILES['simg7']['name'];
    $tempname7 = $_FILES['simg7']['tmp_name'];
    move_uploaded_file($tempname7,"img/images/$imagename7");
    
    $imagename8 = $_FILES['simg8']['name'];
    $tempname8 = $_FILES['simg8']['tmp_name'];
    move_uploaded_file($tempname8,"img/team/$imagename8");
    
    $imagename9 = $_FILES['simg9']['name'];
    $tempname9 = $_FILES['simg9']['tmp_name'];
    move_uploaded_file($tempname9,"img/team/$imagename9");
    
    $imagename10 = $_FILES['simg10']['name'];
    $tempname10 = $_FILES['simg10']['tmp_name'];
    move_uploaded_file($tempname10,"img/team/$imagename10");
    

    $qry="INSERT INTO `cafe`(`id`,`name`,`about`,`pabout`,`CAD1`,`CADV1`,`CAD2`,`CADV2`,`CAD3`,`CADV3`,`CAD4`,`CADV4`,`M1`,`MV1`,`M2`,`MV2`,`M3`,`MV3`,`M4`,`MV4`,`G1`,`G2`,`G3`,`G4`,`G5`,`G6`,`chef1`,`chefi1`,`chef2`,`chefi2`,`chef3`,`chefi3`,`contact`,`Address1`,`Address2`,`time1`,`time2`,`email`) VALUES (NULL,'$a','$b','$imagename1','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$imagename2','$imagename3','$imagename4','$imagename5','$imagename6','$imagename7','$imagename8','$s','$imagename9','$t','$imagename10','$u','$v','$w','$x','$y','$z','$aa');";

    $run=mysqli_query($con,$qry);

    //header("location:internal.php?contact=$v");

    $sql1 = "SELECT * FROM `cafe` where contact=$v";
    
    $run1 = mysqli_query($con,$sql1);
    
    $data1=mysqli_fetch_assoc($run1);

    $XX=$data1['id'];
    
    header("location:websitecafe.php?id=$XX");   
   }
?>

<!DOCTYPE html>
<html>
<head>
	<title> Upload Information For Cafe Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">	 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//coSde.jquery.com/jquery-1.11.0.min.js"></script>
    <link rel="stylesheet" href="css1/bootstrap1.css"/>
    <link rel="stylesheet" href="css1/style1.css"/>

 </head>
 
 <body style="background-color: #FFE4C4">

  <a href="lookcafe.php" style="background-color: #4CAF50;color: white;padding: 10px 50px;display: inline-block;font-size: 18px; cursor: pointer;margin-top: 20px; margin-left: 20px;"class="button">Back</a>

  <div class="container">
  <div class="col-md-6" style="margin:0 auto; float:none;">

<form method="post" action="uploadcafe.php" enctype="multipart/form-data">

     <h1 align="center" style="color: red">Enter Information for Genrating Website</h1>
     <br/>
     <div class="form-group">
      <label>Enter Name for Cafe </label>
      <input type="text" name="c1" placeholder="cafe name"  pattern="[A-Za-z ]{1,100}"  class="form-control">
     </div>

     <div class="form-group">
      <label>Enter Information About Cafe </label>
      <textarea name="c2" class="form-control" autocomplete="on"  rows = "3" cols = "80"  placeholder="Enter Basic Information about Cafe"></textarea>
     </div>
    
     <div class="upload-btn-wrapper">
      <label>Upload Photo Which Will be Displayed About Info.</label><br>
      <button class="btn" >Upload an image</button>
      <input type="file" name="simg1"  >
     </div>

     <div><h3>Enter Info About COFFEE & DRINKSRS</h3></div>
     <div class="form-group">
      <label>Dish Name 1</label>
      <input type="text" name="c3" placeholder="Dish Name 1"  class="form-control">
     </div>

     <div class="form-group">
      <label>Dish 1 Price </label>
      <input type="text" name="c4" placeholder="Dish 1 Price"  class="form-control">
     </div>
     <div class="form-group">
      <label>Dish Name 2</label>
      <input type="text" name="c5" placeholder="Dish Name 2"  class="form-control">
     </div>

     <div class="form-group">
      <label>Dish 2 Price </label>
      <input type="text" name="c6" placeholder="Dish 2 Price"  class="form-control">
     </div>
    <div class="form-group">
      <label>Dish Name 3</label>
      <input type="text" name="c7" placeholder="Dish Name 3"  class="form-control">
     </div>

     <div class="form-group">
      <label>Dish 3 Price </label>
      <input type="text" name="c8" placeholder="Dish 3 Price"  class="form-control">
     </div>
    <div class="form-group">
      <label>Dish Name 4</label>
      <input type="text" name="c9" placeholder="Dish Name 4"  class="form-control">
     </div>

     <div class="form-group">
      <label>Dish 4 Price </label>
      <input type="text" name="c10" placeholder="Dish 4 Price"  class="form-control">
     </div>

     <div><h3>Enter Info About MAIN COURSE</h3></div>
     <div class="form-group">
      <label>Dish Name 1</label>
      <input type="text" name="c11" placeholder="Dish name 1"  class="form-control">
     </div>

     <div class="form-group">
      <label>Dish 1 Price </label>
      <input type="text" name="c12" placeholder="Dish 1 price"  class="form-control">
     </div>
     <div class="form-group">
      <label>Dish Name 2</label>
      <input type="text" name="c13" placeholder="Dish name 2"  class="form-control">
     </div>

     <div class="form-group">
      <label>Dish 2 Price </label>
      <input type="text" name="c14" placeholder="Dish 2 Price"  class="form-control">
     </div>
    <div class="form-group">
      <label>Dish Name 3</label>
      <input type="text" name="c15" placeholder="Dish name 3"  class="form-control">
     </div>

     <div class="form-group">
      <label>Dish 3 Price </label>
      <input type="text" name="c16" placeholder="Dish 3 price"  class="form-control">
     </div>
    <div class="form-group">
      <label>Dish Name 4</label>
      <input type="text" name="c17" placeholder="Dish name 4" class="form-control">
     </div>

     <div class="form-group">
      <label>Dish 4 Price </label>
      <input type="text" name="c18" placeholder="Dish 4 price"  class="form-control">
     </div>

     <div class="form-group">
      <label>Upload Photo Which Will be Displayed On Photo Gallary</label>
      <div class="upload-btn-wrapper">
	      <button class="btn">Upload an image</button>
	      <input type="file" name="simg2" >
	  </div>
	  <div class="upload-btn-wrapper">  
	      <button class="btn">Upload an image</button>
	      <input type="file" name="simg3" >
	  </div>
	      <br>
	   <div class="upload-btn-wrapper">   
	      <button class="btn">Upload an image</button>
	      <input type="file" name="simg4" >
	    </div>  
	    <div class="upload-btn-wrapper">
	      <button class="btn">Upload an image</button>
	      <input type="file" name="simg5" >
	  </div>
	      <br>
	     <div class="upload-btn-wrapper">
	      <button class="btn">Upload an image</button>
	      <input type="file" name="simg6" >
	     </div>
        <div class="upload-btn-wrapper">
        <button class="btn">Upload an image</button>
        <input type="file" name="simg7" >
       </div>
	  </div>

    <div><h3>Enter Info About CHEFS</h3></div>

     <div class="upload-btn-wrapper">
        <button class="btn" >Upload an image</button>
        <input type="file" name="simg8" >
     </div>

     <div class="form-group">
      <label>Chef 1 Info </label>
      <input type="text"  name="c19" placeholder="Info 1"   class="form-control">
     </div>


     <div class="upload-btn-wrapper">
        <button class="btn">Upload an image</button>
        <input type="file" name="simg9" >
     </div>

     <div class="form-group">
      <label>Chef 2 Info </label>
      <input type="text" name="c20" placeholder="Info 2"  class="form-control">
     </div>


      <div class="upload-btn-wrapper">
        <button class="btn" required  >Upload an image</button>
        <input type="file" name="simg10" >
     </div>

     <div class="form-group">
      <label>Chef 3 Info </label>
      <input type="text"   name="c21" placeholder="Info 3"   class="form-control">
     </div>
    
     <div class="form-group">
      <label>Enter contact no.</label>
      <input type="text" name="c22" size="10" placeholder="10 Digits required"   class="form-control" autocomplete="on" pattern="[0-9]{10}" title="Use Only Numbers with limit 10" />
     </div>

     <div class="form-group">
      <label>Enter  Address 1 of Cafe  </label>
      <textarea name="c23" class="form-control" autocomplete="on" rows = "2" cols = "20"   placeholder="Enter Address 1 of cafe"></textarea>
     </div>

     <div class="form-group">
      <label>Enter  Address 2 of Cafe </label>
      <textarea name="c24" class="form-control" autocomplete="on" rows = "2" cols = "20"   placeholder="Enter Address 2 of cafe"></textarea>
     </div>

     <div class="form-group">
      <label>Enter Opening Time </label>
      <input type="text" name="c25"   placeholder="Enter Opening Time:- 9:00" class="form-control">
     </div>

     <div class="form-group">
      <label>Enter Closing Time</label>
      <input type="text" name="c26"   placeholder="Enter Closing Time:-10:00" class="form-control">
     </div>

     <div class="form-group">
      <label>Enter Email Address </label>
      <input type="email" name="c27" class="form-control" placeholder="Enter Email address"   autocomplete="on"/>
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
