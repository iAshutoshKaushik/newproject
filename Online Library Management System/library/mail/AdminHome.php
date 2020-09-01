<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
 include './Connection.php';
  include 'Adminheader.php';  
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
<!--        <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      //meta tags ends here
      booststrap
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      //booststrap end
       font-awesome icons 
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
       //font-awesome icons 
       For Clients slider 
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
      lightbox slider
      <link rel="stylesheet" href="css/lightbox.css">
       lightbox slider
      stylesheets
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      //stylesheets
      <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    </head>
    
        <div class="header-outs" id="header">
         <div class="header-w3layouts">
            //navigation section 
            <nav class="navbar navbar-expand-lg navbar-light">
               <div class="hedder-up">
                  <h1><a class="navbar-brand" href="#">Studio Point</a></h1>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item active">
                        <a class="nav-link" href="#">Add Photographer <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                         <a href="ViewUser.php" class="nav-link scroll">Users</a>
                     </li>
                    
                     <li class="nav-item">
                        <a href="#service" class="nav-link scroll">Orders</a>
                     </li>
                      <li class="nav-item">
                        <a href="#about" class="nav-link scroll">View Feedback</a>
                     </li>
                     <li class="nav-item">
                        <a href="#testimonials" class="nav-link scroll">Logout</a>
                     </li>
                     
                  </ul>
               </div>
            </nav>
            //navigation section 
            <div class="clearfix"> </div>
         </div>
        
         <div class="clearfix"></div>

      </div>-->
        <script>
            var email,fname,lname,cno,area,imag;
            var flag;
              function disabl()
                {
                     var btn = document.getElementById('b1');
                btn.disabled  = true;
                }
                 function btn_enb()
                 {
                    document.getElementById('b1').disabled = false;
                }
            function allvalues()
            {
                email = document.forms["myform"]["uname"].value;
                
                 fname = document.forms["myform"]["fname"].value;
                 lname = document.forms["myform"]["lname"].value;
                 phone = document.forms["myform"]["cno"].value;
                 
                 area = document.forms["myform"]["Area"].value;
                 imag = document.forms["myform"]["image"].value;
                 
            }
            function validate()
            {
                flag = false;
                allvalues();
                
             if(email ==="" || email === null)
            {
                document.getElementById('g1').innerHTML = "";
                document.getElementById('s1').innerHTML = "Please enter your Email!"; 
                return  false;
            }
            
            if(email !=="" || email !== null)
            {
                if(email.indexOf("@", 0) < 0 || email.indexOf(".", 0) < 0)
                {
                    document.getElementById('g1').innerHTML = "";
                    document.getElementById('s1').innerHTML = "Please enter valid Email!";
                    return  false;
                }
            }
                document.getElementById('s1').innerHTML = "";
                document.getElementById('g1').innerHTML = "Input OK!";
                
                
                 
//            var lowerCaseLetters = /[a-z]/g;
//            var upperCaseLetters = /[A-Z]/g;
//            var nos = /[0-9]/g;
                
            
            var nos = /[0-9]/g;
            //fname
            
            if(fname ==="" || fname === null)
            {              
                document.getElementById('g2').innerHTML = "";
                document.getElementById('s2').innerHTML = "Please enter your first name!"; 
                
                return  false;
            }
            
            if(fname !=="" || fname !== null)
            {
                if(fname.match(nos))
                {
                    document.getElementById('g2').innerHTML = "";
                    document.getElementById('s2').innerHTML = "Please enter alphabets only!"; 
                    return  false;
                }
                else if(fname.length <= 2)
                {
                    document.getElementById('g2').innerHTML = "";
                    document.getElementById('s2').innerHTML = "Less than 2 chars not allowed"; 
                    return  false;
                }
                else if(fname.length > 12)
                {
                    document.getElementById('g2').innerHTML = "";
                    document.getElementById('s2').innerHTML = "More than 12 chars not allowed"; 
                    return  false;
                }
            }
                document.getElementById('s2').innerHTML = "";
                document.getElementById('g2').innerHTML = "Input OK!";
            
            
            
            //lname 
            if(lname ==="" || lname === null)
            {
                document.getElementById('g3').innerHTML = "";
                document.getElementById('s3').innerHTML = "Please enter your last name!"; 
                return  false;
            }
            
            if(lname!=="" || lname !== null)
            {
                if(lname.match(nos))
                {
                    document.getElementById('g3').innerHTML = "";
                    document.getElementById('s3').innerHTML = "Please enter alphabets only!"; 
                    return  false;
                }
                 else if(lname.length <= 2)
                {
                    document.getElementById('g3').innerHTML = "";
                    document.getElementById('s3').innerHTML = "less than 2 chars not allowed"; 
                    return  false;
                }
                else if(lname.length > 12)
                {
                    document.getElementById('g3').innerHTML = "";
                    document.getElementById('s3').innerHTML = "More than 12 chars not allowed"; 
                    return  false;
                }
            }
            document.getElementById('s3').innerHTML = "";
            document.getElementById('g3').innerHTML = "Input OK!";
            
            
             var numbers = /^[0-9]+$/;
            //phone
            if(phone === null || phone === "" )
            {
                document.getElementById('g4').innerHTML = "";
                document.getElementById('s4').innerHTML = "Please enter your Phone number"; 
                return  false;
            }
            
            if(phone.match(numbers))
            {
                if(phone.length === 10 )
                {
                    document.getElementById('s4').innerHTML = "";
                    document.getElementById('g4').innerHTML = "Input OK!";
                    btn_enb();
                }
                
                else
                {
                    document.getElementById('g4').innerHTML = "";
                    document.getElementById('s4').innerHTML = "Phone number must be 10 digit numbers!"; 
                    return  false;
                }
            }

          
        }
            </script>
    </head>
    <body onload="disabl()">
        <div>
            <br><br><br><br>
            <h3 class="title text-left mb-lg-5 mb-md-4 mb-sm-4 mb-3" style="margin-left: 510px;"><span>Add Photographer</span></h3>
         <form method="POST" name="myform" enctype="multipart/form-data" style="margin-left: 400px; margin-right: 400px;">
      <div class="form-group contact-forms">
      <input type="email" class="form-control" name="uname" onkeyup="validate()" placeholder="User Name"><span style="color:red" id="s1"></span>  <span style="color:green" id="g1"></span>
      </div>
     <div class="form-group contact-forms">
      <input type="text" class="form-control" name="fname" onkeyup="validate()" placeholder="Enter first name"><span style="color:red" id="s2"></span>  <span style="color:green" id="g2"></span>
      </div>
      <div class="form-group contact-forms">
      <input type="text" class="form-control" name="lname" onkeyup="validate()" placeholder="Enter last name"><span style="color:red" id="s3"></span>  <span style="color:green" id="g3"></span>
      </div>
      
      
      <div class="form-group contact-forms">
      <input type="text" class="form-control" name="cno" onkeyup="validate()" placeholder="Contact number"><span style="color:red" id="s4"></span>  <span style="color:green" id="g4"></span>
      </div>
      
      <div class="form-group contact-forms">
          <select name="Area"  style="    font-size: 14px;
    color: #000;
    padding: 1em;
    border: none;
    border-bottom: 1px solid #00adcb;
    border-radius: 0px;
    background: rgba(222, 222, 222, 0.3411764705882353);
    outline: none;">
               
          <?php
          
          
          $arr1=array();
           $q="SELECT `aid`, `areaname` FROM `area` WHERE 1";
          $res = mysqli_query($con, $q);
          echo '<option>Select Area</option>';
          while($f = mysqli_fetch_assoc($res))
          {
              $arr1[]= $f["cid"];
              
              echo '<option>'.$f["areaname"].'</option>';
          }
          
          
          ?>
              </select>
      </div>
        <div class="form-group contact-forms">
            <input type="file" name="image" value="" id="image"/>     
        </div>
      <button type="submit" class="btn btn-block sent-butnn" id="b1" name="Submit">Submit</button>
      </form></div>        
          <?php
        // put your code here
      if(isset($_POST["Submit"]))
               {
                  echo  $v1=$_POST["uname"];
                    
                    $v2=$_POST["fname"];
                    $v3=$_POST["lname"];
                    $v4=$_POST["cno"];
                    $v5=$_POST["Area"];
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
        $email=$v1;

        $mail->addAddress($email);               // Name is optional
        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
        $mail->isHTML(true);                                  // Set email format to HTML

       
        $str = "your username is ".$v1." and your password = ".$pass;
        $mail->Subject = "test";
        $mail->Body    = $str;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if (!$mail->send()) 
        {

           echo  "Mail Not Sent";
        } 
        else 
         {

            //$con=  mysqli_connect("localhost", "root", "", "registration");
                   $q1= "INSERT INTO `logintable`(`lid`, `email`, `password`, `role`) "
                            . "VALUES (null,'$v1','$pass','Photographer')";
                    
                    $res = mysqli_query($con, $q1);
                    if( $res>0)
                    {
                     echo  $lid  = mysqli_insert_id($con);
                       $dir = "ProfilePictures/";
                       $imgnme =  $dir.basename($lid.".png");
                        if(move_uploaded_file($_FILES["image"]["tmp_name"], $imgnme))
                        { 
                    
                            $q="INSERT INTO `photographerreg`(`pid`, `f_name`, `l_name`, `pcno`, `parea`, `lid`,`profilepic`) VALUES"
                            . " (null,'$v2','$v3',$v4,'$v5',$lid,'$imgnme')";
                    
                            $res=  mysqli_query($con,$q);
                             if($res>0)
                            {
                               echo "Photographer Added Successfully";
                            }
                            else 
                            {
                                echo 'Try again.';
                            }
                        }
                        else
                        {
                            echo 'Data not inserted';
                        }
                    }
        }

                   
               }
        ?>
    </body>
</html>
