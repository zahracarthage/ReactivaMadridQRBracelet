<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Qr Gen</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
 	include "qrlib.php";
 	include "config.php";
 	

  if(isset($_POST['create']))
  {


    $DNI_NIE = $_POST['DNI_NIE']; 
    $name = $_POST['name']; 
    $last_name=$_POST['last_name']; 
    $phone_number=$_POST['phone_number']; 
    $city = $_POST['city']; 
    $Current_address=$_POST['Current_address']; 
    $Localization = $_POST['Localization'];

   
    $qrImgName = "meravi".rand();

    
    if($DNI_NIE=="" )
    {
      echo "<script>alert('check your DNI');</script>";
    }
    elseif($name=="")
    {
      echo "<script>alert('  check your name please');</script>";
    }
    elseif($phone_number=="")
    {
      echo "<script>alert('please check your number');</script>";
    }
    
    else


    $qrs = QRcode::png($name,"userQr/$qrImgName.png","H","2","2");
    $qrimage = $qrImgName.".png";
    $workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode".$qrImgName.".png";
    $insQr = $meravi->insertQr($DNI_NIE,$name,$last_name,$phone_number,$city,$Current_address,$Localization,$qrimage,$qrlink);

    if($insQr==true)
    {
      echo "<script>alert('Thank You $name. Success Create Your QR Code'); window.location='index.php?success=$qrimage';</script>";

    }
    else
    {
      echo "<script>alert('cant create QR Code');</script>";
    }
  }

  ?>
  <?php 
  if(isset($_GET['success']))
  {
  ?>
  <div id="qrSucc">
  <div class="modal-content animate container">
    <?php 
    ?>
 
    <img src="userQr/<?php echo $_GET['success']; ?>" alt="">
    <?php 
$workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode/userQr/".$_GET['success'];
    ?>
     
    <input type="text" value="<?php echo $qrlink; ?>" readonly>
    <br><br>
<a href="download.php?download=<?php echo $_GET['success']; ?>">Download Now</a>
<br>
 <br><br>
    <a href="index.php">Go Back To Generate Again</a>
    
  <?php
}
else
{
	?>
		<form method="post">
		
    <div class="container">
      <h2 align="center">Qr Generator and storing Data</h2>


      <label for="DNI_NIE"> Your DNI or NIE </label>

     <input type="text" name="DNI_NIE" value="<?php if(isset($_POST['create'])){ echo $_POST['DNI_NIE']; } ?>">



      <label for="name"><b>Your name</b></label>
      <input type="text" name="name" value="<?php if(isset($_POST['create'])){ echo $_POST['name']; } ?>">


      <label for="last_name"> Your last name </label>
      <input type="text" name="last_name" value="<?php if(isset($_POST['create'])){ echo $_POST['last_name']; } ?>">



 <label for="phone_number"> Your Phone number  </label>
      <input type="text" name="phone_number" value="<?php if(isset($_POST['create'])){ echo $_POST['phone_number']; } ?>">


       <label for="city"> Your City </label>
      <input type="text" name="city" value="<?php if(isset($_POST['create'])){ echo $_POST['city']; } ?>">

       <label for="Current_address"> Your Current Address </label>
      <input type="text" name="Current_address" value="<?php if(isset($_POST['create'])){ echo $_POST['Current_address']; } ?>">
      
       <label for="Localization"> Your localization </label>
      <input type="text" name="Localization" value="<?php if(isset($_POST['create'])){ echo $_POST['Localization']; } ?>">
      
      
  
        
      <input type="submit" value="Generate the QR Code" name="create">
    
    </div>
  </form>
    <?php 
}
   ?>


</body>
</html>