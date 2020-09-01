<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:index.php');
}
else{ 
if(isset($_GET['del']))
{
$id=$_GET['del'];
$sql = "delete from tblbooks  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> execute();
$_SESSION['delmsg']="Category deleted scuccessfully ";
header('location:manage-books.php');

}


    ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | Manage Issued Books</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- DATATABLE STYLE  -->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

    
    
          <?php
        // put your code here
      if(isset($_POST["submit"]))
               {
                  echo  $email="ashutoshkaushik84@gmail.com";
                    
                    $name=$_POST["name"];
                    $subject=$_POST["subject"];
                    $msg=$_POST["msg"];
                    
                $pass = rand(400,4000);
                require 'mail/phpmailer.php';
                require 'mail/smtp.php';

      

        $mail = new PHPMailer;

        $mail->IsSMTP(); // telling the class to use SMTP
//$mail->Host       = "smtp.gmail.com"; // SMTP server
        $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
        // 1 = errors and messages
        // 2 = messages only
        $mail->SMTPAuth   = true;                  // enable SMTP authentication
        $mail->Host       = "smtp.gmail.com"; // sets the SMTP server
        $mail->Port       = 465;                    // set the SMTP port for the GMAIL server
        $mail->Username   = "digvijaysinhchauhan0@gmail.com"; // SMTP account username
        $mail->Password   = "digvijaysinh4474";        // SMTP account password
        $mail->SMTPSecure = 'ssl';


        $mail->From = 'from@example.com';
        $mail->FromName = 'Mailer';
        $email=$email;

        $mail->addAddress($email);               // Name is optional
        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
        $mail->isHTML(true);                                  // Set email format to HTML

       
        $str = "Student name ".$name." has requested for this  ".$subject."book description is ".$msg;
        $mail->Subject = "test";
        $mail->Body    = $str;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if (!$mail->send()) 
        {

           echo  "Mail Not Sent";
        } 
        else 
         {

        
                             echo "mail sent";
                    }
        

      }
               
        ?>

    
    <body>
    <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
<div class="content-wrapper">
<div class="container">
<div class="row pad-botm">
<div class="col-md-12">
<h4 class="header-line">Request Books</h4>
</div>
</div>
             
<!--LOGIN PANEL START-->           
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
<div class="panel panel-info">
<div class="panel-heading">
 Request Here
</div>
<div class="panel-body">
<form role="form" method="post">

<!--<div class="form-group">
<label>Enter Email</label>
<input class="form-control" type="email" name="email" autocomplete="off" required />
</div>-->
    
    <div class="form-group">
<label>Enter Name</label>
<input class="form-control" type="text" name="name" autocomplete="off" required />
</div>
    
<div class="form-group">
<label>Book name</label>
<input class="form-control" type="text" name="subject" autocomplete="off" required />
</div>
 
<div class="form-group">
<label>description</label>
<input class="form-control" type="text" name="msg" autocomplete="off" required />
</div>

 <button type="submit" name="submit" class="btn btn-info">Submit </button>
</form>
 </div>
</div>
</div>
</div>  
<!---LOGIN PABNEL END-->            
             
 
    </div>
    </div>
      <!-- CONTENT-WRAPPER SECTION END-->
  <?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- DATATABLE SCRIPTS  -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
<?php } ?>


