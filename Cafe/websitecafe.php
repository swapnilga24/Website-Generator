<?php

    $search=$_GET['id'];

    include 'connection.php';

    $sql1 = "SELECT * FROM `cafe` where id=$search";
    
    $run1 = mysqli_query($con,$sql1);
    
    $data1=mysqli_fetch_assoc($run1);
    
    if($data1==0)
    {
      ?>
      <script style="center">
        alert('Data Not Found !!!');
        window.open('uploadcafe.php','_self');
      </script>
      <?php
    } 
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Website Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css1/bootstrap1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body style="background-color:#9BEF74;">

    <h1 style="color: red;text-align: center;font-size: 70px;">Your Website Details</h1>

    <div class="container">
      <h2 style="color: orange;">Your Website Link </h2>
      <div class="panel panel-default">
        <div class="panel-body" id="myInput">
          <a href='home.php?id="<?php echo $data1['id'];?>"'>
          home.php?id="<?php echo $data1['id'];?>"
          </a>
        </div>
      </div>
    </div>

    <div class="container">
      <div style="text-align: center;padding-top: 40px;">
            <a href='home.php?id="<?php echo $data1['id'];?>"' target="_blank" class="btn btn-info" role="button" style="width: 250px; height: 40px;text-align: center;">VISIT YOUR WEBSITE.</a>
      </div>
    </div>
<br><br><br>
    <div>
        <h3> *** Get Your Own Domain name To Your Website With SSL Certificate.</h3>
        <marquee behavior="alternate"><h2 style="width: 100px;"><h2>Video Coming Soon...</h2></marquee>
    </div>
</body>
</html>