<?php require_once("config.php");$reg_no=$_GET['id'];?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form 2024</title>
    <link rel="shortcut icon" href="rangresha_badge.webp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <style type="text/css">
	  @page { 
      size: auto;  margin: 10mm; margin-right: -70px; margin-left: -70px;
    }
    @media print {
    a[href]:after {
        content: none !important;
    }
    }
    @media print {
        #printbtn {
        display: none !important;
    }
    .main-heading
    {
      font-size:32px !important;
    }

    .underline{
    line-height: 27px !important;
    text-decoration-style: dotted !important;
    }
    }
</style>

</head>
<body>
<div class="container-fluid">
	<?php $sql="SELECT count(*) from registeration WHERE reg_no=:reg_no"; 
    	 $stmt = $db->prepare($sql);
           $stmt->bindParam(':reg_no', $reg_no, PDO::PARAM_STR);
           $stmt->execute();
          $count=$stmt->fetchcolumn();
      if($count==0) 
      {
      	echo 'Registration number is missing or invalid.Kindly filup <a href="form.php">admission form</a>..';
      }
      else {
  ?>
<div class="row">
  <div class="col-sm-1">
  </div>

    <div class="col-sm-10" style="border: 2px solid black; padding:10px;">
    	<?php 

         $sql="SELECT * from registeration WHERE reg_no=:reg_no"; 
         $stmt = $db->prepare($sql);
           $stmt->bindParam(':reg_no', $reg_no, PDO::PARAM_STR);
           $stmt->execute();
           $rows=$stmt->fetchall();
         foreach($rows as $row)
         {
    	 ?> 
         <div class="row" style="text-align: center;">
          <div class="col-2">
            <img src="rangresha_badge.webp" class="img-fluid">
          </div>
           <div class="col">
              <div class="main-heading" style="font-weight: bolder;">Rangresha School of Arts & Design</div>
      <div class="address"> <b>Office Address:</b> Rangresha School of Arts & Design Gaurav Plaza Appartment <br>Plot no 76, Samarth Nagar Chhatrapati Sambhajinagar - 431001 India
      </div>
         <p class="email"><b>Mobile No:</b> 7020099895 / 9890942756 <br> <b>Email:</b> rangreshafinearts@gmail.com <br> <b>Website:</b> www.rangreshafinearts.in</p>
          </div>
          <div class="col-sm-12">
            <hr class="hrcls"> 
          </div>
      </div>
      <div class="row" style="text-align: center; margin-bottom: 20px; justify-content: center;">
  <p id="message"></p>
  <div class="col-sm-2">
  </div>
  <div class="col-sm-5">
    <b><u><h3>Registration Form 2024</h3></u></b>
  </div>
  <div class="col-sm-2">
  </div>

  </div>

<div class="row">
    <div class="col-6">
    <div class="form-group row">
   <div class="col-4" style="padding-left: 30px; padding-top: 9px;">
   <label class="label">Unique Id</label>
    </div>
     <div class="col-8" style="font-weight: bold; padding-left: 70px; padding-top: 9px;">
      <strong><?php echo $row['reg_no']; ?></strong>
    </div>
    </div>

      <div class="form-group row">
   <div class="col-4" style="padding-left: 30px; padding-top: 9px;">
      <label class="label">Full Name</label>
    </div>
     <div class="col-8" style="padding-left: 70px; padding-top: 9px;">
      <?php echo $row['name']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4" style="padding-left: 30px; padding-top: 9px;">
      <label class="label" >Father Name</label>
    </div>
     <div class="col-8" style="padding-left: 70px; padding-top: 9px;">
      <?php echo $row['fname']; ?> 
    </div>
    </div>

    <div class="form-group row">
   <div class="col-4" style="padding-left: 30px; padding-top: 9px;">
      <label class="label">Mother Name</label>
    </div>
     <div class="col-8" style="padding-left: 70px; padding-top: 9px;">
       <?php echo $row['mname']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4" style="padding-left: 30px; padding-top: 9px;">
      <label class="label">Gender</label>
    </div>
     <div class="col-8" style="padding-left: 70px; padding-top: 9px;">
           <?php echo $row['gender']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4" style="padding-left: 30px; padding-top: 9px;">
      <label class="label">Email</label>
    </div>
     <div class="col-8" style="padding-left: 70px; padding-top: 9px;">
      <?php echo $row['email']; ?> 
    </div>
    </div>
    <div class="form-group row">
    <div class="col-4" style="padding-left: 30px; padding-top: 9px;">
        <label class="label">Mobile No</label>
    </div>
    <div class="col-8" style="padding-left: 70px; padding-top: 9px;">
        <?php echo $row['mobile']; ?>
    </div>
</div>
<div class="form-group row">
    <div class="col-4" style="padding-left: 30px; padding-top: 9px;">
        <label class="label">Addhar No</label>
    </div>
    <div class="col-8" style="padding-left: 70px; padding-top: 9px;">
        <?php echo $row['addhar_no']; ?>
    </div>
</div>

<div class="form-group row">
   <div class="col-4" style="padding-left: 30px; padding-top: 9px;">
      <label class="label">DOB</label>
    </div>
     <div class="col-8" style="padding-left: 70px; padding-top: 9px;" required>
   <?php echo $row['dob']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4" style="padding-left: 30px; padding-top: 9px;">
      <label class="label">Address</label>
    </div>
     <div class="col-8" style="padding-left: 70px; padding-top: 9px;">
      <?php echo $row['address']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4" style="padding-left: 30px; padding-top: 9px;">
      <label class="label">City</label>
    </div>
     <div class="col-8" style="padding-left: 70px; padding-top: 9px;">
      <?php echo $row['city']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4" style="padding-left: 30px; padding-top: 9px;">
      <label class="label">State</label>
    </div>
     <div class="col-8" style="padding-left: 70px; padding-top: 9px;">
      <?php echo $row['state']; ?> 
    </div>
    </div>
    <div class="form-group row">
   <div class="col-4" style="padding-left: 30px; padding-top: 9px;">
      <label class="label">Pin Code</label>
    </div>
     <div class="col-8" style="padding-left: 70px; padding-top: 9px;">
      <?php echo $row['pin_code']; ?> 
    </div>
    </div>
    
    

    </div>

</div> 
  <div class="row">
    <div class="col-6" style="margin-bottom: 20px;">
     <div class="form-group row">
   <div class="col-4" style="padding-left: 30px; padding-top: 9px;">
      <label class="label">Course</label>
    </div>
     <div class="col-8" style="font-weight: bold; padding-left: 70px; padding-top: 9px;">
        <strong><?php echo $row['course']; ?></strong>
    </div>
    <div class="col-4" style="padding-left: 30px; padding-top: 9px; font-size:x-small;">
      <b><p id="demo">Date and Time of Addmission </p></b>
    </div>
    </div>
    </div>
    <div class="col-sm-5" style="text-align: center; padding-top: 100px;">
      <u><p style="font-weight: bold;">Rangresha School of Arts & Design</p></u>
    </div>
  </div>
  <!-- Row 4 end --> 
<?php } ?> 
</div>
 
<div class="col-2">
  </div>

</div>

<br>
<center><button type="button" class="btn btn-warning" id="printbtn" onclick="window.print()" style=" margin-bottom: 70px;">Print Form</button></center>
<br>
<?php } ?> 

</div>

<script>
const d = new Date();
document.getElementById("demo").innerHTML = d;
</script>

</body>
</html>