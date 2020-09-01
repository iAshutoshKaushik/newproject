<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{ 

// code for block student    
if(isset($_GET['inid']))
{
$id=$_GET['inid'];
$status=0;
$sql = "update tblstudents set Status=:status  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query -> execute();
header('location:reg-students.php');
}



//code for active students
if(isset($_GET['id']))
{
$id=$_GET['id'];
$status=1;
$sql = "update tblstudents set Status=:status  WHERE id=:id";
$query = $dbh->prepare($sql);
$query -> bindParam(':id',$id, PDO::PARAM_STR);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query -> execute();
header('location:reg-students.php');
}


    ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | Manage Reg Students</title>
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
<body>
      <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Reports</h4>
    </div>


        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Repots Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                             <th><a href="reg-students.php">Reg Users</a></th> 
                                            <th><a href="manage-issued-books.php">Times Issued Books</a></th>
                                            <th><a href="manage-books.php">Listed Books</a></th>
                                            <th><a href="reg-students.php">Blocked students</a></th>
                                            <th><a href="manage-issued-books.php">Books not returned</a></th>
                                            
                                            
                                        
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
 <?php 
$sql3 ="SELECT id from tblstudents ";
$query3 = $dbh -> prepare($sql3);
$query3->execute();
$results3=$query3->fetchAll(PDO::FETCH_OBJ);
$regstds=$query3->rowCount();
?>    
                                        
<?php 
$sql1 ="SELECT id from tblissuedbookdetails ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$issuedbooks=$query1->rowCount();
?>
                            
<?php 
$sql ="SELECT id from tblbooks ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchall(PDO::FETCH_OBJ);
$listdbooks=$query->rowCount();
?>
                                        
<?php 
$status=0;
$sql2 ="SELECT id from tblstudents where Status=:status";
$query2 = $dbh -> prepare($sql2);
$query2->bindParam(':status',$status,PDO::PARAM_STR);
$query2->execute();
$results2=$query2->fetchAll(PDO::FETCH_OBJ);
$blkstudent=$query2->rowCount();
?>
                                        
 <?php 
$sql4 ="SELECT sum(fine) from tblissuedbookdetails";
$query4 = $dbh -> prepare($sql4);
$query4->execute();
$results4=$query4->fetchAll(PDO::FETCH_OBJ);
$finetotal=$query4->rowcount();
    
?>
                                        
<?php 
$status=0;
$sql5 ="SELECT id from tblissuedbookdetails where RetrunStatus=:status";
$query5 = $dbh -> prepare($sql2);
$query5->bindParam(':status',$status,PDO::PARAM_STR);
$query5->execute();
$results5=$query5->fetchAll(PDO::FETCH_OBJ);
$notreturn=$query5->rowCount();
?>
                                        

                                        
                                        
                                     
                                        <tr class="odd gradeX">
                                            
                                            <td class="center"><?php echo htmlentities($regstds);?></td>
                                            <td class="center"><?php echo htmlentities($issuedbooks);?></td>
                                            <td class="center"><?php echo htmlentities($listdbooks);?></td>
                                            <td class="center"><?php echo htmlentities($blkstudent);?></td>
                                            <td class="center"><?php echo htmlentities($notreturn);?></td>
                                            
                                             
                                            
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>


            
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
