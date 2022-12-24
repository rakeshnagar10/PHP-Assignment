<?php
require_once'function.php';
$insertdata=new DB_con();
if(isset($_POST['insert']))
{
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];
$sql=$insertdata->insert($fname,$lname,$emailid,$contactno,$address);
if($sql)
{
    echo "<script>alert('Record inserted successfully');</script>";
    echo "<script>window.location.href='index.php'</script>";
}
else
{
    echo "<script>alert('Something went wrong. Please try again');</script>";
    echo "<script>window.location.href='index.php'</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>crud with oops operator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">

<div class="row mt-3">
<div class="col-md-12">
<h5>Add User</h5>
</div>
</div>


<form name="insertrecord" method="post">
<div class="row mb-1">
<div class="col-md-4">First Name
<input type="text" name="firstname" class="form-control" required>
</div>
<div class="col-md-4">Last Name
<input type="text" name="lastname" class="form-control" required>
</div>
</div>

<div class="row mb-1">
<div class="col-md-4">Email id
<input type="email" name="emailid" class="form-control" required>
</div>
<div class="col-md-4">Contactno
<input type="text" name="contactno" class="form-control" maxlength="10" required>
</div>
</div>  



<div class="row mb-1">
<div class="col-md-8">Address
<textarea class="form-control" name="address" required></textarea>
</div>
</div>  

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" class="btn btn-primary" name="insert" value="Submit">
</div>
</div> 
     
         

</form>           
</div>
</div>
</body>
</html>